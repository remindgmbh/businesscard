<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;
use Remind\BusinessCard\VCard\Property\Property;

/**
 * Description of N
 */
class N implements Property
{

    /**
     * @var string
     */
    const NAME = Properties::N;

    /**
     *
     * @var string
     */
    protected $familyName = '';

    /**
     *
     * @var string
     */
    protected $givenName = '';

    /**
     *
     * @var string
     */
    protected $additionalName = '';

    /**
     *
     * @var string
     */
    protected $honorificPrefixes = '';

    /**
     *
     * @var string
     */
    protected $honorificSuffixes = '';

    /**
     *
     */
    public function __construct()
    {
        $this->familyName = '';
        $this->givenName = '';
        $this->additionalName = '';
        $this->honorificPrefixes = '';
        $this->honorificSuffixes = '';
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return self::NAME . ':' . implode(';', [
            $this->familyName,
            $this->givenName,
            $this->additionalName,
            $this->honorificPrefixes,
            $this->honorificSuffixes
        ]);
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     *
     * @return string
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     *
     * @return type
     */
    public function getHonorificPrefixes()
    {
        return $this->honorificPrefixes;
    }

    /**
     *
     * @return string
     */
    public function getHonorificSuffixes()
    {
        return $this->honorificSuffixes;
    }

    /**
     *
     * @param string $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     *
     * @param string $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     *
     * @param string $additionalName
     */
    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;
    }

    /**
     *
     * @param string $honorificPrefixes
     */
    public function setHonorificPrefixes($honorificPrefixes)
    {
        $this->honorificPrefixes = $honorificPrefixes;
    }

    /**
     *
     * @param string $honorificSuffixes
     */
    public function setHonorificSuffixes($honorificSuffixes)
    {
        $this->honorificSuffixes = $honorificSuffixes;
    }
}
