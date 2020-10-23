<?php

namespace Remind\BusinessCard\VCard\Parameter;

use function array_search;

/**
 * The TYPE parameter has multiple, different uses. In general, it is a
 * way of specifying class characteristics of the associated property.
 * Most of the time, its value is a comma-separated subset of a
 * predefined enumeration. In this document, the following properties
 * make use of this parameter: FN, NICKNAME, PHOTO, ADR, TEL, EMAIL,
 * IMPP, LANG, TZ, GEO, TITLE, ROLE, LOGO, ORG, RELATED, CATEGORIES,
 * NOTE, SOUND, URL, KEY, FBURL, CALADRURI, and CALURI.  The TYPE
 * parameter MUST NOT be applied on other properties defined in this document.
 *
 * @link https://tools.ietf.org/html/rfc6350#section-5.6
 */
class Type
{
    const NAME = Parameter::TYPE;

    const VALUE_HOME = 'home';

    const VALUE_WORK = 'work';

    /**
     * @var array
     */
    protected $values = [];

    public function __construct()
    {
        $this->values = [];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (!empty($this->values)) {
            return self::NAME.'='.implode(',', $this->values);
        }

        return '';
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param array $values
     */
    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    /**
     * @param type $name
     */
    public function addValue($name): void
    {
        $this->values[] = $name;
    }

    /**
     * @param string $name
     */
    public function removeValue(string $name): void
    {
        $result = array_search($name, $this->values, true);

        if ($result !== false) {
            unset($this->values[$result]);
        }
    }
}
