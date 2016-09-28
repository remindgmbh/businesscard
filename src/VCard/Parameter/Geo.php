<?php

namespace Remind\BusinessCard\VCard\Parameter;

use Remind\BusinessCard\VCard\Parameter\Parameter;
use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of Geo
 */
class Geo {

    /**
     * @var string
     */
    const NAME = Parameter::GEO;

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
    function __construct(Version $version) {
        $this->latitude = '';
        $this->longitude = '';
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
     * @return string
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     *
     * @return string
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     *
     * @param string
     */
    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    /**
     *
     * @param string $longitude
     */
    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }
}
