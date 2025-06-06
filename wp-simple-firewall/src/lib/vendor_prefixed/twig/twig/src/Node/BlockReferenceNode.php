<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by Paul Goodchild on 25-November-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace AptowebDeps\Twig\Node;

use AptowebDeps\Twig\Attribute\YieldReady;
use AptowebDeps\Twig\Compiler;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class BlockReferenceNode extends Node implements NodeOutputInterface
{
    public function __construct(string $name, int $lineno, ?string $tag = null)
    {
        parent::__construct([], ['name' => $name], $lineno, $tag);
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
            ->write(\sprintf("yield from \$this->unwrap()->yieldBlock('%s', \$context, \$blocks);\n", $this->getAttribute('name')))
        ;
    }
}
