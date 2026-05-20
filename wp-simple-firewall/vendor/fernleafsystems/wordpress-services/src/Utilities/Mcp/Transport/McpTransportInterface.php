<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp\Transport;

interface McpTransportInterface {

	public function isSupported() :bool;

	/**
	 * @param array{server_id:string,namespace:string,route:string,version:string,abilities:string[]} $serverDefinition
	 */
	public function registerServer( array $serverDefinition ) :void;

	public function getIdentifier() :string;
}
