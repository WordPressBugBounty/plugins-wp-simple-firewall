<?php

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes\Hashes;

use FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes\AssetRequest;

abstract class PluginThemeBase extends AssetHashesBase {
	/**
	 * @param string      $slug
	 * @param string      $version
	 * @param string|null $hashAlgo
	 * @return array|null
	 */
	public function getHashes( $slug, $version, $hashAlgo = null ) {
		$type = AssetRequest::normalizeLongType( static::TYPE );
		$slug = AssetRequest::normalizeSlug( $slug );
		$version = AssetRequest::normalizeVersion( $version );
		$hashAlgo = AssetRequest::normalizeHashAlgo( $hashAlgo, static::DEFAULT_HASH_ALGO );
		if ( $type === null || $slug === null || $version === null || $hashAlgo === null ) {
			return null;
		}

		/** @var RequestVO $req */
		$req = $this->getRequestVO();
		$req->type = AssetRequest::convertLongToShort( $type );
		$req->slug = $slug;
		$req->version = $version;
		$req->hash = $hashAlgo;
		return $this->query();
	}

	protected function getApiUrl(): string {
		/** @var RequestVO $req */
		$req = $this->getRequestVO();

		return sprintf(
			'%s/v%s/%s/%s',
			static::API_URL,
			static::API_VERSION,
			$this->getApiEndpoint(),
			AssetRequest::path( [ $req->type, $req->slug, $req->version, $req->hash ] )
		);
	}
}
