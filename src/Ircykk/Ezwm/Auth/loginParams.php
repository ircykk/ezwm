<?php

namespace Ircykk\Ezwm\Auth;

class loginParams
{
    /**
     * @var loginParam[]
     */
    protected $item = null;

    /**
     * @param loginParam[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return loginParam[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param loginParam[] $item
     *
     * @return \Ircykk\Ezwm\Auth\loginParams
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }
}
