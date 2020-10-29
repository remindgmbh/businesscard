<?php

declare (strict_types=1);

namespace Remind\BusinessCard\VCard\Parameter;

/**
 * Description of TypeTelephone
 */
class TypeTelephone extends Type
{
    /**
     * @var string
     */
    public const VALUE_TEXT = 'text';

    /**
     * @var string
     */
    public const VALUE_VOICE = 'voice';

    /**
     * @var string
     */
    public const VALUE_FAX = 'fax';

    /**
     * @var string
     */
    public const VALUE_CELL = 'cell';

    /**
     * @var string
     */
    public const VALUE_VIDEO = 'video';

    /**
     * @var string
     */
    public const VALUE_PAGER = 'pager';

    /**
     * @var string
     */
    public const VALUE_TEXTPHONE = 'textphone';
}
