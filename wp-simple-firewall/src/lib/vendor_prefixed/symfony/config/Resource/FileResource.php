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

namespace AptowebDeps\Symfony\Component\Config\Resource;

/**
 * FileResource represents a resource stored on the filesystem.
 *
 * The resource can be a file or a directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class FileResource implements SelfCheckingResourceInterface
{
    /**
     * @var string|false
     */
    private $resource;

    /**
     * @param string $resource The file path to the resource
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $resource)
    {
        $this->resource = realpath($resource) ?: (file_exists($resource) ? $resource : false);

        if (false === $this->resource) {
            throw new \InvalidArgumentException(sprintf('The file "%s" does not exist.', $resource));
        }
    }

    public function __toString(): string
    {
        return $this->resource;
    }

    /**
     * Returns the canonicalized, absolute path to the resource.
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int $timestamp): bool
    {
        return false !== ($filemtime = @filemtime($this->resource)) && $filemtime <= $timestamp;
    }
}
