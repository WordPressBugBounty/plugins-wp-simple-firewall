<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp;

class WordPressAbilitiesApi implements AbilitiesApiInterface {

	private HookRegistrarInterface $hooks;

	public function __construct( ?HookRegistrarInterface $hooks = null ) {
		$this->hooks = $hooks ?? new WordPressHookRegistrar();
	}

	public function addCategoryRegistrationHook( callable $callback ) :void {
		$this->hooks->addAction( 'wp_abilities_api_categories_init', $callback );
	}

	public function addAbilityRegistrationHook( callable $callback ) :void {
		$this->hooks->addAction( 'wp_abilities_api_init', $callback );
	}

	public function hasCategory( string $slug ) :bool {
		return \function_exists( '\wp_has_ability_category' )
			   && \wp_has_ability_category( $slug );
	}

	public function registerCategory( string $slug, array $args ) :void {
		if ( \function_exists( '\wp_register_ability_category' ) ) {
			\wp_register_ability_category( $slug, $args );
		}
	}

	public function hasAbility( string $name ) :bool {
		return \function_exists( '\wp_has_ability' )
			   && \wp_has_ability( $name );
	}

	public function registerAbility( string $name, array $args ) :void {
		if ( \function_exists( '\wp_register_ability' ) ) {
			\wp_register_ability( $name, $args );
		}
	}
}
