<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp;

interface HookRegistrarInterface {

	public function addAction( string $hook, callable $callback, int $priority = 10, int $acceptedArgs = 1 ) :void;
}
