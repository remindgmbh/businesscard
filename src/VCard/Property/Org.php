<?php

declare (strict_types=1);

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Org
 */
class Org implements Property
{
    /**
     * @var string
     */
    public const NAME = Properties::ORG;

    /**
     *
     * @var string
     */
    protected $name = '';

    /**
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        // ORG:ABC\, Inc.;North American Division;Marketing
        return self::NAME . ';CHARSET=ISO-8859-1:' . $this->name;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     */
    public function setOrgName($name)
    {
        $this->name = $name;
    }
}
