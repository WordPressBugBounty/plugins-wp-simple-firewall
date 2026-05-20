<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp;

interface AbilitiesApiInterface {

	public function addCategoryRegistrationHook( callable $callback ) :void;

	public function addAbilityRegistrationHook( callable $callback ) :void;

	public function hasCategory( string $slug ) :bool;

	/**
	 * @param array<string,mixed> $args
	 */
	public function registerCategory( string $slug, array $args ) :void;

	public function hasAbility( string $name ) :bool;

	/**
	 * @param array<string,mixed> $args
	 */
	public function registerAbility( string $name, array $args ) :void;
}
