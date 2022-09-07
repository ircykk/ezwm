<?php

namespace Ircykk\Ezwm\ServiceBroker;

class base64Binary
{
    /**
     * @var base64Binary
     */
    protected $_ = null;

    /**
     * @var anonymous13
     */
    protected $contentType = null;

    /**
     * @param base64Binary $_
     * @param anonymous13  $contentType
     */
    public function __construct($_, $contentType)
    {
        $this->_ = $_;
        $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param base64Binary $_
     *
     * @return \Ircykk\Ezwm\ServiceBroker\base64Binary
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
     * @return \Ircykk\Ezwm\ServiceBroker\base64Binary
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }
}
