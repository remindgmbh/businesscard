<?php

declare(strict_types=1);

namespace Remind\BusinessCard\VCard\Parameter;

/**
 * Description of Value
 */
class Value
{
    /**
     * @var string
     */
    public const NAME = Parameter::VALUE;

    /**
     * @var string
     */
    public const TYPE_TEXT = 'text';

    /**
     * @var string
     */
    public const TYPE_URI = 'uri';

    /**
     * @var string
     */
    public const TYPE_DATE = 'date';

    /**
     * @var string
     */
    public const TYPE_TIME = 'time';

    /**
     * @var string
     */
    public const TYPE_DATE_TIME = 'date-time';

    /**
     * @var string
     */
    public const TYPE_DATE_AND_OR_TIME = 'date-and-or-time';

    /**
     * @var string
     */
    public const TYPE_TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    public const TYPE_BOOLEAN = 'boolean';

    /**
     * @var string
     */
    public const TYPE_INTEGER = 'integer';

    /**
     * @var string
     */
    public const TYPE_FLOAT = 'float';

    /**
     * @var string
     */
    public const TYPE_UTC_OFFSET = 'utc-offset';

    /**
     * @var string
     */
    public const TYPE_LANGUAGE_TAG = 'language-tag';

    /**
     * @var string
     */
    public const TYPE_IANA_TOKEN = 'iana-token';

    /**
     * @var string
     */
    public const TYPE_X_NAME = 'x-name';

    /**
     *
     * @var string
     */
    protected $type = '';

    /**
     *
     * @param string $type
     */
    public function __construct(string $type)
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
