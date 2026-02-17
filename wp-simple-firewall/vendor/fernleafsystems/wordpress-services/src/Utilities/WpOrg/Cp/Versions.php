<?php

namespace FernleafSystems\Wordpress\Services\Utilities\WpOrg\Cp;

use FernleafSystems\Wordpress\Services;

class Versions extends Services\Utilities\WpOrg\Base\VersionsBase {

	/**
	 * @param string $version
	 * @param bool   $isVerifyURL
	 */
	public function exists( $version, $isVerifyURL = false ) :bool {
		$exists = \in_array( $version, $this->all() );
		if ( $exists && $isVerifyURL ) {
			try {
				( new Services\Utilities\HttpUtil() )->checkUrl( Repo::GetUrlForVersion( $version ) );
			}
			catch ( \Exception $e ) {
				$exists = false;
			}
		}
		return $exists;
	}

	protected function downloadVersions() :array {
		$versionsRaw = @\json_decode(
			Services\Services::HttpRequest()->getContent( Repo::GetUrlForVersions() ), true
		);
		return \is_array( $versionsRaw ) ? \array_map( fn( $versionData ) => $versionData[ 'tag_name' ], $versionsRaw ) : [];
	}
}