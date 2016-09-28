<?php

namespace Remind\BusinessCard;

use Remind\BusinessCard\VCard\Property\Property;
use Remind\BusinessCard\VCard\Property\Begin;
use Remind\BusinessCard\VCard\Property\End;
use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of VCard
 *
 * @link https://tools.ietf.org/html/rfc6350
 * @link https://en.wikipedia.org/wiki/VCard
 */
class VCard {

    /**
     * The line delimiter defined in RFC350 used for indiviudal lines.
     * @var string
     */
    const CRLF = "\r\n";

    /**
     * Holds all set properties for the vCard.
     *
     * @var array
     */
    protected $properties = [];

    /**
     *
     * @var Version
     */
    protected $version = null;

    /**
     *
     * @var Begin
     */
    protected $begin = null;

    /**
     *
     * @var End
     */
    protected $end = null;

    /**
     * Creates a new vCard with a given version. Defaults to 2.1
     *
     * @param Version $version
     */
    public function __construct(Version $version) {

        $this->version = $version;

        /* Intialize the properties */
        $this->properties = [];

        $this->begin = new Begin();
        $this->end = new End();
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        $vcard = $this->begin . self::CRLF;
        $vcard .= $this->version . self::CRLF;

        foreach ($this->properties as $property) {
            $vcard .= $property . self::CRLF;
        }

        $vcard .= $this->end . self::CRLF;

        return $vcard;
    }

    /**
     *
     * @param Property $property
     * @return boolean
     */
    public function addProperty(Property $property) {

        /**/
        $isAllowed = $this->version->isPropertyAllowed($property);

        /**/
        if ($isAllowed) {
            $this->properties[] = $property;
        }

        return $isAllowed;
    }

    /**
     *
     * @return array
     */
    public function getProperties() {
        return $this->properties;
    }

    /**
     *
     * @return Version
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     *
     * @param array $properties
     */
    public function setProperties(array $properties) {
        $this->properties = $properties;
    }

    /**
     *
     * @param Version $version
     */
    public function setVersion(Version $version) {
        $this->version = $version;
    }
}
