<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Property\Property;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Bday
 */
class Bday implements Property
{

    const NAME = Properties::BDAY;

    /**
     *
     */
    const DATE_FORMAT = 'Ymd';

    /**
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     *
     * @param \DateTime $date
     */
    public function __construct(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ':' . $this->date->format(self::DATE_FORMAT);
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return type
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
