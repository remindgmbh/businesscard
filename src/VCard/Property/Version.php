<?php

namespace Remind\BusinessCard\VCard\Property;

use \Remind\BusinessCard\VCard\Properties;
use \Remind\BusinessCard\VCard\Property\Property;

/**
 * Description of Version
 */
class Version implements Property
{

    /**
     * The vCard property this class represents.
     * @var string
     */
    const NAME = Properties::VERSION;

    /**
     * Version identifier for version 2.1
     * @var string
     */
    const VERSION_2_1 = '2.1';

    /**
     * Version identifier for version 3.0
     * @var string
     */
    const VERSION_3_0 = '3.0';

    /**
     * Version identifier for version 4.0
     * @var string
     */
    const VERSION_4_0 = '4.0';

    /**
     * Selected version for the vCard.
     *
     * @var string
     */
    protected $version = self::VERSION_2_1;

    /**
     *
     */
    public function __construct()
    {
        $this->version = self::VERSION_2_1;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ':' . $this->version;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     * Check if the given property is valid for the set version this vCard uses.
     *
     * @param Property $property The property to check
     * @return boolean Property is supported for set version
     */
    public function isPropertyAllowed(Property $property)
    {

        /* Initialize the property storage */
        $properties = [];

        /* Switch the set version and get properties accordingly */
        switch ($this->version) {
            case Version::VERSION_2_1:
                $properties = Properties::getVersion21Properties();
                break;
            case Version::VERSION_3_0:
                $properties = Properties::getVersion30Properties();
                break;
            case Version::VERSION_4_0:
                $properties = Properties::getVersion40Properties();
                break;
        }

        /* Name of the property */
        $name = $property->getName();

        /* Returns true if an index is found */
        return (array_search($name, $properties) !== false) ? true : false;
    }

    /**
     * Set the version string for the vCard to the given value.
     * If the version string given is not supported it will be ignored and
     * the last valid version will be used.
     *
     * @param string $version A version string
     * @return boolean Will true or false if the version string is supported
     */
    public function setVersion($version)
    {

        /* Store all versions into an array */
        $versions = [ self::VERSION_2_1, self::VERSION_3_0, self::VERSION_4_0 ];

        /* Prepare the return value */
        $isSet = false;

        /* Search the versions for the given string */
        if (array_search($version, $versions) !== false) {
            /* Version string is valid, so it is set */
            $this->version = $version;

            /* Set the return value to success */
            $isSet = true;
        }

        return $isSet;
    }

    /**
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
