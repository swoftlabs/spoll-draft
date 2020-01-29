<?php declare(strict_types=1);

namespace Spoll\Driver;

use function extension_loaded;

/**
 * Class ExtEventDriver
 *
 * @package Spoll\Driver
 */
class ExtEventDriver extends AbstractDriver
{
    /**
     * Driver name
     */
    public const NAME = 'event';

    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        return extension_loaded('event');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
