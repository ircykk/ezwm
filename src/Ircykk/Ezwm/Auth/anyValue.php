<?php

namespace Ircykk\Ezwm\Auth;

class anyValue
{
    /**
     * @var string
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
        $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param string $any
     *
     * @return \Ircykk\Ezwm\Auth\anyValue
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }
}
