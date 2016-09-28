<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Begin
 */
class Begin {

    /**
     * @var string
     */
    const NAME = Properties::BEGIN;

    /**
     * @var string
     */
    const VALUE = 'VCARD';

    /**
     * 
     */
    public function __construct() {}

    /**
     *
     * @return string
     */
    public function __toString() {
        return self::NAME . ':' . self::VALUE;
    }
}
