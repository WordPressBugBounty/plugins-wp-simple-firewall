<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\Encrypt;

use FernleafSystems\Wordpress\Services\Services;

class CipherTests {

	private $privateKey;

	private $publicKey;

	private $iv;

	/**
	 * @throws \Exception
	 */
	public function __construct( ?string $privateKey = null, ?string $iv = null ) {
		$this->setPrivateKey( $privateKey );
		$this->iv = $iv;
	}

	private function setPrivateKey( ?string $privateKey ) {
		if ( !empty( $privateKey ) ) {
			try {
				$this->publicKey = Services::Encrypt()->getPublicKeyFromPrivateKey( $privateKey );
				$this->privateKey = $privateKey;
			}
			catch ( \Exception $e ) {
			}
		}
	}

	public function findAvailableCiphers() :array {
		return \array_filter( \openssl_get_cipher_methods(), fn( string $cipher ) => $this->testAvailability( $cipher ) );
	}

	public function testAvailability( string $cipher ) :bool {
		$srvEnc = Services::Encrypt();
		$available = false;
		if ( $cipher !== 'null' && $srvEnc->cipherExists( $cipher ) ) {
			$testData = wp_generate_password( 20 );
			try {
				if ( empty( $this->privateKey ) ) {
					$this->setPrivateKey( $srvEnc->createNewPrivatePublicKeyPair()[ 'private' ] );
				}

				// 'camellia-128-cbc-cts' triggers: openssl_cipher_iv_length(): Unknown cipher algorithm
				if ( @\openssl_cipher_iv_length( $cipher ) === \strlen( (string)$this->iv ) ) {
					$VO = $srvEnc->sealData( $testData, $this->publicKey, $cipher, $this->iv );
					$available = $VO->success && $srvEnc->openDataVo( $VO, $this->privateKey ) === $testData;
				}
			}
			catch ( \Exception $e ) {
				error_log( $e->getMessage() );
			}
			catch ( \ValueError $e ) {
				error_log( $e->getMessage() );
			}
		}
		return $available;
	}
}