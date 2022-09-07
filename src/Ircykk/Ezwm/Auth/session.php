<?php

namespace Ircykk\Ezwm\Auth;

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
     * @return \Ircykk\Ezwm\Auth\session
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
