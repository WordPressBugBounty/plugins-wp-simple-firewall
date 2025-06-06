<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by Paul Goodchild on 24-February-2025 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace AptowebDeps\Symfony\Component\Config;

/**
 * Basic implementation of ConfigCacheFactoryInterface that
 * creates an instance of the default ConfigCache.
 *
 * This factory and/or cache <em>do not</em> support cache validation
 * by means of ResourceChecker instances (that is, service-based).
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ConfigCacheFactory implements ConfigCacheFactoryInterface
{
    private $debug;

    /**
     * @param bool $debug The debug flag to pass to ConfigCache
     */
    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }

    /**
     * {@inheritdoc}
     */
    public function cache(string $file, callable $callback)
    {
        $cache = new ConfigCache($file, $this->debug);
        if (!$cache->isFresh()) {
            $callback($cache);
        }

        return $cache;
    }
}
