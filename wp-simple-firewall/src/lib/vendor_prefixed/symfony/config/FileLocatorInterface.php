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

use AptowebDeps\Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FileLocatorInterface
{
    /**
     * Returns a full path for a given file name.
     *
     * @param string      $name        The file name to locate
     * @param string|null $currentPath The current path
     * @param bool        $first       Whether to return the first occurrence or an array of filenames
     *
     * @return string|array The full path to the file or an array of file paths
     *
     * @throws \InvalidArgumentException        If $name is empty
     * @throws FileLocatorFileNotFoundException If a file is not found
     */
    public function locate(string $name, ?string $currentPath = null, bool $first = true);
}
