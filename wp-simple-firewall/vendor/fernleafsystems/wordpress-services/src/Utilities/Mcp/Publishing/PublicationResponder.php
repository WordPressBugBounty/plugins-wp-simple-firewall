<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Mcp\Publishing;

use FernleafSystems\Wordpress\Services\Services;
use FernleafSystems\Wordpress\Services\Utilities\Mcp\{
	HookRegistrarInterface,
	WordPressHookRegistrar
};

class PublicationResponder {

	private HookRegistrarInterface $hooks;

	/**
	 * @var array<string,array{body:callable,content_type:string,status:int,headers:array<string,string>}>
	 */
	private array $documents = [];

	/**
	 * @var array<string,array{location:string,status:int,headers:array<string,string>}>
	 */
	private array $redirects = [];

	/** @var callable|null */
	private $availabilityCallback;

	private bool $registered = false;

	public function __construct( ?HookRegistrarInterface $hooks = null ) {
		$this->hooks = $hooks ?? new WordPressHookRegistrar();
	}

	/**
	 * @param callable():string $body
	 * @param array<string,string> $headers
	 * @return $this
	 */
	public function registerDocument(
		string $path,
		callable $body,
		string $contentType = 'application/json; charset=utf-8',
		int $status = 200,
		array $headers = []
	) :self {
		$this->documents[ $this->normalizePath( $path ) ] = [
			'body'         => $body,
			'content_type' => \trim( $contentType ),
			'status'       => $status,
			'headers'      => $this->normalizeHeaders( $headers ),
		];
		return $this;
	}

	/**
	 * @param array<string,string> $headers
	 * @return $this
	 */
	public function registerRedirect( string $path, string $location, int $status = 302, array $headers = [] ) :self {
		$this->redirects[ $this->normalizePath( $path ) ] = [
			'location' => \trim( $location ),
			'status'   => $status,
			'headers'  => $this->normalizeHeaders( $headers ),
		];
		return $this;
	}

	/**
	 * @return $this
	 */
	public function setAvailabilityCallback( callable $callback ) :self {
		$this->availabilityCallback = $callback;
		return $this;
	}

	public function isAvailable() :bool {
		return ( ( $this->availabilityCallback ?? static fn() :bool => true ) )();
	}

	public function register() :void {
		if ( $this->registered || empty( $this->documents ) && empty( $this->redirects ) || !$this->isAvailable() ) {
			return;
		}
		$this->registered = true;

		$this->hooks->addAction( 'template_redirect', function () :void {
			$this->maybeServeCurrentRequest();
		}, 0, 0 );
	}

	/**
	 * @return array{type:string,status:int,headers:array<string,string>,content_type?:string,body?:string,location?:string}|null
	 */
	public function resolveRequestPath( string $path ) :?array {
		$path = $this->normalizePath( $path );

		if ( isset( $this->documents[ $path ] ) ) {
			$document = $this->documents[ $path ];
			return [
				'type'         => 'document',
				'status'       => $document[ 'status' ],
				'headers'      => $document[ 'headers' ],
				'content_type' => $document[ 'content_type' ],
				'body'         => (string)( $document[ 'body' ] )(),
			];
		}

		if ( isset( $this->redirects[ $path ] ) ) {
			$redirect = $this->redirects[ $path ];
			return [
				'type'     => 'redirect',
				'status'   => $redirect[ 'status' ],
				'headers'  => $redirect[ 'headers' ],
				'location' => $redirect[ 'location' ],
			];
		}

		return null;
	}

	protected function maybeServeCurrentRequest() :void {
		if ( !$this->isAvailable() || !\in_array( $this->getRequestMethod(), [ 'get', 'head' ], true ) ) {
			return;
		}

		$response = $this->resolveRequestPath( $this->getRequestPath() );
		if ( $response !== null ) {
			$this->emitResponse( $response );
		}
	}

	protected function getRequestMethod() :string {
		return Services::Request()->getMethod();
	}

	protected function getRequestPath() :string {
		return Services::Request()->getPath();
	}

	/**
	 * @param array{type:string,status:int,headers:array<string,string>,content_type?:string,body?:string,location?:string} $response
	 */
	protected function emitResponse( array $response ) :void {
		$this->sendStatus( $response[ 'status' ] );

		foreach ( $response[ 'headers' ] as $name => $value ) {
			$this->sendHeader( $name, $value );
		}

		if ( $response[ 'type' ] === 'redirect' ) {
			$this->sendHeader( 'Location', $response[ 'location' ] ?? '' );
			$this->terminate();
		}

		$this->sendHeader( 'Content-Type', $response[ 'content_type' ] ?? 'application/octet-stream' );
		$this->terminate( $this->getRequestMethod() === 'head' ? '' : ( $response[ 'body' ] ?? '' ) );
	}

	protected function sendStatus( int $status ) :void {
		\status_header( $status );
	}

	protected function sendHeader( string $name, string $value ) :void {
		\header( \sprintf( '%s: %s', $name, $value ), true );
	}

	protected function terminate( string $body = '' ) :void {
		if ( $body !== '' ) {
			echo $body;
		}
		exit;
	}

	/**
	 * @param array<string,string> $headers
	 * @return array<string,string>
	 */
	private function normalizeHeaders( array $headers ) :array {
		$normalized = [];
		foreach ( $headers as $name => $value ) {
			$name = \trim( (string)$name );
			if ( $name === '' ) {
				continue;
			}
			$normalized[ $name ] = \trim( (string)$value );
		}
		return $normalized;
	}

	private function normalizePath( string $path ) :string {
		$path = (string)\parse_url( \trim( $path ), \PHP_URL_PATH );
		$path = $path === '' ? '/' : $path;
		return '/'.\ltrim( $path, '/' );
	}
}
