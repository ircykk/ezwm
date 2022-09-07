<?php

namespace Ircykk\Ezwm\ServiceBroker;

class AuthTokenException extends BaseException
{
    /**
     * @param ServiceLocation $location
     * @param string          $faultcode
     * @param string          $faultstring
     * @param string          $faultactor
     */
    public function __construct($location, $faultcode, $faultstring, $faultactor)
    {
        parent::__construct($location, $faultcode, $faultstring, $faultactor);
    }
}
