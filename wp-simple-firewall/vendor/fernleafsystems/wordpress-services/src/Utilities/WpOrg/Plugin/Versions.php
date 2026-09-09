<?php

namespace FernleafSystems\Wordpress\Services\Utilities\WpOrg\Plugin;

use FernleafSystems\Wordpress\Services\Utilities\WpOrg\Base\PluginThemeVersionsBase;

class Versions extends PluginThemeVersionsBase {

	use Base;

	/**
	 * @return Api
	 */
	protected function getApi() {
		$api = new Api();
		$api->fields = [ 'versions' => true ];
		return $api;
	}

	protected function getUrlForVersion( string $version ) :string {
		return Repo::GetUrlForPluginVersion( $this->getWorkingSlug(), $version );
	}
}
