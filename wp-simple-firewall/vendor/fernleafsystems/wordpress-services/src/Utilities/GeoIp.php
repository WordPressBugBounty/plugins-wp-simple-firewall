<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities;

use FernleafSystems\Wordpress\Services\Utilities\Integrations\AptoWebApi\Api;

class GeoIp {

	protected static ?GeoIp $I = null;

	private array $results = [];

	public static function GetInstance() :GeoIp {
		return self::$I ??= new self();
	}

	public function countryName( string $ip ) :?string {
		return $this->countryProp( $ip, 'name' );
	}

	public function countryAlpha2( string $ip ) :?string {
		return $this->countryProp( $ip, 'alpha2' );
	}

	public function countryAlpha3( string $ip ) :?string {
		return $this->countryProp( $ip, 'alpha3' );
	}

	/**
	 * @return string - ISO2
	 */
	public function countryIso( string $ip ) :?string {
		return $this->countryProp( $ip, 'alpha2' );
	}

	public function countryProp( string $ip, string $prop ) :?string {
		return $this->lookupIp( $ip )[ 'country' ][ $prop ] ?? null;
	}

	public function lookupIp( string $ip ) :array {
		return $this->results[ $ip ] ??= ( new Api() )->geoIP( $ip );
	}
}