<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ea00cc67502b\Symfony\Component\Cache\Exception;

use _PhpScoper5ea00cc67502b\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper5ea00cc67502b\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper5ea00cc67502b\Psr\Cache\InvalidArgumentException, \_PhpScoper5ea00cc67502b\Psr\SimpleCache\InvalidArgumentException
{
}