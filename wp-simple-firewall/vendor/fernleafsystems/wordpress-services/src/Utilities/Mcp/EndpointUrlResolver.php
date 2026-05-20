<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp;

class EndpointUrlResolver {

	/**
	 * @param array{namespace:string,route:string}|array<string,mixed> $serverDefinition
	 */
	public function resolve( array $serverDefinition ) :string {
		$namespace = \trim( (string)( $serverDefinition[ 'namespace' ] ?? '' ), '/' );
		$route = \trim( (string)( $serverDefinition[ 'route' ] ?? '' ), '/' );

		if ( $namespace === '' || $route === '' ) {
			throw new \InvalidArgumentException( 'MCP endpoint URL resolution requires non-empty "namespace" and "route" values.' );
		}

		return $this->buildRestUrl( $namespace.'/'.$route );
	}

	protected function buildRestUrl( string $path ) :string {
		return \rest_url( $path );
	}
}
