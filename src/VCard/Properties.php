<?php

namespace Remind\BusinessCard\VCard;

/**
 * This class contains constants that define all vCard properties as well as
 * some validation functions.
 */
class Properties
{
    /**
     * A structured representation of the physical delivery address
     * for the vCard object.
     * @var string
     */
    public const ADR = 'ADR';

    /**
     * Information about another person who will act on behalf
     * of the vCard object. Typically this would be an area administrator,
     * assistant, or secretary for the individual.
     * Can be either a URL or an embedded vCard.
     * @var string
     */
    public const AGENT = 'AGENT';

    /**
     * Defines the person's anniversary.
     * @var string
     */
    public const ANNIVERSARY = 'ANNIVERSARY';

    /**
     * Date of birth of the individual associated with the vCard.
     * @var string
     */
    public const BDAY = 'BDAY';

    /**
     * All vCards must start with this property.
     * @var string
     */
    public const BEGIN = 'BEGIN';

    /**
     * A URL to use for sending a scheduling request to the person's calendar.
     * @var string
     */
    public const CALADRURI = 'CALADRURI';

    /**
     * A URL to the person's calendar.
     * @var string
     */
    public const CALURI = 'CALURI';

    /**
     * A list of "tags" that can be used to describe the object
     * represented by this vCard.
     * @var string
     */
    public const CATEGORIES = 'CATEGORIES';

    /**
     * Describes the sensitivity of the information in the vCard.
     * @var string
     */
    public const CLASS_PROP = 'CLASS';

    /**
     * Used for synchronizing different revisions of the same vCard.
     * @var string
     */
    public const CLIENTPIDMAP = 'CLIENTPIDMAP';

    /**
     * The address for electronic mail communication with the vCard object.
     * @var string
     */
    public const EMAIL = 'EMAIL';

    /**
     * All vCards must end with this property.
     * @var string
     */
    public const END = 'END';

    /**
     * Defines a URL that shows when the person is
     * "free" or "busy" on their calendar.
     * @var string
     */
    public const FBURL = 'FBURL';

    /**
     * The formatted name string associated with the vCard object.
     * @var string
     */
    public const FN = 'FN';

    /**
     * Defines the person's gender.
     * @var string
     */
    public const GENDER = 'GENDER';

    /**
     * Specifies a latitude and longitude.
     * @var string
     */
    public const GEO = 'GEO';

    /**
     * Defines an instant messenger handle.
     * @var string
     */
    public const IMPP = 'IMPP';

    /**
     * The public encryption key associated with the vCard object.
     * It may point to an external URL, may be plain text,
     * or may be embedded in the vCard as a Base64 encoded block of text.
     * @var string
     */
    public const KEY = 'KEY';

    /**
     * Defines the type of entity that this vCard represents: 'application',
     * 'individual, 'group', 'location' or 'organization';
     * 'x-*' values may be used for experimental purposes.
     * @var string
     */
    public const KIND = 'KIND';

    /**
     * Represents the actual text that should be put on the mailing label
     * when delivering a physical package to the person/object associated
     * with the vCard (related to the ADR property).
     * @var string
     */
    public const LABEL = 'LABEL';

    /**
     * Defines a language that the person speaks.
     * @var string
     */
    public const LANG = 'LANG';

    /**
     * An image or graphic of the logo of the organization that is
     * associated with the individual to which the vCard belongs.
     * It may point to an external URL or may be embedded in the vCard
     * as a Base64 encoded block of text.
     * @var string
     */
    public const LOGO = 'LOGO';

    /**
     * Type of email program used.
     * @var string
     */
    public const MAILER = 'MAILER';

    /**
     * Defines a member that is part of the group that this vCard represents.
     * Acceptable values include:
     * -  a "mailto:" URL containing an email address
     * - a UID which references the member's own vCard
     * The KIND property must be set to "group" in order to use this property.
     * @var string
     */
    public const MEMBER = 'MEMBER';

    /**
     * A structured representation of the name of the person,
     * place or thing associated with the vCard object.
     * @var string
     */
    public const N = 'N';

    /**
     * Provides a textual representation of the SOURCE property.
     * @var string
     */
    public const NAME = 'NAME';

    /**
     * One or more descriptive/familiar names for the object
     * represented by this vCard.
     * @var string
     */
    public const NICKNAME = 'NICKNAME';

    /**
     * Specifies supplemental information or a comment
     * that is associated with the vCard.
     * @var string
     */
    public const NOTE = 'NOTE';

    /**
     * The name and optionally the unit(s) of the organization associated
     * with the vCard object. This property is based on the
     * X.520 Organization Name attribute and the
     * X.520 Organization Unit attribute.
     * @var string
     */
    public const ORG = 'ORG';

    /**
     * An image or photograph of the individual associated with the vCard.
     * It may point to an external URL or may be embedded in the vCard
     * as a Base64 encoded block of text.
     * @var string
     */
    public const PHOTO = 'PHOTO';

    /**
     * The identifier for the product that created the vCard object.
     * @var string
     */
    public const PRODID = 'PRODID';

    /**
     * States that the vCard is a vCard.
     * @var string
     */
    public const PROFILE = 'PROFILE';

    /**
     * Another entity that the person is related to. Acceptable values include:
     * - a "mailto:" URL containing an email address
     * - a UID which references the person's own vCard
     * @var string
     */
    public const RELATED = 'RELATED';

