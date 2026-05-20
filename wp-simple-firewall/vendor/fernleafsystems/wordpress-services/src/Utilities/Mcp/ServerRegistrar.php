<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp;

use FernleafSystems\Wordpress\Services\Utilities\Mcp\Support\{
	Compatibility,
	RuntimeRegistry
};
use FernleafSystems\Wordpress\Services\Utilities\Mcp\Transport\{
	McpTransportInterface,
	NullTransport,
	WpMcpAdapterTransport
};

class ServerRegistrar {

	/**
	 * @var array{server_id:string,namespace:string,route:string,version:string}
	 */
	private array $serverDefinition = [];

	/**
	 * @var array{slug:string,label:string,description:string}|array{}
	 */
	private array $categoryDefinition = [];

	/**
	 * @var list<array{name:string,args:array<string,mixed>}>
	 */
	private array $abilityDefinitions = [];

	/** @var callable|null */
	private $availabilityCallback;

	private ?AbilitiesApiInterface $abilitiesApi = null;

	private ?Compatibility $compatibility = null;

	private ?McpTransportInterface $transport = null;

	private bool $registered = false;

	/**
	 * @param array{server_id:string,namespace:string,route:string,version:string} $definition
	 * @return $this
	 */
	public function setServerDefinition( array $definition ) :self {
		$normalized = \array_map(
			static fn( $value ) :string => \trim( (string)$value ),
			[
				'server_id' => $definition[ 'server_id' ] ?? '',
				'namespace' => $definition[ 'namespace' ] ?? '',
				'route'     => $definition[ 'route' ] ?? '',
				'version'   => $definition[ 'version' ] ?? '',
			]
		);

		foreach ( \array_keys( $normalized ) as $key ) {
			if ( $normalized[ $key ] === '' ) {
				throw new \InvalidArgumentException( \sprintf( 'MCP server definition requires a non-empty "%s".', $key ) );
			}
		}

		$this->serverDefinition = $normalized;
		return $this;
	}

	/**
	 * @param array{slug:string,label:string,description:string} $definition
	 * @return $this
	 */
	public function setCategoryDefinition( array $definition ) :self {
		$normalized = \array_map(
			static fn( $value ) :string => \trim( (string)$value ),
			[
				'slug'        => $definition[ 'slug' ] ?? '',
				'label'       => $definition[ 'label' ] ?? '',
				'description' => $definition[ 'description' ] ?? '',
			]
		);

		foreach ( \array_keys( $normalized ) as $key ) {
			if ( $normalized[ $key ] === '' ) {
				throw new \InvalidArgumentException( \sprintf( 'MCP category definition requires a non-empty "%s".', $key ) );
			}
		}

		$this->categoryDefinition = $normalized;
		return $this;
	}

	/**
	 * @param list<array{name:string,args:array<string,mixed>}> $definitions
	 * @return $this
	 */
	public function setAbilityDefinitions( array $definitions ) :self {
		$normalized = [];
		foreach ( $definitions as $index => $definition ) {
			$name = \trim( (string)( $definition[ 'name' ] ?? '' ) );
			$args = $definition[ 'args' ] ?? null;

			if ( $name === '' ) {
				throw new \InvalidArgumentException( \sprintf( 'MCP ability definition at index %d requires a non-empty "name".', $index ) );
			}
			if ( !\is_array( $args ) ) {
				throw new \InvalidArgumentException( \sprintf( 'MCP ability definition "%s" requires "args" to be an array.', $name ) );
			}

			$normalized[] = [
				'name' => $name,
				'args' => $args,
			];
		}

		$this->abilityDefinitions = $normalized;
		return $this;
	}

	/**
	 * @return $this
	 */
	public function setAvailabilityCallback( callable $callback ) :self {
		$this->availabilityCallback = $callback;
		return $this;
	}

	/**
	 * @return $this
	 */
	public function setAbilitiesApi( AbilitiesApiInterface $abilitiesApi ) :self {
		$this->abilitiesApi = $abilitiesApi;
		return $this;
	}

	/**
	 * @return $this
	 */
	public function setCompatibility( Compatibility $compatibility ) :self {
		$this->compatibility = $compatibility;
		return $this;
	}

	/**
	 * @return $this
	 */
	public function setTransport( McpTransportInterface $transport ) :self {
		$this->transport = $transport;
		return $this;
	}

	public function register() :void {
		if ( $this->registered || !$this->isAvailable() ) {
			return;
		}
		$this->registered = true;

		if ( !empty( $this->categoryDefinition ) ) {
			$this->getAbilitiesApi()->addCategoryRegistrationHook( function () :void {
				$category = $this->categoryDefinition;
				if ( RuntimeRegistry::IsCategoryRegistered( $category[ 'slug' ] )
					 || $this->getAbilitiesApi()->hasCategory( $category[ 'slug' ] ) ) {
					return;
				}

				$this->getAbilitiesApi()->registerCategory( $category[ 'slug' ], [
					'label'       => $category[ 'label' ],
					'description' => $category[ 'description' ],
				] );
				RuntimeRegistry::MarkCategoryRegistered( $category[ 'slug' ] );
			} );
		}

		$this->getAbilitiesApi()->addAbilityRegistrationHook( function () :void {
			foreach ( $this->abilityDefinitions as $definition ) {
				if ( RuntimeRegistry::IsAbilityRegistered( $definition[ 'name' ] )
					 || $this->getAbilitiesApi()->hasAbility( $definition[ 'name' ] ) ) {
					continue;
				}

				$this->getAbilitiesApi()->registerAbility( $definition[ 'name' ], $definition[ 'args' ] );
				RuntimeRegistry::MarkAbilityRegistered( $definition[ 'name' ] );
			}
		} );

		$this->getTransport()->registerServer( $this->buildTransportDefinition() );
	}

	public function isSupported() :bool {
		return $this->getCompatibility()->supportsAbilitiesIntegration();
	}

	public function isAvailable() :bool {
		return $this->isSupported()
			   && ( ( $this->availabilityCallback ?? static fn() :bool => true ) )();
	}

	public function getTransport() :McpTransportInterface {
		if ( $this->transport === null ) {
			$this->transport = $this->getCompatibility()->supportsAdapterTransport()
				? new WpMcpAdapterTransport()
				: new NullTransport();
		}
		return $this->transport;
	}

	protected function getAbilitiesApi() :AbilitiesApiInterface {
		return $this->abilitiesApi ??= new WordPressAbilitiesApi();
	}

	protected function getCompatibility() :Compatibility {
		return $this->compatibility ??= new Compatibility();
	}

	/**
	 * @return array{server_id:string,namespace:string,route:string,version:string,abilities:string[]}
	 */
	private function buildTransportDefinition() :array {
		if ( empty( $this->serverDefinition ) ) {
			throw new \InvalidArgumentException( 'MCP server definition must be provided before registration.' );
		}

		return \array_merge( $this->serverDefinition, [
			'abilities' => \array_values( \array_map(
				static fn( array $definition ) :string => $definition[ 'name' ],
				$this->abilityDefinitions
			) ),
		] );
	}
}
