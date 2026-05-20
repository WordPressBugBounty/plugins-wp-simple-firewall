<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\AptoWebApi;

use FernleafSystems\Wordpress\Services\Services;
use FernleafSystems\Wordpress\Services\Utilities\Options\Transient;

class Api {

	public const ApiRoot = 'https://api.aptoweb.com/api/apto/v%s/';

	private string $version;

	public function __construct( string $version = '1' ) {
		$this->version = $version;
	}

	private function fire( string $path ) :?array {
		$result = null;
		$raw = Services::HttpRequest()->getContent( sprintf( self::ApiRoot, $this->version ).$path );
		if ( !empty( $raw ) ) {
			$jsonDecoded = \json_decode( $raw, true );
			if ( !empty( $jsonDecoded ) && \is_array( $jsonDecoded ) ) {
				$result = $jsonDecoded;
			}
		}
		return $result;
	}

	public function geoIP( string $ip ) :?array {
		$result = $this->fire( sprintf( 'ip/geo/%s', $ip ) );
		return $result ?: null;
	}

	/**
	 * @return array{plugins:list<array<string,mixed>>, themes:list<array<string,mixed>>}
	 */
	public function wpPremiumAssetHeuristics() :array {
		$heuristics = Transient::Get( 'aptoweb_api_premium_asset_heuristics' );
		$shouldPersist = false;
		if ( !\is_array( $heuristics ) ) {
			$heuristics = $this->fire( 'wordpress/premium-assets/heuristics' );
			$shouldPersist = true;
		}
		$normalized = $this->normalizeWordpressHeuristicsPayload( $heuristics );
		if ( !$shouldPersist && $normalized !== $heuristics ) {
			$shouldPersist = true;
		}
		if ( $shouldPersist ) {
			$heuristics = $normalized;
			Transient::Set( 'aptoweb_api_premium_asset_heuristics', $heuristics, WEEK_IN_SECONDS );
		}
		return $normalized;
	}

	/**
	 * @return array{plugins:list<array<string,mixed>>, themes:list<array<string,mixed>>}
	 */
	private function normalizeWordpressHeuristicsPayload( $payload ) :array {
		if ( \is_array( $payload ) && \is_array( $payload[ 'data' ] ?? null ) ) {
			$payload = $payload[ 'data' ];
		}

		return [
			'plugins' => $this->normalizeHeuristicsBucket( $payload[ 'plugins' ] ?? null ),
			'themes'  => $this->normalizeHeuristicsBucket( $payload[ 'themes' ] ?? null ),
		];
	}

	/**
	 * @return list<array<string,mixed>>
	 */
	private function normalizeHeuristicsBucket( $bucket ) :array {
		return \is_array( $bucket ) ? \array_values( \array_filter( $bucket, '\is_array' ) ) : [];
	}
}
