<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\AptoWebApi;

use FernleafSystems\Wordpress\Services\Services;

class Api {

	public const ApiRoot = 'https://api.aptoweb.com/api/v%s/';

	private string $version;

	public function __construct( string $version = '1' ) {
		$this->version = $version;
	}

	public function geoIP( string $ip ) :?array {
		$result = $this->fire( sprintf( 'ip/geo/%s', $ip ) );
		return $result ? \array_intersect_key( $result, \array_flip( [ 'country', 'asn' ] ) ) : null;
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
}