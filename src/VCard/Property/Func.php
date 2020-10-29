<?php

declare (strict_types=1);

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Property\Property;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Fn
 */
class Func implements Property
{
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
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ';CHARSET=ISO-8859-1:' . $this->identifier;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     *
     * @param string $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }
}
