<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Parameter\Geo as GeoParameter;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Geo.
 */
class Geo implements Property
{
    /**
     * @var string
     */
    const NAME = Properties::GEO;

    /**
     * @var GeoParameter
     */
    protected $geo = null;

    /**
     * @var Version
     */
    protected $version = null;

    /**
     * @param Version $version
     */
    public function __construct(Version $version)
    {
        $this->version = $version;
        $this->geo = new GeoParameter($version);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $loc = implode(',', $this->latitude, $this->longitude);

        return self::NAME.':"geo:'.$loc;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     * @return GeoParameter
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param GeoParameter $geo
     */
    public function setGeo(GeoParameter $geo)
    {
        $this->geo = $geo;
    }

    /**
     * @param Version $version
     */
    public function setVersion(Version $version)
    {
        $this->version = $version;
    }
}
