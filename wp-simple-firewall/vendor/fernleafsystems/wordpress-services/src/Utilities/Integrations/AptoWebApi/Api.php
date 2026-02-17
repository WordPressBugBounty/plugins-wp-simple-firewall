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

	public function wpPremiumAssetHeuristics() :array {
		$heuristics = Transient::Get( 'aptoweb_api_premium_asset_heuristics' );
		if ( $heuristics === false ) {
			$heuristics = $this->extractWordpressHeuristicsPayload( $this->fire( 'wordpress/premium-assets/heuristics' ) );
			if ( !\is_array( $heuristics ) ) {
				$heuristics = [];
			}
			Transient::Set( 'aptoweb_api_premium_asset_heuristics', $heuristics, WEEK_IN_SECONDS );
		}
		return $heuristics;
	}

	private function extractWordpressHeuristicsPayload( ?array $response ) :?array {
		return $this->extractWithinDataKey( $response );
	}

	private function extractWithinDataKey( ?array $response ) :?array {
		$data = $response[ 'data' ] ?? null;
		return \is_array( $data ) ? $data : null;
	}
}
