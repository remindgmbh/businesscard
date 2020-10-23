<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Title.
 */
class Title implements Property
{
    /**
     * @var string
     */
    const NAME = Properties::TITLE;

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @param string $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::NAME.';CHARSET=ISO-8859-1:'.$this->title;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
