<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Org
 */
class Org {

    /**
     * @var string
     */
    const NAME = Properties::ORG;

    /**
     *
     * @var string
     */
    protected $name = '';

    /**
     *
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        // ORG:ABC\, Inc.;North American Division;Marketing
        return self::NAME . ';' . $this->name;
    }

    /**
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }
}
