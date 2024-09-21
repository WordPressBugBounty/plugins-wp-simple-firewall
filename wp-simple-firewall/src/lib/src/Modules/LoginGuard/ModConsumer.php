<?php declare( strict_types=1 );

namespace FernleafSystems\Wordpress\Plugin\Shield\Modules\LoginGuard;

use FernleafSystems\Wordpress\Plugin\Shield\Enum\EnumModules;

/**
 * @deprecated 19.2
 */
trait ModConsumer {

	use \FernleafSystems\Wordpress\Plugin\Shield\Modules\PluginControllerConsumer;

	public function mod() :ModCon {
		return self::con()->modules[ EnumModules::LOGIN ];
	}

	public function opts() :Options {
		return $this->mod()->opts();
	}
}