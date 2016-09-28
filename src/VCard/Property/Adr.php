<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Parameter\Geo as GeoParameter;
use Remind\BusinessCard\VCard\Parameter\Pref;
use Remind\BusinessCard\VCard\Parameter\Type;
use Remind\BusinessCard\VCard\Properties;
use Remind\BusinessCard\VCard\Property\Property;

/**
 * This class represents the ADR property of a vCard.
 *
 * @link https://tools.ietf.org/html/rfc6350#section-6.3.1
 */
class Adr implements Property {

    /**
     * Property name this class represents.
     * @var string
     */
    const PROPERTY_NAME = Properties::ADR;

    /**
     * The post office box.
     *
     * @var string
     */
    protected $postOfficeBox = '';

    /**
     * The extended address (e.g., apartment or suite number).
     * @var string
     */
    protected $extendedAddress = '';

    /**
     * The street address.
     *
     * @var string
     */
    protected $streetAddress = '';

    /**
     * The locality (e.g., city).
     *
     * @var string
     */
    protected $locality = '';

    /**
     * The region (e.g., state or province).
     *
     * @var string
     */
    protected $region = '';

    /**
     * The postal code.
     *
     * @var string
     */
    protected $postalCode = '';

    /**
     * The country name (full name in the language specified in Section 5.1).
     *
     * @var string
     */
    protected $countryName = '';

    /**
     * Optional type of this address item,
     *
     * @var Type
     */
    protected $type = null;

    /**
     * Optional preference for this address item.
     *
     * @var Pref
     */
    protected $pref = null;

    /**
     * Optional label for this address item.
     *
     * @var string
     */
    protected $label = '';

    /**
     * Optional geo latitude longitude coordinates.
     *
     * @var Geo
     */
    protected $geo = null;

    /**
     * Initializes an Adr object with no data.
     */
    public function __construct() {
        $this->countryName = '';
        $this->extendedAddress = '';
        $this->locality = '';
        $this->postOfficeBox = '';
        $this->postalCode = '';
        $this->region = '';
        $this->streetAddress = '';

        $this->type = null;
        $this->pref = null;
        $this->label = '';
        $this->geo = null;
    }

    /**
     * Returns the object in its string representation.
     */
    public function __toString() {
        return self::PROPERTY_NAME . ';'
            . $this->type
            . $this->geo
            . $this->pref
            . $this->getLabel()
            . $this->getAddress();
    }

    /**
     *
     * @return string
     */
    protected function getAddress() {
        return $this->postOfficeBox . ';'
            . $this->extendedAddress . ';'
            . $this->streetAddress . ';'
            . $this->locality . ';'
            . $this->region . ';'
            . $this->postalCode . ';'
            . $this->countryName;
    }

    /**
     *
     * @return string
     */
    public function getName() {
        return self::PROPERTY_NAME;
    }

    /**
     *
     * @return string
     */
    public function getPostOfficeBox() {
        return $this->postOfficeBox;
    }

    /**
     *
     * @return string
     */
    public function getExtendedAddress() {
        return $this->extendedAddress;
    }

    /**
     *
     * @return string
     */
    public function getStreetAddress() {
        return $this->streetAddress;
    }

    /**
     *
     * @return string
     */
    public function getLocality() {
        return $this->locality;
    }

    /**
     *
     * @return string
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     *
     * @return string
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     *
     * @return string
     */
    public function getCountryName() {
        return $this->countryName;
    }

    /**
     *
     * @return Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     *
     * @return Pref
     */
    public function getPref() {
        return $this->pref;
    }

    /**
     *
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     *
     * @return GeoParameter
     */
    public function getGeo() {
        return $this->geo;
    }

    /**
     *
     * @param string $postOfficeBox
     */
    public function setPostOfficeBox($postOfficeBox) {
        $this->postOfficeBox = $postOfficeBox;
    }

    /**
     *
     * @param string $extendedAddress
     */
    public function setExtendedAddress($extendedAddress) {
        $this->extendedAddress = $extendedAddress;
    }

    /**
     *
     * @param string $streetAddress
     */
    public function setStreetAddress($streetAddress) {
        $this->streetAddress = $streetAddress;
    }

    /**
     *
     * @param string $locality
     */
    public function setLocality($locality) {
        $this->locality = $locality;
    }

    /**
     *
     * @param string $region
     */
    public function setRegion($region) {
        $this->region = $region;
    }

    /**
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    /**
     *
     * @param string $countryName
     */
    public function setCountryName($countryName) {
        $this->countryName = $countryName;
    }

    /**
     *
     * @param Type $type
     */
    public function setType(Type $type) {
        $this->type = $type;
    }

    /**
     *
     * @param Pref $pref
     */
    public function setPref(Pref $pref) {
        $this->pref = $pref;
    }

    /**
     *
     * @param string $label
     */
    public function setLabel($label) {
        $this->label = $label;
    }

    /**
     *
     * @param GeoParameter $geo
     */
    public function setGeo(GeoParameter $geo) {
        $this->geo = $geo;
    }
}
