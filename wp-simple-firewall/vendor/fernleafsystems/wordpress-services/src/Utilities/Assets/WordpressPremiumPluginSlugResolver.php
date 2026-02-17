<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Assets;

use FernleafSystems\Wordpress\Services\Utilities\Integrations\AptoWebApi\Api;

/**
 * Resolves a premium slug from an incoming slug and local asset facts.
 *
 * Input may be a wp.org slug, a premium slug, or a directory fallback slug.
 * The resolver loads matching heuristic candidates, scores each candidate, and
 * picks the best match by confidence, then score, then total heuristic weight.
 *
 * If two different premium slugs are tied after all ranking checks, resolution
 * fails safe and returns no premium slug.
 */
class WordpressPremiumPluginSlugResolver {

	public const MIN_CONFIDENCE = 80;

	private Api $api;

	private static array $resolverCache = [];

	public function __construct( ?Api $api = null ) {
		$this->api = $api ?? new Api( '1' );
	}

	public function resolvePremiumSlug( string $wpOrgSlug, array $pluginData, string $baseFileOrStylesheet = '', string $type = 'plugin' ) :?string {
		$result = $this->resolvePremiumSlugWithConfidence( $wpOrgSlug, $pluginData, $baseFileOrStylesheet, $type );
		return $result[ 'confidence' ] >= self::MIN_CONFIDENCE ? $result[ 'premium_slug' ] : null;
	}

	public function resolvePremiumSlugWithConfidence( string $wpOrgSlug, array $pluginData, string $baseFileOrStylesheet = '', string $type = 'plugin' ) :array {
		$resolved = [
			'premium_slug'       => null,
			'confidence'         => 0,
			'threshold'          => self::MIN_CONFIDENCE,
			'matched_heuristics' => [],
		];

		$wpOrgSlug = \strtolower( \trim( $wpOrgSlug ) );
		if ( $wpOrgSlug === '' ) {
			return $resolved;
		}

		if ( empty( $baseFileOrStylesheet ) && isset( $pluginData[ 'plugin_file' ] ) ) {
			$baseFileOrStylesheet = (string)$pluginData[ 'plugin_file' ];
		}

		$key = \md5( $wpOrgSlug.\serialize( $pluginData ).$baseFileOrStylesheet.$type );
		if ( !isset( self::$resolverCache[ $key ] ) ) {

			$heuristicsPayload = $this->api->wpPremiumAssetHeuristics()[ $type === 'plugin' ? 'plugins' : 'themes' ] ?? [];
			if ( \is_array( $heuristicsPayload ) ) {

				$assetHeuristicsPayloads = $this->findAssetHeuristicsPayloads( $heuristicsPayload, $wpOrgSlug );
				$bestCandidate = null;
				$isAmbiguous = false;

				foreach ( $assetHeuristicsPayloads as $assetHeuristics ) {
					$candidateResolution = $this->resolveCandidate( $assetHeuristics, $pluginData, $baseFileOrStylesheet );
					if ( !empty( $candidateResolution ) ) {
						if ( $bestCandidate === null ) {
							$bestCandidate = $candidateResolution;
							$isAmbiguous = false;
						}
						else {
							$comparison = $this->compareResolvedCandidates( $candidateResolution, $bestCandidate );
							if ( $comparison > 0 ) {
								$bestCandidate = $candidateResolution;
								$isAmbiguous = false;
							}
							elseif ( $comparison === 0 && $candidateResolution[ 'premium_slug' ] !== $bestCandidate[ 'premium_slug' ] ) {
								$isAmbiguous = true;
							}
						}
					}
				}

				if ( !empty( $bestCandidate ) && !$isAmbiguous ) {
					$resolved[ 'premium_slug' ] = $bestCandidate[ 'premium_slug' ];
					$resolved[ 'matched_heuristics' ] = $bestCandidate[ 'matched_heuristics' ];
					$resolved[ 'confidence' ] = $bestCandidate[ 'confidence' ];
				}
			}

			self::$resolverCache[ $key ] = $resolved;
		}
		return self::$resolverCache[ $key ];
	}

	private function findAssetHeuristicsPayloads( array $heuristicsPayload, string $wpOrgSlug ) :array {
		$assetHeuristicsPayloads = [];

		foreach ( \array_filter( $heuristicsPayload, '\is_array' ) as $candidate ) {
			$candidateWpOrgSlug = \strtolower( \trim( (string)( $candidate[ 'wporg_slug' ] ?? '' ) ) );
			$candidatePremiumSlug = \strtolower( \trim( (string)( $candidate[ 'premium_slug' ] ?? '' ) ) );
			if ( $candidateWpOrgSlug === $wpOrgSlug || $candidatePremiumSlug === $wpOrgSlug ) {
				$assetHeuristicsPayloads[] = $candidate;
			}
		}

		return $assetHeuristicsPayloads;
	}

	private function resolveCandidate( array $assetHeuristics, array $pluginData, string $baseFileOrStylesheet ) :array {
		$candidateResolution = [];

		$premiumSlug = \strtolower( \trim( (string)( $assetHeuristics[ 'premium_slug' ] ?? '' ) ) );
		if ( $premiumSlug !== '' ) {
			[ $score, $totalWeight, $matched ] = $this->evaluateHeuristics(
				\is_array( $assetHeuristics[ 'heuristics' ] ?? null ) ? $assetHeuristics[ 'heuristics' ] : [],
				$pluginData,
				$baseFileOrStylesheet
			);

			$candidateResolution = [
				'premium_slug'       => $premiumSlug,
				'confidence'         => $totalWeight > 0 ? (int)\round( $score*100/$totalWeight ) : 0,
				'matched_heuristics' => $matched,
				'score'              => $score,
				'total_weight'       => $totalWeight,
			];
		}

		return $candidateResolution;
	}

