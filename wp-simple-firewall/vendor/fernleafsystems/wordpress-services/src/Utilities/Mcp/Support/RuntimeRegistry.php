<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp\Support;

class RuntimeRegistry {

	/** @var array<string,bool> */
	private static array $categories = [];

	/** @var array<string,bool> */
	private static array $abilities = [];

	/** @var array<string,bool> */
	private static array $servers = [];

	public static function Reset() :void {
		self::$categories = [];
		self::$abilities = [];
		self::$servers = [];
	}

	public static function IsCategoryRegistered( string $slug ) :bool {
		return isset( self::$categories[ $slug ] );
	}

	public static function MarkCategoryRegistered( string $slug ) :void {
		self::$categories[ $slug ] = true;
	}

	public static function IsAbilityRegistered( string $name ) :bool {
		return isset( self::$abilities[ $name ] );
	}

	public static function MarkAbilityRegistered( string $name ) :void {
		self::$abilities[ $name ] = true;
	}

	public static function IsServerRegistered( string $serverId ) :bool {
		return isset( self::$servers[ $serverId ] );
	}

	public static function MarkServerRegistered( string $serverId ) :void {
		self::$servers[ $serverId ] = true;
	}
}
