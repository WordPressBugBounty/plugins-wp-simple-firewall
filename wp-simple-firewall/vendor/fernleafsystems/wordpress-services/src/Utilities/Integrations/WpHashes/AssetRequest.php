<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes;

use FernleafSystems\Wordpress\Services\Utilities\Constants\Regex;

class AssetRequest {
	private const HASH_ALGOS = [
		'md5',
		'sha1',
		'sha256',
		'sha384',
		'sha512',
	];

	public static function normalizeLongType( $type ): ?string {
		$type = self::normalizeString( $type );
		if ( \in_array( $type, [ 'plugin', 'p' ], true ) ) {
			$type = 'plugin';
		}
		elseif ( \in_array( $type, [ 'theme', 't' ], true ) ) {
			$type = 'theme';
		}
		else {
			$type = null;
		}
		return $type;
	}

	public static function normalizeShortType( $type ): ?string {
		$type = self::normalizeLongType( $type );
		return $type === null ? null : self::convertLongToShort( $type );
	}

	/**
	 * @param string $type - assumes already normalised type, so one of 'theme', 't', or 'plugin', 'p'
	 */
	public static function convertLongToShort( string $type ): string {
		return \in_array( $type, [ 'theme', 't' ] ) ? 't' : 'p';
	}

	public static function normalizeSlug( $slug ): ?string {
		$slug = self::normalizeString( $slug );
		if ( $slug === ''
		     || \strpos( $slug, '.' ) !== false
		     || \strpos( $slug, '/' ) !== false
		     || \strpos( $slug, '\\' ) !== false ) {
			return null;
		}

		return \preg_match( \sprintf( '#^%s$#', Regex::ASSET_SLUG ), $slug ) === 1 ? $slug : null;
	}

	public static function normalizeVersion( $version, bool $trimWrappingV = false ): ?string {
		$version = self::normalizeString( $version, false );
		if ( $trimWrappingV ) {
			$version = \trim( $version, 'v' );
		}

		if ( $version === ''
		     || \strpos( $version, '/' ) !== false
		     || \strpos( $version, '\\' ) !== false
		     || \preg_match( '/[\x00-\x1F\x7F]/', $version ) === 1 ) {
			$version = null;
		}

		return $version;
	}

	public static function normalizeHashAlgo( $hashAlgo, string $defaultAlgo ): ?string {
		$algo = self::normalizeString( $hashAlgo ?? $defaultAlgo );
		if ( $algo === '' ) {
			$algo = self::normalizeString( $defaultAlgo );
		}

		return \in_array( $algo, self::HASH_ALGOS, true ) ? $algo : null;
	}

	public static function path( array $segments ): string {
		return \implode( '/', \array_map(
			static fn( $segment ): string => \rawurlencode( (string)$segment ),
			$segments
		) );
	}

	private static function normalizeString( $value, bool $lowercase = true ): string {
		if ( !\is_string( $value ) && !\is_int( $value ) && !\is_float( $value ) ) {
			return '';
		}

		$value = \trim( (string)$value );
		return $lowercase ? \strtolower( $value ) : $value;
	}
}
