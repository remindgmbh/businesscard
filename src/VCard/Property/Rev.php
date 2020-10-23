<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Rev.
 */
class Rev implements Property
{
    /**
     * @var string
     */
    const NAME = Properties::REV;

    /**
     * @var string
     */
    const DATE_FORMAT = 'Ymd\THisT';

    /**
     * @var \DateTime
     */
    protected $date = null;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::NAME.':'.$this->date->format(self::DATE_FORMAT);
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
