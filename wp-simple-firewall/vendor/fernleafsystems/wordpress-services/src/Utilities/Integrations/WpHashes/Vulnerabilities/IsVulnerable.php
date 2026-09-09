<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes\Vulnerabilities;

use FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes;
use FernleafSystems\Wordpress\Services\Utilities\Integrations\WpHashes\AssetRequest;

class IsVulnerable extends WpHashes\ApiBase {

	public const API_ENDPOINT = 'vulnerable';
	public const API_VERSION = 2;

	private string $type;

	private string $slug;

	private string $version;

	protected function getApiUrl() :string {
		return sprintf( '%s/%s', parent::getApiUrl(), AssetRequest::path( [ $this->type, $this->slug, $this->version ] ) );
	}

	public function wordpress( string $version ) :bool {
		return $this->sendRequest( 'w', 'c', $version );
	}

	public function plugin( string $slug, string $version ) :bool {
		return $this->sendAssetRequest( 'p', $slug, $version );
	}

	public function theme( string $slug, string $version ) :bool {
		return $this->sendAssetRequest( 't', $slug, $version );
	}

	private function sendAssetRequest( string $type, string $slug, string $version ) :bool {
		$type = AssetRequest::normalizeShortType( $type );
		$slug = AssetRequest::normalizeSlug( $slug );
		$version = AssetRequest::normalizeVersion( $version );
		return $type !== null
		       && $slug !== null
		       && $version !== null
			   && $this->sendRequest( $type, $slug, $version );
	}

	protected function sendRequest( string $type, string $slug, string $version ) :bool {
		$this->type = $type;
		$this->slug = $slug;
		$this->version = $version;
		return $this->query()[ 'vulnerable' ] ?? false;
	}
}
