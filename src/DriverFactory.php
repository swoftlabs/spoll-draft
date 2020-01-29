<?php declare(strict_types=1);

namespace Spoll;

use RuntimeException;
use Spoll\Driver\AbstractDriver;
use Spoll\Driver\ExtEvDriver;
use Spoll\Driver\ExtEventDriver;
use Spoll\Driver\NativeDriver;
use Spoll\Driver\TracingDriver;

/**
 * Class DriverFactory
 *
 * @package Spoll
 */
final class DriverFactory
{
    /**
     * @var array
     */
    private static $drivers = [
        'event'  => ExtEventDriver::class,
        'ev'     => ExtEvDriver::class,
        'native' => NativeDriver::class,
    ];

    /**
     * @param string $name The driver name. eg: event, ev, native
     * @param bool   $debug
     *
     * @return AbstractDriver
     */
    public static function create(string $name = '', bool $debug = false): AbstractDriver
    {
        // Special driver name
        if ($name && isset(self::$drivers[$name])) {
            $class = self::$drivers[$name];
            $driver = new $class;

            return $debug ? new TracingDriver($driver) : $driver;
        }

        /** @var AbstractDriver $class */
        foreach (self::$drivers as $class) {
            if ($class::isSupported()) {
                $driver = new $class;

                return $debug ? new TracingDriver($driver) : $driver;
            }
        }

        throw new RuntimeException('no supported event driver on the system');
    }

    /**
     * @return array
     */
    public static function getDrivers(): array
    {
        return self::$drivers;
    }
}
