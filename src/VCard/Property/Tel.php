<?php

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Parameter\Pref;
use Remind\BusinessCard\VCard\Parameter\TypeTelephone;
use Remind\BusinessCard\VCard\Parameter\Value;
use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Tel
 */
class Tel {

    /**
     * @var
     */
    const NAME = Properties::TEL;

    /**
     *
     * @var Value
     */
    protected $value = null;

    /**
     *
     * @var Pref
     */
    protected $pref = null;

    /**
     *
     * @var string
     */
    protected $content = '';

    /**
     *
     * @var TypeTelephone
     */
    protected $type = null;

    /**
     *
     * @param TypeTelephone $type
     * @param string $content
     */
    public function __construct(TypeTelephone $type, $content) {
        $this->type = $type;
        $this->content = $content;
        $this->pref = new Pref(Pref::HIGHEST);
        $this->value = new Value(Value::TYPE_URI);
    }

    /**
     *
     * @return string
     */
    public function __toString() {
        // TEL;VALUE=uri;PREF=1;TYPE="voice,home":tel:+1-555-555-5555;ext=5555

        return implode(';', [
            self::NAME, $this->value, $this->pref, $this->type, $this->content
        ]);
    }

    /**
     *
     * @return Value
     */
    public function getValue() {
        return $this->value;
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
    public function getContent() {
        return $this->content;
    }

    /**
     *
     * @return TypeTelephone
     */
    public function getType() {
        return $this->type;
    }

    /**
     *
     * @param Value $value
     */
    public function setValue(Value $value) {
        $this->value = $value;
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
     * @param string $content
     */
    public function setContent($content) {
        $this->content = $content;
    }

    /**
     *
     * @param TypeTelephone $type
     */
    public function setType(TypeTelephone $type) {
        $this->type = $type;
    }
}