    /**
     * A timestamp for the last time the vCard was updated.
     * @var string
     */
    public const REV = 'REV';

    /**
     * The role, occupation, or business category of the vCard object
     * within an organization.
     * @var string
     */
    public const ROLE = 'ROLE';

    /**
     * Defines a string that should be used when an application sorts
     * this vCard in some way.
     * @var string
     */
    public const SORT_STRING = 'SORT-STRING';

    /**
     * By default, if this property is not grouped with other properties
     * it specifies the pronunciation of the FN property of the vCard object.
     * It may point to an external URL or may be embedded in the vCard
     * as a Base64 encoded block of text.
     * @var string
     */
    public const SOUND = 'SOUND';

    /**
     * A URL that can be used to get the latest version of this vCard.
     * @var string
     */
    public const SOURCE = 'SOURCE';

    /**
     * The canonical number string for a telephone number for telephony
     * communication with the vCard object.
     * @var string
     */
    public const TEL = 'TEL';

    /**
     * Specifies the job title, functional position or function
     * of the individual associated with the vCard object
     * within an organization.
     * @var string
     */
    public const TITLE = 'TITLE';

    /**
     * The time zone of the vCard object.
     * @var string
     */
    public const TZ = 'TZ';

    /**
     * Specifies a value that represents a persistent,
     * globally unique identifier associated with the object.
     * @var string
     */
    public const UID = 'UID';

    /**
     * A URL pointing to a website that represents the person in some way.
     * @var string
     */
    public const URL = 'URL';

    /**
     * The version of the vCard specification. In versions 3.0 and 4.0,
     * this must come right after the BEGIN property.
     * @var string
     */
    public const VERSION = 'VERSION';

    /**
     * Any XML data that is attached to the vCard. This is used if the vCard
     * was encoded in XML (xCard standard) and the XML document contained
     * elements which are not part of the xCard standard.
     * @var string
     */
    public const XML = 'XML';

    /**
     * Returns an array containing all properties allowed to be set in
     * version 2.1 vCard files.
     *
     * @return array All properties for 2.1 vCard files
     */
    public static function getVersion21Properties(): array
    {
        return [
            self::ADR, self::AGENT, self::BDAY, self::BEGIN, self::CATEGORIES,
            self::EMAIL, self::END, self::FN, self::GEO, self::KEY, self::LABEL,
            self::LOGO, self::MAILER, self::N, self::NOTE, self::ORG,
            self::PHOTO, self::PROFILE, self::REV, self::ROLE,
            self::SORT_STRING, self::SOUND, self::SOURCE, self::TEL,
            self::TITLE, self::TZ, self::UID, self::URL, self::VERSION
        ];
    }

    /**
     * Returns an array containing all properties allowed to be set in
     * version 3.0 vCard files.
     *
     * @return array All properties for 3.0 vCard files
     */
    public static function getVersion30Properties(): array
    {
        return [
            self::ADR, self::AGENT, self::ANNIVERSARY, self::BDAY, self::BEGIN,
            self::CATEGORIES, self::class, self::EMAIL, self::END, self::FN,
            self::GEO, self::IMPP, self::KEY, self::LABEL, self::LOGO,
            self::MAILER, self::N, self::NAME, self::NICKNAME, self::NOTE,
            self::ORG, self::PHOTO, self::PRODID, self::PROFILE, self::REV,
            self::ROLE, self::SORT_STRING, self::SOUND, self::SOURCE, self::TEL,
            self::TITLE, self::TZ, self::UID, self::URL, self::VERSION
        ];
    }

    /**
     * Returns an array containing all properties allowed to be set in
     * version 4.0 vCard files.
     *
     * @return array All properties for 4.0 vCard files
     */
    public static function getVersion40Properties(): array
    {
        return [
            self::ADR, self::ANNIVERSARY, self::BDAY, self::BEGIN,
            self::CATEGORIES, self::CLIENTPIDMAP, self::EMAIL, self::END,
            self::FBURL, self::FN, self::GENDER, self::GEO, self::IMPP,
            self::KEY, self::KIND, self::LANG, self::LOGO, self::MEMBER,
            self::N, self::NICKNAME, self::NOTE, self::ORG, self::PHOTO,
            self::PRODID, self::RELATED, self::REV, self::ROLE, self::SOUND,
            self::SOURCE, self::TEL, self::TITLE, self::TZ, self::UID,
            self::URL, self::VERSION, self::XML
        ];
    }

    public static function getRequiredProperties(): array
    {
        return [ self::BEGIN, self::END, self::VERSION ];
    }

    /**
     *
     * @return type
     */
    public static function getVersion21RequiredProperties(): array
    {
        return [ self::BEGIN, self::END, self::N, self::VERSION ];
    }

    /**
     *
     * @return type
     */
    public static function getVersion30RequiredProperties(): array
    {
        return [ self::BEGIN, self::END, self::FN, self::N, self::VERSION ];
    }

    /**
     *
     * @return type
     */
    public static function getVersion40RequiredProperties(): array
    {
        return [ self::BEGIN, self::END, self::FN, self::VERSION ];
    }

    /**
     *
     * @param type $value
     * @return type
     */
    public static function escapeValue($value)
    {
        return str_replace([',', ';', '\\'], ['\\,', '\\;', '\\\\'], $value);
    }
}
