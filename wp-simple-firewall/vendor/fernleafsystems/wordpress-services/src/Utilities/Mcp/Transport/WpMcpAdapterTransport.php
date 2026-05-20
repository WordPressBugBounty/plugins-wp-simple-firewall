<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp\Transport;

use FernleafSystems\Wordpress\Services\Utilities\Mcp\{
	HookRegistrarInterface,
	WordPressHookRegistrar
};
use FernleafSystems\Wordpress\Services\Utilities\Mcp\Support\{
	Compatibility,
	RuntimeRegistry,
	WpMcpAdapterContract
};

class WpMcpAdapterTransport implements McpTransportInterface {

	private HookRegistrarInterface $hooks;

	/** @var array<string,bool> */
	private array $scheduledServerIds = [];

	public function __construct( ?HookRegistrarInterface $hooks = null ) {
		$this->hooks = $hooks ?? new WordPressHookRegistrar();
	}

	public function isSupported() :bool {
		return ( new Compatibility() )->supportsAdapterTransport();
	}

	public function registerServer( array $serverDefinition ) :void {
		$serverId = \trim( (string)( $serverDefinition[ 'server_id' ] ?? '' ) );
		if ( !$this->isSupported()
			 || $serverId === ''
			 || isset( $this->scheduledServerIds[ $serverId ] )
			 || RuntimeRegistry::IsServerRegistered( $serverId ) ) {
			return;
		}

		$this->scheduledServerIds[ $serverId ] = true;

		$this->hooks->addAction( 'mcp_adapter_init', function ( $adapter = null ) use ( $serverDefinition, $serverId ) :void {
			if ( RuntimeRegistry::IsServerRegistered( $serverId ) ) {
				return;
			}

			$adapter = $this->resolveAdapter( $adapter );
			if ( !\is_object( $adapter ) || !\method_exists( $adapter, $this->getContract()->adapterCreateServerMethod() ) ) {
				return;
			}

			$method = $this->getContract()->adapterCreateServerMethod();
			$adapter->{$method}(
				$serverDefinition[ 'server_id' ],
				$serverDefinition[ 'namespace' ],
				$serverDefinition[ 'route' ],
				$serverDefinition[ 'version' ],
				[ $this->getContract()->httpTransportClass() ],
				$this->getContract()->errorHandlerClass(),
				$this->getContract()->observabilityHandlerClass(),
				$serverDefinition[ 'abilities' ],
				[],
				[]
			);

			RuntimeRegistry::MarkServerRegistered( $serverId );
		}, 10, 1 );

		$this->bootAdapter();
	}

	public function getIdentifier() :string {
		return 'wp_mcp_adapter';
	}

	/**
	 * @param mixed $adapter
	 * @return mixed
	 */
	protected function resolveAdapter( $adapter ) {
		$contract = $this->getContract();
		if ( \is_object( $adapter ) && \method_exists( $adapter, $contract->adapterCreateServerMethod() ) ) {
			return $adapter;
		}

		$adapterClass = $contract->adapterClass();
		$bootMethod = $contract->adapterBootMethod();
		if ( \class_exists( $adapterClass ) && \method_exists( $adapterClass, $bootMethod ) ) {
			return $adapterClass::{$bootMethod}();
		}

		return null;
	}

	protected function bootAdapter() :void {
		$contract = $this->getContract();
		$adapterClass = $contract->adapterClass();
		$bootMethod = $contract->adapterBootMethod();
		if ( \class_exists( $adapterClass ) && \method_exists( $adapterClass, $bootMethod ) ) {
			$adapterClass::{$bootMethod}();
		}
	}

	protected function getContract() :WpMcpAdapterContract {
		return new WpMcpAdapterContract();
	}
}
