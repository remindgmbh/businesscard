<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;
use Remind\BusinessCard\VCard\Property\Property;

/**
 * Description of Source
 */
class Source implements Property {

    /**
     * @var string
     */
    const NAME = Properties::SOURCE;

    /**
     *
     * @var string
     */
    protected $uri = '';

    /**
     *
     * @param string $uri
     */
    public function __construct($uri) {
        $this->uri = $uri;
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        return self::NAME . ':' . $this->uri;
    }

    public function getName() {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     *
     * @param string $uri
     */
    public function setUri($uri) {
        $this->uri = $uri;
    }
}
