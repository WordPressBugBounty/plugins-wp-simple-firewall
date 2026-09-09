<?php declare( strict_types=1 );

namespace FernleafSystems\WorpdriveClient\Filesystem\Map;

class MapProgressTracker {

	private array $completedDirs;

	private int $totalDirsComplete;

	private int $totalFilesComplete;

	private ?string $mostRecentFileInDir;

	private ?string $activeEntryDir;

	private int $activeEntryOffset;

	public function __construct(
		array $completedDirs = [],
		?string $mostRecentFile = null,
		int $totalDirsComplete = 0,
		int $totalFilesComplete = 0,
		?string $activeEntryDir = null,
		int $activeEntryOffset = 0
	) {
		$this->completedDirs = $completedDirs;
		$this->mostRecentFileInDir = $mostRecentFile;
		$this->totalDirsComplete = $totalDirsComplete;
		$this->totalFilesComplete = $totalFilesComplete;
		$this->activeEntryDir = $activeEntryDir === null ? null : $this->normaliseDir( $activeEntryDir );
		$this->activeEntryOffset = \max( 0, $activeEntryOffset );
	}

	public function completed() :array {
		return $this->completedDirs;
	}

	public function totalDirsComplete() :int {
		return $this->totalDirsComplete;
	}

	public function totalFilesComplete() :int {
		return $this->totalFilesComplete;
	}

	public function isDirCompleted( string $dir ) :bool {
		$dir = trailingslashit( $dir );
		$completed = isset( $this->completedDirs[ $dir ] );
		if ( !$completed ) {
			foreach ( \array_keys( $this->completedDirs ) as $previouslyCompletedDir ) {
				if ( \str_starts_with( $dir, $previouslyCompletedDir ) ) {
					$completed = true;
					break;
				}
			}
		}
		return $completed;
	}

	public function isEntryScanActiveFor( string $dir ) :bool {
		return $this->activeEntryDir === $this->normaliseDir( $dir );
	}

	public function hasActiveEntryScan() :bool {
		return $this->activeEntryDir !== null;
	}

	public function activeEntryOffsetFor( string $dir ) :int {
		return $this->isEntryScanActiveFor( $dir ) ? $this->activeEntryOffset : 0;
	}

	public function getMostRecentFile() :?string {
		return $this->mostRecentFileInDir;
	}

	public function mostRecentFileForDir( string $dir ) :?string {
		if ( $this->mostRecentFileInDir === null ) {
			return null;
		}

		$fileDir = \dirname( $this->mostRecentFileInDir );
		$fileDir = $fileDir === '.' ? '/' : $this->normaliseDir( $fileDir );
		return $this->normaliseDir( $dir ) === $fileDir ? $this->mostRecentFileInDir : null;
	}

	public function markFileCompleted( string $file ) :void {
		$this->mostRecentFileInDir = $file;
		$this->totalFilesComplete++;
	}

	public function startEntryScan( string $dir ) :void {
		$dir = $this->normaliseDir( $dir );
		if ( $this->activeEntryDir !== $dir ) {
			$this->activeEntryDir = $dir;
			$this->activeEntryOffset = 0;
		}
	}

	public function advanceEntryScan( string $dir, int $nextOffset ) :void {
		$this->activeEntryDir = $this->normaliseDir( $dir );
		$this->activeEntryOffset = \max( 0, $nextOffset );
	}

	public function clearEntryScan( string $dir ) :void {
		if ( $this->isEntryScanActiveFor( $dir ) ) {
			$this->activeEntryDir = null;
			$this->activeEntryOffset = 0;
		}
	}

	public function markDirCompleted( string $dir ) :void {
		$dir = trailingslashit( $dir );

		foreach ( \array_keys( $this->completedDirs ) as $previouslyCompletedDir ) {
			if ( \str_starts_with( $previouslyCompletedDir, $dir ) ) {
				$this->completedDirs[ $previouslyCompletedDir ] = false;
			}
		}

		$this->completedDirs = \array_filter( $this->completedDirs );
		$this->completedDirs[ $dir ] = true;
		$this->totalDirsComplete++;
		$this->mostRecentFileInDir = null;
		$this->clearEntryScan( $dir );
	}

	/**
	 * @return array{
	 *   completed_dirs:array<string,bool>,
	 *   most_recent_file:?string,
	 *   total_completed_dirs:int,
	 *   total_completed_files:int,
	 *   active_entry_dir:?string,
	 *   active_entry_offset:int
	 * }
	 */
	public function toProgressArray() :array {
		return [
			'completed_dirs'            => $this->completed(),
			'most_recent_file'          => $this->getMostRecentFile(),
			'total_completed_dirs'      => $this->totalDirsComplete(),
			'total_completed_files'     => $this->totalFilesComplete(),
			'active_entry_dir'          => $this->activeEntryDir,
			'active_entry_offset'       => $this->activeEntryOffset,
		];
	}

	private function normaliseDir( string $dir ) :string {
		return trailingslashit( $dir );
	}
}
