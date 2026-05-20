<?php declare( strict_types=1 );

namespace AptowebDeps\Safe\Exceptions;

use AptowebDeps\Safe\Exceptions\Traits\CreatesFromPhpError;

class SplException extends \ErrorException implements SafeExceptionInterface {

	use CreatesFromPhpError;
}
