<?php

namespace Remind\BusinessCard\VCard\Parameter;

use Remind\BusinessCard\VCard\Parameter\Parameter;

/**
 * Description of Pref
 */
class Pref
{

    /**
     * @var string
     */
    const NAME = Parameter::PREF;

    /**
     * @var int
     */
    const LOWEST = 100;

    /**
     * @var int
     */
    const HIGHEST = 1;

    /**
     *
     * @var int
     */
    protected $preference = self::LOWEST;

    /**
     *
     * @param type $preference
     */
    public function __construct($preference = self::LOWEST)
    {
        $this->preference = self::LOWEST;
        $this->setPreference($preference);
    }

    /**
     *
     */
    public function __toString()
    {
        return self::NAME . '=' . $this->preference;
    }

    /**
     *
     * @return type
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     *
     * @param type $preference
     * @return boolean
     */
    public function setPreference($preference)
    {

        /**/
        $isSet = false;

        /**/
        if ($preference >= self::HIGHEST && $preference <= self::LOWEST) {

            /**/
            $this->preference = $preference;

            /**/
            $isSet = true;
        }

        return $isSet;
    }
}
