<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Parameter\Pref;
use Remind\BusinessCard\VCard\Parameter\Type;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Email
 */
class Email {

    /**
     * @var string
     */
    const NAME = Properties::EMAIL;

    /**
     *
     * @var Type
     */
    protected $type = null;

    /**
     *
     * @var Pref
     */
    protected $pref = null;

    /**
     *
     * @var string
     */
    protected $value = '';

    /**
     *
     * @param Type $type
     * @param string $value
     */
    public function __construct(Type $type, $value) {
        $this->type = $type;
        $this->value = $value;
        $this->pref = new Pref(Pref::HIGHEST);
    }

    /**
     * @return string
     */
    public function __toString() {
        return implode(';', [
            self::NAME, $this->type, $this->pref
        ]) . ':' . $this->value;
    }

    /**
     *
     * @return Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     *
     * @return Pref
     */
    public function getPref() {
        return $this->pref;
    }

    /**
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    /**
     *
     * @param Type $type
     */
    public function setType(Type $type) {
        $this->type = $type;
    }

    /**
     *
     * @param Pref $pref
     */
    public function setPref(Pref $pref) {
        $this->pref = $pref;
    }

    /**
     *
     * @param string $value
     */
    public function setValue($value) {
        $this->value = $value;
    }
}
