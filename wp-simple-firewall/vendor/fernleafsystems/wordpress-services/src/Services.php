<?php

namespace FernleafSystems\Wordpress\Services;

use Pimple\Container;

class Services {

	/**
	 * @var Container
	 */
	protected static $oDic;

	private static Services $oInstance;

	protected static $services;

	protected static $items;

	public static function GetInstance() :Services {
		return static::$oInstance ??= new static();
	}

	/**
	 * Protected constructor to prevent creating a new instance of the
	 * *Singleton* via the `new` operator from outside of this class.
	 */
	protected function __construct() {
		$this->registerAll();
		// initiate these early
		self::CustomHooks();
		self::ThisRequest();
		self::WpCron();
	}

	public function registerAll() {
		self::$oDic = new Container();
		self::$oDic[ 'service_data' ] = fn() => new Utilities\Data();
		self::$oDic[ 'service_corefilehashes' ] = fn() => new Core\CoreFileHashes();
		self::$oDic[ 'service_email' ] = fn() => new Utilities\Email();
		self::$oDic[ 'service_datamanipulation' ] = fn() => new Utilities\DataManipulation();
		self::$oDic[ 'service_customhooks' ] = fn() => new Core\CustomHooks();
		self::$oDic[ 'service_nonce' ] = fn() => new Core\Nonce();
		self::$oDic[ 'service_request' ] = fn() => new Core\Request();
		self::$oDic[ 'service_thisrequest' ] = fn() => new Request\ThisRequest();
		self::$oDic[ 'service_response' ] = fn() => new Core\Response();
		self::$oDic[ 'service_rest' ] = fn() => new Core\Rest();
		self::$oDic[ 'service_httprequest' ] = fn() => new Utilities\HttpRequest();
		self::$oDic[ 'service_render' ] = fn() => new Utilities\Render();
		self::$oDic[ 'service_respond' ] = fn() => new Core\Respond();
		self::$oDic[ 'service_serviceproviders' ] = fn() => new Utilities\ServiceProviders();
		self::$oDic[ 'service_includes' ] = fn() => new Core\Includes();
		self::$oDic[ 'service_ip' ] = fn() => new Utilities\IpUtils();
		self::$oDic[ 'service_encrypt' ] = fn() => new Utilities\Encrypt\OpenSslEncrypt();
		self::$oDic[ 'service_geoip' ] = fn() => new Utilities\GeoIp();
		self::$oDic[ 'service_wpadminnotices' ] = fn() => new Core\AdminNotices();
		self::$oDic[ 'service_wpcomments' ] = fn() => new Core\Comments();
		self::$oDic[ 'service_wpcron' ] = fn() => new Core\Cron();
		self::$oDic[ 'service_wpdb' ] = fn() => new Core\Db();
		self::$oDic[ 'service_wpfs' ] = fn() => new Core\Fs();
		self::$oDic[ 'service_wpgeneral' ] = fn() => new Core\General();
		self::$oDic[ 'service_wpplugins' ] = fn() => new Core\Plugins();
		self::$oDic[ 'service_wpthemes' ] = fn() => new Core\Themes();
		self::$oDic[ 'service_wppost' ] = fn() => new Core\Post();
		self::$oDic[ 'service_wptrack' ] = fn() => new Core\Track();
		self::$oDic[ 'service_wpusers' ] = fn() => new Core\Users();
	}

	public static function CustomHooks() :Core\CustomHooks {
		return self::getObj( __FUNCTION__ );
	}

	public static function Data() :Utilities\Data {
		return self::getObj( __FUNCTION__ );
	}

	public static function Email() :Utilities\Email {
		return self::getObj( __FUNCTION__ );
	}

	public static function DataManipulation() :Utilities\DataManipulation {
		return self::getObj( __FUNCTION__ );
	}

	public static function CoreFileHashes() :Core\CoreFileHashes {
		return self::getObj( __FUNCTION__ );
	}

	public static function Includes() :Core\Includes {
		return self::getObj( __FUNCTION__ );
	}

	public static function Encrypt() :Utilities\Encrypt\OpenSslEncrypt {
		return self::getObj( __FUNCTION__ );
	}

	public static function GeoIp() :Utilities\GeoIp {
		return self::getObj( __FUNCTION__ );
	}

	public static function HttpRequest() :Utilities\HttpRequest {
		return self::getObj( __FUNCTION__ );
	}

	public static function IP() :Utilities\IpUtils {
		return self::getObj( __FUNCTION__ );
	}

	public static function Nonce() :Core\Nonce {
		return self::getObj( __FUNCTION__ );
	}

	public static function Render( string $templatePath = '' ) :Utilities\Render {
		/** @var Utilities\Render $render */
		$render = self::getObj( __FUNCTION__ );
		if ( !empty( $templatePath ) ) {
			$render->setTemplateRoot( $templatePath );
		}
		return ( clone $render );
	}

	public static function ThisRequest() :Request\ThisRequest {
		return self::getObj( __FUNCTION__ );
	}

	public static function Request() :Core\Request {
		return self::getObj( __FUNCTION__ );
	}

	public static function Response() :Core\Response {
		return self::getObj( __FUNCTION__ );
	}

	public static function Rest() :Core\Rest {
		return self::getObj( __FUNCTION__ );
	}

	public static function Respond() :Core\Respond {
		return self::getObj( __FUNCTION__ );
	}

	public static function ServiceProviders() :Utilities\ServiceProviders {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpAdminNotices() :Core\AdminNotices {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpComments() :Core\Comments {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpCron() :Core\Cron {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpDb() :Core\Db {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpFs() :Core\Fs {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpGeneral() :Core\General {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpPlugins() :Core\Plugins {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpThemes() :Core\Themes {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpPost() :Core\Post {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpTrack() :Core\Track {
		return self::getObj( __FUNCTION__ );
	}

	public static function WpUsers() :Core\Users {
		return self::getObj( __FUNCTION__ );
	}

	public static function DataDir( string $path = '' ) :string {
		$dir = path_join( __DIR__, 'Data' );
		return empty( $path ) ? $dir : path_join( $dir, $path );
	}

	protected static function getObj( $keyFunction ) {
		$fullKey = 'service_'.\strtolower( $keyFunction );
		if ( !isset( self::$services ) ) {
			self::$services = self::$items ?? [];
		}
		if ( !isset( self::$services[ $fullKey ] ) ) {
			self::$services[ $fullKey ] = self::$oDic[ $fullKey ];
		}
		return self::$services[ $fullKey ];
	}
}