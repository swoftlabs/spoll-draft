<?php declare(strict_types=1);

namespace Spoll\Driver;

use Spoll\AbstractDriver;
use function extension_loaded;

/**
 * Class ExtUvDriver
 *
 * @package Spoll\Driver
 */
class ExtUvDriver extends AbstractDriver
{
    /**
     * Driver name
     */
    public const NAME = 'uv';

    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        return extension_loaded('uv');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
