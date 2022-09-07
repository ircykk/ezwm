<?php

namespace Ircykk\Ezwm\ServiceBroker;

class session
{
    /**
     * @var string
     */
    protected $id = null;

    /**
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return \Ircykk\Ezwm\ServiceBroker\session
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
