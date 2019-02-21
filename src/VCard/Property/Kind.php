<?php

namespace Remind\BusinessCard\VCard\Property;

use \Remind\BusinessCard\VCard\Properties;
use \Remind\BusinessCard\VCard\Property\Property;

/**
 * Description of Kind
 *
 * @link https://tools.ietf.org/html/rfc6350#section-6.1.4
 */
class Kind implements Property
{

    /**
     * Name of the vCard property this class represents.
     * @var string
     */
    const NAME = Properties::KIND;

    /**
     * A vCard representing a single person or entity.
     * This is the default kind of vCard.
     * @var string
     */
    const TYPE_INDIVIDUAL = 'individual';

    /**
     * A vCard representing a group of persons or entities.
     * The group's member entities can be other vCards or other types
     * of entities, such as email addresses or web sites.  A group
     * vCard will usually contain MEMBER properties to specify the
     * members of the group, but it is not required to.  A group vCard
     * without MEMBER properties can be considered an abstract
     * grouping, or one whose members are known empirically (perhaps
     * "IETF Participants" or "Republican U.S. Senators").
     * @var string
     */
    const TYPE_GROUP = 'group';

    /**
     * A vCard representing an organization.  An organization
     * vCard will not (in fact, MUST NOT) contain MEMBER properties,
     * and so these are something of a cross between "individual" and
     * "group".  An organization is a single entity, but not a person.
     * It might represent a business or government, a department or
     * division within a business or government, a club, an
     * association, or the like.
     */
    const TYPE_ORGANISATION = 'org';

    /**
     * A named geographical place.  A location vCard will
     * usually contain a GEO property, but it is not required to.
     * A location vCard without a GEO property can be considered an
     * abstract location, or one whose definition is known empirically
     * (perhaps "New England" or "The Seashore").
     * @var string
     */
    const TYPE_LOCATION = 'location';

    /**
     *
     * @var string
     */
    protected $type = self::TYPE_INDIVIDUAL;

    /**
     *
     */
    public function __construct($type)
    {

        /**/
        $this->type = self::TYPE_INDIVIDUAL;

        /**/
        $this->setType($type);
    }

    /**
     *
     */
    public function __toString()
    {
        return self::NAME . ':' . $this->type;
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @param string $type
     * @return boolean
     */
    public function setType($type)
    {

        /* Store all versions into an array */
        $types = [
            self::TYPE_GROUP, self::TYPE_INDIVIDUAL,
            self::TYPE_LOCATION, self::TYPE_ORGANISATION
        ];

        /* Prepare the return value */
        $isSet = false;

        /* Search the versions for the given string */
        if (array_search($type, $types) !== false) {
            /* Version string is valid, so it is set */
            $this->type = $type;

            /* Set the return value to success */
            $isSet = true;
        }

        return $isSet;
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
