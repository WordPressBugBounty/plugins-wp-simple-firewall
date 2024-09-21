<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by Paul Goodchild on 12-September-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace AptowebDeps\Twig\Attribute;

/**
 * Marks nodes that are ready for using "yield" instead of "echo" or "print()" for rendering.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class YieldReady
{
}