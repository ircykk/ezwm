<?php

namespace Ircykk\Ezwm\ServiceBroker;

class Param
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @param string $name
     * @param string $value
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
     * @return \Ircykk\Ezwm\ServiceBroker\Param
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return \Ircykk\Ezwm\ServiceBroker\Param
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