	private function compareResolvedCandidates( array $candidate, array $currentBest ) :int {
		$comparison = $candidate[ 'confidence' ] <=> $currentBest[ 'confidence' ];
		if ( $comparison === 0 ) {
			$comparison = $candidate[ 'score' ] <=> $currentBest[ 'score' ];
		}
		if ( $comparison === 0 ) {
			$comparison = $candidate[ 'total_weight' ] <=> $currentBest[ 'total_weight' ];
		}
		return $comparison;
	}

	private function evaluateHeuristics( array $heuristics, array $pluginData, string $pluginBaseFile ) :array {
		$facts = $this->buildFacts( $pluginData, $pluginBaseFile );
		$matched = [];
		$score = 0;
		$totalWeight = 0;

		foreach ( \array_filter( $heuristics, '\is_array' ) as $heuristic ) {
			$type = \strtolower( \trim( (string)( $heuristic[ 'type' ] ?? '' ) ) );
			$value = (string)( $heuristic[ 'value' ] ?? '' );
			$weight = \max( 0, (int)( $heuristic[ 'weight' ] ?? 0 ) );
			if ( $type !== '' && $weight > 0 ) {
				$totalWeight += $weight;
				if ( $this->matchesHeuristic( $type, $value, $facts ) ) {
					$score += $weight;
					$matched[] = [
						'type'   => $type,
						'value'  => $value,
						'weight' => $weight,
					];
				}
			}
		}

		return [ $score, $totalWeight, $matched ];
	}

	private function buildFacts( array $pluginData, string $pluginBaseFile ) :array {
		$pluginBaseFile = $this->normalizePath( $pluginBaseFile );
		$pluginDirectory = '';
		if ( !empty( $pluginBaseFile ) ) {
			$pluginDirectory = \str_contains( $pluginBaseFile, '/' )
				? \trim( \dirname( $pluginBaseFile ), '/.' )
				: \trim( $pluginBaseFile, '/.' );
		}

		return [
			'basename'    => $pluginBaseFile,
			'install_dir' => $pluginDirectory,
			'name'        => \strtolower( \trim( (string)( $pluginData[ 'Name' ] ?? '' ) ) ),
			'author'      => \strtolower( \trim( (string)( $pluginData[ 'AuthorName' ] ?? $pluginData[ 'Author' ] ?? '' ) ) ),
			'update_uri'  => \strtolower( \trim( (string)( $pluginData[ 'UpdateURI' ] ?? $pluginData[ 'Update URI' ] ?? '' ) ) ),
			'plugin_uri'  => \strtolower( \trim( (string)( $pluginData[ 'PluginURI' ] ?? '' ) ) ),
			'text_domain' => \strtolower( \trim( (string)( $pluginData[ 'TextDomain' ] ?? '' ) ) ),
		];
	}

	private function matchesHeuristic( string $type, string $value, array $facts ) :bool {
		$value = \strtolower( \trim( $value ) );
		if ( \in_array( $type, [ 'plugin_file_exact', 'plugin_file_ends_with', 'install_dir_exact' ], true ) ) {
			$value = $this->normalizePath( $value );
		}

		switch ( $type ) {
			case 'plugin_file_exact':
				return !empty( $facts[ 'basename' ] ) && $facts[ 'basename' ] === $value;
			case 'plugin_file_ends_with':
				return !empty( $facts[ 'basename' ] ) && !empty( $value ) && $this->endsWith( $facts[ 'basename' ], $value );
			case 'install_dir_exact':
				return !empty( $facts[ 'install_dir' ] ) && $facts[ 'install_dir' ] === \trim( $value, '/.' );
			case 'name_equals':
				return !empty( $facts[ 'name' ] ) && $facts[ 'name' ] === $value;
			case 'name_contains':
				return !empty( $facts[ 'name' ] ) && !empty( $value ) && $this->contains( $facts[ 'name' ], $value );
			case 'author_contains':
				return !empty( $facts[ 'author' ] ) && !empty( $value ) && $this->contains( $facts[ 'author' ], $value );
			case 'update_uri_contains':
				return !empty( $facts[ 'update_uri' ] ) && !empty( $value ) && $this->contains( $facts[ 'update_uri' ], $value );
			case 'plugin_uri_contains':
				return !empty( $facts[ 'plugin_uri' ] ) && !empty( $value ) && $this->contains( $facts[ 'plugin_uri' ], $value );
			case 'text_domain_equals':
				return !empty( $facts[ 'text_domain' ] ) && $facts[ 'text_domain' ] === $value;
			default:
				return false;
		}
	}

	private function normalizePath( string $path ) :string {
		$path = \str_replace( '\\', '/', \trim( $path ) );
		return \strtolower( \trim( $path, '/' ) );
	}

	private function contains( string $haystack, string $needle ) :bool {
		return \strpos( $haystack, $needle ) !== false;
	}

	private function endsWith( string $haystack, string $needle ) :bool {
		return \substr( $haystack, -\strlen( $needle ) ) === $needle;
	}
}
