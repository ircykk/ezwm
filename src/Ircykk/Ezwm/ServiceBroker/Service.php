<?php

namespace Ircykk\Ezwm\ServiceBroker;

class Service
{
    /**
     * @var ServiceLocation
     */
    protected $location = null;

    /**
     * @var \DateTime
     */
    protected $date = null;

    /**
     * @var ArrayOfParam
     */
    protected $params = null;

    /**
     * @var Payload
     */
    protected $payload = null;

    /**
     * @param ServiceLocation $location
     * @param Payload         $payload
     */
    public function __construct($location, \DateTime $date, $payload)
    {
        $this->location = $location;
        $this->date = $date->format(\DateTime::ATOM);
        $this->payload = $payload;
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
     * @return \Ircykk\Ezwm\ServiceBroker\Service
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if (null == $this->date) {
            return null;
        } else {
            try {
                return new \DateTime($this->date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @return \Ircykk\Ezwm\ServiceBroker\Service
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return ArrayOfParam
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param ArrayOfParam $params
     *
     * @return \Ircykk\Ezwm\ServiceBroker\Service
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @return Payload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param Payload $payload
     *
     * @return \Ircykk\Ezwm\ServiceBroker\Service
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }
}
