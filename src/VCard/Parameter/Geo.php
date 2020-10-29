<?php

declare(strict_types=1);

namespace Remind\BusinessCard\VCard\Parameter;

use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of Geo
 */
class Geo
{
    /**
     * @var string
     */
    public const NAME = Parameter::GEO;

    /**
     *
     * @var string
     */
    protected $latitude = '';

    /**
     *
     * @var string
     */
    protected $longitude = '';

    /**
     *
     * @var Version
     */
    protected $version = null;

    /**
     *
     */
    public function __construct(Version $version)
    {
        $this->latitude = '';
        $this->longitude = '';
        $this->version = $version;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        $loc = implode(',', [$this->latitude, $this->longitude]);

        return self::NAME . ':geo:' . $loc;
    }

    /**
     *
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     *
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     *
     * @param string $latitude
     */
    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     *
     * @param string $longitude
     */
    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }
}
