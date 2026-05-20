<?php declare( strict_types=1 );

namespace AptowebDeps\Safe\Exceptions;

use AptowebDeps\Safe\Exceptions\Traits\CreatesFromPhpError;

class StringsException extends \ErrorException implements SafeExceptionInterface {

	use CreatesFromPhpError;
}
