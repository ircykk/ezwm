<?php

namespace Ircykk\Ezwm\ServiceBroker;

class streamload
{
    /**
     * @var base64Binary
     */
    protected $stream = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @param base64Binary $stream
     * @param string       $name
     */
    public function __construct($stream, $name)
    {
        $this->stream = $stream;
        $this->name = $name;
    }

    /**
     * @return base64Binary
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * @param base64Binary $stream
     *
     * @return \Ircykk\Ezwm\ServiceBroker\streamload
     */
    public function setStream($stream)
    {
        $this->stream = $stream;

        return $this;
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
     * @return \Ircykk\Ezwm\ServiceBroker\streamload
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
