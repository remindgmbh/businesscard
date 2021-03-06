<?php

declare(strict_types=1);

namespace Remind\BusinessCard;

use Remind\BusinessCard\VCard\Property\Begin;
use Remind\BusinessCard\VCard\Property\End;
use Remind\BusinessCard\VCard\Property\Property;
use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of VCard
 *
 * @link https://tools.ietf.org/html/rfc6350
 * @link https://en.wikipedia.org/wiki/VCard
 */
class VCard
{
    /**
     * The line delimiter defined in RFC350 used for indiviudal lines.
     * @var string
     */
    public const CRLF = "\n";

    /**
     * Holds all set properties for the vCard.
     *
     * @var array
     */
    protected $properties = [];

    /**
     *
     * @var Version
     */
    protected $version = null;

    /**
     *
     * @var Begin
     */
    protected $begin = null;

    /**
     *
     * @var End
     */
    protected $end = null;

    /**
     * Creates a new vCard with a given version. Defaults to 2.1
     *
     * @param Version $version
     */
    public function __construct(Version $version)
    {
        $this->version = $version;

        /* Intialize the properties */
        $this->properties = [];

        $this->begin = new Begin();
        $this->end = new End();
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        $vcard = $this->begin . self::CRLF;
        $vcard .= $this->version . self::CRLF;

        foreach ($this->properties as $property) {
            $vcard .= $property . self::CRLF;
        }

        $vcard .= $this->end;

        return $vcard;
    }

    /**
     *
     * @param Property $property
     * @return bool
     */
    public function addProperty(Property $property): bool
    {

        /**/
        $isAllowed = $this->version->isPropertyAllowed($property);

        /**/
        if ($isAllowed) {
            $this->properties[] = $property;
        }

        return $isAllowed;
    }

    /**
     *
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     *
     * @return Version
     */
    public function getVersion(): Version
    {
        return $this->version;
    }

    /**
     *
     * @param array $properties
     * @return void
     */
    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    /**
     *
     * @param Version $version
     * @return void
     */
    public function setVersion(Version $version): void
    {
        $this->version = $version;
    }
}
