<?php

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes\Hashes;

use FernleafSystems\Wordpress\Services\Services;

class WordPress extends AssetHashesBase {

	public const TYPE = 'wordpress';

	/**
	 * @param string $version
	 * @param string $locale
	 * @param string $hashAlgo
	 * @return string[]|null
	 */
	public function getHashes( $version, $locale = null, $hashAlgo = null ) {
		/** @var RequestVO $req */
		$req = $this->getRequestVO();
		$req->version = $version;
		$req->hash = $hashAlgo;
		$req->locale = $this->normalizeLocale( empty( $locale ) ? Services::WpGeneral()->getLocaleForChecksums() : $locale );
		return $this->query();
	}

	/**
	 * @return string[]|null
	 */
	public function getCurrent() {
		$WP = Services::WpGeneral();
		return $this->getHashes( $WP->getVersion(), $WP->getLocaleForChecksums() );
	}

	protected function getApiUrl() :string {
		/** @var RequestVO $req */
		$req = $this->getRequestVO();

		$data = \array_filter( [
			\strtolower( (string)$req->type ),
			\strtolower( (string)$req->version ),
			$this->normalizeLocale( (string)$req->locale ),
			\strtolower( (string)$req->hash ),
		] );

		return sprintf(
			'%s/v%s/%s/%s',
			static::API_URL,
			static::API_VERSION,
			$this->getApiEndpoint(),
			\implode( '/', $data )
		);
	}

	private function normalizeLocale( string $locale ) :string {
		$locale = \str_replace( '-', '_', \trim( $locale ) );
		if ( empty( $locale ) ) {
			return '';
		}

		$parts = \array_values( \array_filter( \explode( '_', $locale ), '\strlen' ) );
		if ( empty( $parts ) ) {
			return '';
		}

		$parts[ 0 ] = \strtolower( $parts[ 0 ] );
		if ( isset( $parts[ 1 ] ) ) {
			$parts[ 1 ] = \strtoupper( $parts[ 1 ] );
		}
		if ( \count( $parts ) > 2 ) {
			$parts = \array_merge(
				\array_slice( $parts, 0, 2 ),
				\array_map( '\strtolower', \array_slice( $parts, 2 ) )
			);
		}

		return \implode( '_', $parts );
	}
}
