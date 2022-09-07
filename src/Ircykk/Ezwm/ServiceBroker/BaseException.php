<?php

namespace Ircykk\Ezwm\ServiceBroker;

class BaseException
{
    /**
     * @var ServiceLocation
     */
    protected $location = null;

    /**
     * @var string
     */
    protected $faultcode = null;

    /**
     * @var string
     */
    protected $faultstring = null;

    /**
     * @var string
     */
    protected $faultactor = null;

    /**
     * @var ArrayOfMessage
     */
    protected $messages = null;

    /**
     * @param ServiceLocation $location
     * @param string          $faultcode
     * @param string          $faultstring
     * @param string          $faultactor
     */
    public function __construct($location, $faultcode, $faultstring, $faultactor)
    {
        $this->location = $location;
        $this->faultcode = $faultcode;
        $this->faultstring = $faultstring;
        $this->faultactor = $faultactor;
    }

    /**
     * @return ServiceLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param ServiceLocation $location
     *
     * @return \Ircykk\Ezwm\ServiceBroker\BaseException
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaultcode()
    {
        return $this->faultcode;
    }

    /**
     * @param string $faultcode
     *
     * @return \Ircykk\Ezwm\ServiceBroker\BaseException
     */
    public function setFaultcode($faultcode)
    {
        $this->faultcode = $faultcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaultstring()
    {
        return $this->faultstring;
    }

    /**
     * @param string $faultstring
     *
     * @return \Ircykk\Ezwm\ServiceBroker\BaseException
     */
    public function setFaultstring($faultstring)
    {
        $this->faultstring = $faultstring;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaultactor()
    {
        return $this->faultactor;
    }

    /**
     * @param string $faultactor
     *
     * @return \Ircykk\Ezwm\ServiceBroker\BaseException
     */
    public function setFaultactor($faultactor)
    {
        $this->faultactor = $faultactor;

        return $this;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param ArrayOfMessage $messages
     *
     * @return \Ircykk\Ezwm\ServiceBroker\BaseException
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }
}
