<?php declare( strict_types=1 );

namespace FernleafSystems\WorpdriveClient\Filesystem\Map;

use FernleafSystems\WorpdriveClient\Exc\TimeLimitReachedException;
use FernleafSystems\WorpdriveClient\Filesystem\Map\Listing\AbstractFileListing;
use FernleafSystems\WorpdriveClient\Host\{
	WorpdriveFilesystem,
	WorpdriveRuntime
};

class MapDir {

	private AbstractFileListing $map;

	private MapProgressTracker $tracker;

	private FileFilter $filter;

	private WorpdriveFilesystem $filesystem;

	private MapPathNormalizer $pathNormalizer;

	private string $dir;

	private string $rootDir;

	private string $hashAlgo;

	private int $stopAtTS;

	public function __construct(
		AbstractFileListing $map,
		MapProgressTracker $tracker,
		FileFilter $filter,
		string $dirToMap,
		string $hashAlgo,
		int $stopAtTS,
		?string $rootDir = null
	) {
		$this->map = $map;
		$this->tracker = $tracker;
		$this->filter = $filter;
		$this->filesystem = WorpdriveRuntime::host()->filesystem();
		$this->pathNormalizer = new MapPathNormalizer();
		$this->dir = wp_normalize_path( $dirToMap );
		$this->rootDir = wp_normalize_path( $rootDir ?? $dirToMap );
		$this->hashAlgo = $hashAlgo;
		$this->stopAtTS = $stopAtTS;
	}

	/**
	 * @throws TimeLimitReachedException
	 * @throws Exc\MapDirCannotBeOpenedException
	 */
	public function run() :void {
		$this->mapEntries();

		$this->tracker->markDirCompleted( $this->normalisePath( $this->dir ) );

		if ( \time() >= $this->stopAtTS ) {
			throw new TimeLimitReachedException();
		}
	}

	/**
	 * @throws Exc\MapDirCannotBeOpenedException
	 * @throws TimeLimitReachedException
	 */
	private function mapEntries() :void {
		$normalDir = $this->normalisePath( $this->dir );
		$legacyFileCursor = $this->tracker->isEntryScanActiveFor( $normalDir ) ? null : $this->tracker->mostRecentFileForDir( $normalDir );
		$trackOwnScan = !$this->tracker->hasActiveEntryScan() || $this->tracker->isEntryScanActiveFor( $normalDir );
		if ( $trackOwnScan ) {
			$this->tracker->startEntryScan( $normalDir );
		}
		$offset = $trackOwnScan ? $this->tracker->activeEntryOffsetFor( $normalDir ) : 0;

		try {
			$it = $this->seekFileIterator( $this->dirIterator(), $offset );
		}
		catch ( \Exception $e ) {
			throw new Exc\MapDirCannotBeOpenedException( $e->getMessage() );
		}

		for ( ; $it->valid(); $it->next() ) {
			/** @var \SplFileInfo $item */
			$item = $it->current();
			$this->mapEntry( $item, $legacyFileCursor );
			$offset++;
			if ( $trackOwnScan ) {
				$this->tracker->advanceEntryScan( $normalDir, $offset );
			}
			if ( \time() >= $this->stopAtTS ) {
				throw new TimeLimitReachedException();
			}
		}

		if ( $trackOwnScan ) {
			$this->tracker->clearEntryScan( $normalDir );
		}
	}

	/**
	 * @throws TimeLimitReachedException
	 */
	private function mapEntry( \SplFileInfo $item, ?string $legacyFileCursor ) :void {
		try {
			$isDir = $item->isDir();
			$isLink = $item->isLink();
		}
		catch ( \Exception $e ) {
			// Some hosts expose unreadable entries; skip them and keep mapping.
			return;
		}

		if ( $isDir && !$isLink ) {
			try {
				$path = $item->getPathname();
				$normalisedPath = $this->normalisePath( $path );
			}
			catch ( \Exception $e ) {
				// Some hosts expose unreadable entries; skip them and keep mapping.
				return;
			}
			if ( !$this->tracker->isDirCompleted( $normalisedPath ) && !$this->filter->isExcluded( $normalisedPath ) ) {
				try {
					( new MapDir( $this->map, $this->tracker, $this->filter, $path, $this->hashAlgo, $this->stopAtTS, $this->rootDir ) )->run();
				}
				catch ( Exc\MapDirCannotBeOpenedException $e ) {
					// Keep mapping best-effort when a child directory cannot be opened.
				}
			}
			return;
		}

		$this->mapFile( $item, $legacyFileCursor );
	}

	/**
	 * @throws \Exception
	 */
	private function seekFileIterator( \FilesystemIterator $it, int &$offset ) :\FilesystemIterator {
		if ( $offset > 0 ) {
			try {
				$it->seek( $offset );
			}
			catch ( \Exception $e ) {
				$it = $this->dirIterator();
				$it->rewind();
				$offset = 0;
			}
		}
		else {
			$it->rewind();
		}
		return $it;
	}

	private function mapFile( \SplFileInfo $item, ?string $legacyFileCursor ) :void {
		$attr = $this->fileAttributes( $item, $legacyFileCursor );
		if ( $attr === null ) {
			return;
		}

		if ( $this->filesystem->isReadable( $attr[ 'p' ] ) ) {
			$hash = empty( $this->hashAlgo ) ? '' : \hash_file( $this->hashAlgo, $attr[ 'p' ] );
			if ( \is_string( $hash ) ) {
				$this->map->addRaw( $attr[ 'n' ], '', $hash, $attr[ 'm' ], $attr[ 's' ] );
			}
		}
		$this->tracker->markFileCompleted( $attr[ 'n' ] );
	}

	private function fileAttributes( \SplFileInfo $item, ?string $legacyFileCursor ) :?array {
		try {
			if ( !$item->isFile() || $item->isLink() ) {
				return null;
			}

			$size = $item->getSize();
			if ( empty( $size ) ) {
				return null;
			}

			$path = $item->getPathname();
			$normalisedPath = $this->normalisePath( $path );
			$mTime = (int)$item->getMTime();
			if ( ( $legacyFileCursor !== null && \strnatcmp( $legacyFileCursor, $normalisedPath ) >= 0 )
				 || !$this->filter->isFileWithinTimeRange( $mTime )
				 || !$this->filter->isFileSizeAllowed( $size )
				 || $this->filter->isExcluded( $normalisedPath ) ) {
				return null;
			}

			return [
				'p' => $path,
				'n' => $normalisedPath,
				'm' => $mTime,
				's' => $size,
			];
		}
		catch ( \Exception $e ) {
			return null;
		}
	}

	/**
	 * @throws \Exception
	 */
	private function dirIterator() :\FilesystemIterator {
		return new \FilesystemIterator( $this->dir, \FilesystemIterator::SKIP_DOTS );
	}

	private function normalisePath( string $path ) :string {
		return $this->pathNormalizer->normaliseRelativeToRoot( $path, $this->rootDir );
	}
}
