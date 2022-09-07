<?php

namespace Ircykk\Ezwm\ServiceBroker;

class hexBinary
{
    /**
     * @var string
     */
    protected $_ = null;

    /**
     * @var anonymous13
     */
    protected $contentType = null;

    /**
     * @param string      $_
     * @param anonymous13 $contentType
     */
    public function __construct($_, $contentType)
    {
        $this->_ = $_;
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param string $_
     *
     * @return \Ircykk\Ezwm\ServiceBroker\hexBinary
     */
    public function set_($_)
    {
        $this->_ = $_;

        return $this;
    }

    /**
     * @return anonymous13
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param anonymous13 $contentType
     *
     * @return \Ircykk\Ezwm\ServiceBroker\hexBinary
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }
}
