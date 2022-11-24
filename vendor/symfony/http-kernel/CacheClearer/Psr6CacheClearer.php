<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheClearer;

use Psr\Cache\CacheItemPoolInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private $pools = [];

    /**
     * @param array<string, CacheItemPoolInterface> $pools
     */
    public function __construct(array $pools = [])
    {
        $this->pools = $pools;
    }

<<<<<<< Updated upstream
=======
    /**
     * @return bool
     */
>>>>>>> Stashed changes
    public function hasPool(string $name)
    {
        return isset($this->pools[$name]);
    }

<<<<<<< Updated upstream
=======
    /**
     * @return CacheItemPoolInterface
     *
     * @throws \InvalidArgumentException If the cache pool with the given name does not exist
     */
>>>>>>> Stashed changes
    public function getPool(string $name)
    {
        if (!$this->hasPool($name)) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: "%s".', $name));
        }

        return $this->pools[$name];
    }

<<<<<<< Updated upstream
=======
    /**
     * @return bool
     *
     * @throws \InvalidArgumentException If the cache pool with the given name does not exist
     */
>>>>>>> Stashed changes
    public function clearPool(string $name)
    {
        if (!isset($this->pools[$name])) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: "%s".', $name));
        }

        return $this->pools[$name]->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function clear(string $cacheDir)
    {
        foreach ($this->pools as $pool) {
            $pool->clear();
        }
    }
}
