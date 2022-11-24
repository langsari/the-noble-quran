<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Loader;

/**
 * IniFileLoader loads translations from an ini file.
 *
 * @author stealth35
 */
class IniFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
<<<<<<< Updated upstream
    protected function loadResource(string $resource)
=======
    protected function loadResource(string $resource): array
>>>>>>> Stashed changes
    {
        return parse_ini_file($resource, true);
    }
}
