<?php

declare(strict_types=1);

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Uid
 */
class Uid implements Property
{
    /**
     * @var string
     */
    public const NAME = Properties::UID;

    /**
     *
     * @var string
     */
    protected $uuid = '';

    /**
     *
     * @var bool
     */
    protected $isFreetext = false;

    /**
     *
     * @param string $uuid
     */
    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        // UID:urn:uuid:da418720-3754-4631-a169-db89a02b831b
        if ($this->isFreetext) {
            return self::NAME . ':' . $this->uuid;
        } else {
            return self::NAME . ':urn:uuid:' . $this->uuid;
        }
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     * Sets the uuid value to a freetext value and overrides the uid rendering
     * to a minimalized <code>UID:value</code> instead of using an actual UUID
     * with the <code>UID:urn:uuid:value</code> namespace.
     *
     * @param type $value
     */
    public function setFreetextValue($value)
    {
        $this->uuid = $value;
        $this->isFreetext = true;
    }

    /**
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     *
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->isFreetext = false;
    }
}
