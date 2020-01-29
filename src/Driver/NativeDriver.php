<?php declare(strict_types=1);

namespace Spoll\Driver;

use function function_exists;

/**
 * Class NativeDriver
 *
 * @package Spoll\Driver
 */
class NativeDriver extends AbstractDriver
{
    /**
     * Driver name
     */
    public const NAME = 'native';

    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        /** @see \stream_select() */
        return function_exists('stream_select');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
