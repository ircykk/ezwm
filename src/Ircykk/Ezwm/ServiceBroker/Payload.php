<?php

namespace Ircykk\Ezwm\ServiceBroker;

class Payload
{
    /**
     * @var textload
     */
    protected $textload = null;

    /**
     * @var streamload
     */
    protected $streamload = null;

    public function __construct()
    {
    }

    /**
     * @return textload
     */
    public function getTextload()
    {
        return $this->textload;
    }

    /**
     * @param textload $textload
     *
     * @return \Ircykk\Ezwm\ServiceBroker\Payload
     */
    public function setTextload($textload)
    {
        $this->textload = $textload;

        return $this;
    }

    /**
     * @return streamload
     */
    public function getStreamload()
    {
        return $this->streamload;
    }

    /**
     * @param streamload $streamload
     *
     * @return \Ircykk\Ezwm\ServiceBroker\Payload
     */
    public function setStreamload($streamload)
    {
        $this->streamload = $streamload;

        return $this;
    }
}
