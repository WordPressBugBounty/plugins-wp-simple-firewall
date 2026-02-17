<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Services\Utilities\File;

use FernleafSystems\Wordpress\Services\Services;

class DummyFile {

	private string $path;

	private int $size;

	private $maxSegment;

	public function __construct( string $path, int $size = 1048576, int $maxSegment = 1048576 ) {
		$this->path = $path;
		$this->size = $size;
		$this->maxSegment = \min( $maxSegment, $this->size );
	}

	public function withRandomBytes( bool $autoDelete = false ) :bool {
		$FS = Services::WpFs();
		$success = false;
		$dir = \dirname( $this->path );
		if ( $this->size > 1 && $this->maxSegment > 1 && $FS->mkdir( $dir ) && $FS->isDir( $dir ) ) {
			try {
				$h = \fopen( $this->path, 'w' );
				if ( \is_resource( $h ) ) {
					$remaining = $this->size;
					do {
						$length = \min( $this->maxSegment, $remaining );
						\fwrite( $h, \random_bytes( $length ) );
						$remaining -= $length;
					} while ( $remaining > 0 );
					$success = \fclose( $h ) && $remaining === 0;
				}
			}
			catch ( \Exception|\Error $e ) {
			}
			finally {
				$autoDelete && $FS->isFile( $this->path ) && $FS->delete( $this->path );
			}
		}
		return $success;
	}

	/**
	 * https://stackoverflow.com/questions/3608383/php-create-file-with-given-size/3608405?r=Saves_UserSavesList#3608405
	 */
	public function withSeek( bool $autoDelete = false ) :bool {
		$FS = Services::WpFs();
		$success = false;
		$FS->mkdir( \dirname( $this->path ) );
		if ( $FS->isDir( \dirname( $this->path ) ) ) {
			try {
				$fp = \fopen( $this->path, 'w' );
				$success = \is_resource( $fp )
						   && \fseek( $fp, $this->size - 1, \SEEK_CUR ) === 0
						   && @\fwrite( $fp, 'a' ) > 0
						   && @\fclose( $fp );
			}
			catch ( \Exception|\Error $e ) {
			}
			finally {
				$autoDelete && $FS->isFile( $this->path ) && $FS->delete( $this->path );
			}
		}
		return $success;
	}
}