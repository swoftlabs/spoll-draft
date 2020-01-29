<?php declare(strict_types=1);

namespace Spoll\Driver;

use Spoll\AbstractDriver;
use function extension_loaded;

/**
 * Class ExtEvDriver
 *
 * @package Spoll\Driver
 */
class ExtEvDriver extends AbstractDriver
{
    /**
     * Driver name
     */
    public const NAME = 'ev';

    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        return extension_loaded('ev');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
