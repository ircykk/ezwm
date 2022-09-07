<?php

namespace Ircykk\Ezwm\ServiceBroker;

class ServiceRequest extends Service
{
    /**
     * @param ServiceLocation $location
     * @param Payload         $payload
     */
    public function __construct($location, \DateTime $date, $payload)
    {
        parent::__construct($location, $date, $payload);
    }
}
