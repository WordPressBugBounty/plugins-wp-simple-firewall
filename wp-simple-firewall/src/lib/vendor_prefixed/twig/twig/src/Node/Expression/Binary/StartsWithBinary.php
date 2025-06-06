<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by Paul Goodchild on 25-November-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace AptowebDeps\Twig\Node\Expression\Binary;

use AptowebDeps\Twig\Compiler;

class StartsWithBinary extends AbstractBinary
{
    public function compile(Compiler $compiler): void
    {
        $left = $compiler->getVarName();
        $right = $compiler->getVarName();
        $compiler
            ->raw(\sprintf('(is_string($%s = ', $left))
            ->subcompile($this->getNode('left'))
            ->raw(\sprintf(') && is_string($%s = ', $right))
            ->subcompile($this->getNode('right'))
            ->raw(\sprintf(') && str_starts_with($%1$s, $%2$s))', $left, $right))
        ;
    }

    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('');
    }
}
