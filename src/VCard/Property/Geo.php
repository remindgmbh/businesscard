<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;
use Remind\BusinessCard\VCard\Property\Version;
use Remind\BusinessCard\VCard\Parameter\Geo as GeoParameter;

/**
 * Description of Geo
 */
class Geo {

    /**
     * @var string
     */
    const NAME = Properties::GEO;

    /**
     *
     * @var GeoParameter
     */
    protected $geo = null;

    /**
     *
     * @var Version
     */
    protected $version = null;

    /**
     *
     * @param Version $version
     */
    public function __construct(Version $version) {
        $this->version = $version;
        $this->geo = new GeoParameter($version);
    }

    /**
     *
     * @return string
     */
    public function __toString() {

        $loc = implode(',', $this->latitude, $this->longitude);

        return self::NAME . '="geo:' . $loc . '";';
    }

    /**
     *
     * @return GeoParameter
     */
    function getGeo() {
        return $this->geo;
    }

    /**
     *
     * @return Version
     */
    function getVersion() {
        return $this->version;
    }

    /**
     *
     * @param GeoParameter $geo
     */
    function setGeo(GeoParameter $geo) {
        $this->geo = $geo;
    }

    /**
     *
     * @param Version $version
     */
    function setVersion(Version $version) {
        $this->version = $version;
    }
}
