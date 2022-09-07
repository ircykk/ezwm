<?php

namespace Ircykk\Ezwm\Auth;

class loginParam
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var paramValue
     */
    protected $value = null;

    /**
     * @param string     $name
     * @param paramValue $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return \Ircykk\Ezwm\Auth\loginParam
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return paramValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param paramValue $value
     *
     * @return \Ircykk\Ezwm\Auth\loginParam
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
