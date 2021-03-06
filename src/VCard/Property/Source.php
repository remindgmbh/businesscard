<?php

declare(strict_types=1);

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Source
 */
class Source implements Property
{
    /**
     * @var string
     */
    public const NAME = Properties::SOURCE;

    /**
     *
     * @var string
     */
    protected $uri = '';

    /**
     *
     * @param string $uri
     */
    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ':' . $this->uri;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     *
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}
