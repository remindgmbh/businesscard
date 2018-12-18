<?php

namespace Remind\BusinessCard\VCard\Parameter;

use Remind\BusinessCard\VCard\Parameter\Parameter;

/**
 * Description of Value
 */
class Value
{

    /**
     * @var string
     */
    const NAME = Parameter::VALUE;

    /**
     * @var string
     */
    const TYPE_TEXT = 'text';

    /**
     * @var string
     */
    const TYPE_URI = 'uri';

    /**
     * @var string
     */
    const TYPE_DATE = 'date';

    /**
     * @var string
     */
    const TYPE_TIME = 'time';

    /**
     * @var string
     */
    const TYPE_DATE_TIME = 'date-time';

    /**
     * @var string
     */
    const TYPE_DATE_AND_OR_TIME = 'date-and-or-time';

    /**
     * @var string
     */
    const TYPE_TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    const TYPE_BOOLEAN = 'boolean';

    /**
     * @var string
     */
    const TYPE_INTEGER = 'integer';

    /**
     * @var string
     */
    const TYPE_FLOAT = 'float';

    /**
     * @var string
     */
    const TYPE_UTC_OFFSET = 'utc-offset';

    /**
     * @var string
     */
    const TYPE_LANGUAGE_TAG = 'language-tag';

    /**
     * @var string
     */
    const TYPE_IANA_TOKEN = 'iana-token';

    /**
     * @var string
     */
    const TYPE_X_NAME = 'x-name';

    /**
     *
     * @var string
     */
    protected $type = '';

    /**
     *
     * @param type $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return self::NAME . '=' . $this->type;
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
