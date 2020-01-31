<?php declare(strict_types=1);

namespace Spoll;

/**
 * Class Spoll
 *
 * @package Spoll
 */
class Spoll
{
    /**
     * @var AbstractDriver
     */
    private static $driver;

    public static function run(): void
    {
        $driver = self::getDriver();

        // TODO ...
    }

    /**
     * @return AbstractDriver
     */
    public static function getDriver(): AbstractDriver
    {
        if (!self::$driver) {
            self::$driver = DriverFactory::create();
        }

        return self::$driver;
    }

    /**
     * @param AbstractDriver $driver
     */
    public static function setDriver(AbstractDriver $driver): void
    {
        self::$driver = $driver;
    }
}
