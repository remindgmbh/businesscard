<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Begin
 */
class Begin implements Property
{
    /**
     * @var string
     */
    public const NAME = Properties::BEGIN;

    /**
     * @var string
     */
    public const VALUE = 'VCARD';

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ':' . self::VALUE;
    }

    public function getName()
    {
        return self::NAME;
    }
}
