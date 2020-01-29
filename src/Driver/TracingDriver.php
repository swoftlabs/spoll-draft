<?php declare(strict_types=1);

namespace Spoll\Driver;

use Spoll\AbstractDriver;

/**
 * Class TracingDriver
 *
 * @package Spoll\Driver
 */
class TracingDriver extends AbstractDriver
{
    /**
     * Driver name
     */
    public const NAME = 'tracing';

    /**
     * @var AbstractDriver
     */
    private $driver;

    /**
     * Driver is supported on current environment
     *
     * @return bool
     */
    public static function isSupported(): bool
    {
        return true;
    }

    /**
     * Class constructor.
     *
     * @param AbstractDriver $driver
     */
    public function __construct(AbstractDriver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return AbstractDriver
     */
    public function getDriver(): AbstractDriver
    {
        return $this->driver;
    }

    /**
     * @param AbstractDriver $driver
     */
    public function setDriver(AbstractDriver $driver): void
    {
        $this->driver = $driver;
    }
}
