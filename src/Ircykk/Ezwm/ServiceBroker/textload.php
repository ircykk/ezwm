<?php

namespace Ircykk\Ezwm\ServiceBroker;

class textload
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
     * @return \Ircykk\Ezwm\ServiceBroker\textload
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }
}
