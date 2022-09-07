<?php

namespace Ircykk\Ezwm\Auth;

class paramValue
{
    /**
     * @var string
     */
    protected $stringValue = null;

    /**
     * @var anyValue
     */
    protected $anyValue = null;

    /**
     * @param string   $stringValue
     * @param anyValue $anyValue
     */
    public function __construct($stringValue, $anyValue)
    {
        $this->stringValue = $stringValue;
        $this->anyValue = $anyValue;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
        return $this->stringValue;
    }

    /**
     * @param string $stringValue
     *
     * @return \Ircykk\Ezwm\Auth\paramValue
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;

        return $this;
    }

    /**
     * @return anyValue
     */
    public function getAnyValue()
    {
        return $this->anyValue;
    }

    /**
     * @param anyValue $anyValue
     *
     * @return \Ircykk\Ezwm\Auth\paramValue
     */
    public function setAnyValue($anyValue)
    {
        $this->anyValue = $anyValue;

        return $this;
    }
}
