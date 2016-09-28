<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Fn
 */
class Fn {

    /**
     * @var string
     */
    const NAME = Properties::FN;

    /**
     *
     * @var string
     */
    protected $identifier = '';

    /**
     *
     * @param string $identifier
     */
    public function __construct($identifier) {
        $this->identifier = $identifier;
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        return self::NAME . ':' . $this->identifier;
    }

    /**
     *
     * @return string
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     *
     * @param string $identifier
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
    }
}
