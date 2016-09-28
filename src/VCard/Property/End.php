<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Property\Property;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of End
 */
class End implements Property {

    /**
     * @var string
     */
    const NAME = Properties::END;

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

    public function getName() {
        return self::NAME;
    }
}
