<?php declare(strict_types=1);

namespace Spoll;

/**
 * Interface DriverInterface - For event driver
 *
 * @package Spoll
 */
interface DriverInterface
{
    /**
     * Driver is supported on current environment
     *
     * @return bool
     */
    public static function isSupported(): bool;

    /**
     * Get driver name
     *
     * @return string
     */
    public function getName(): string;
}
