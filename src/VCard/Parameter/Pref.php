<?php

namespace Remind\BusinessCard\VCard\Parameter;

/**
 * Description of Pref
 */
class Pref
{
    /**
     * @var string
     */
    public const NAME = Parameter::PREF;

    /**
     * @var int
     */
    public const LOWEST = 100;

    /**
     * @var int
     */
    public const HIGHEST = 1;

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
    public function getPreference(): int
    {
        return $this->preference;
    }

    /**
     *
     * @param type $preference
     * @return bool
     */
    public function setPreference(int $preference): bool
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
