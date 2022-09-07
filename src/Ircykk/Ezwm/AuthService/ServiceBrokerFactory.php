<?php

namespace Ircykk\Ezwm\AuthService;

use Ircykk\Ezwm\ServiceBroker\ServiceBroker;

class ServiceBrokerFactory
{
    /**
     * @return ServiceBroker
     */
    public function build(bool $envTest = false, array $options = [])
    {
        $defaultOptions = [
            'trace' => EZWM_SOAP_TRACE,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ];

        $options = array_merge($defaultOptions, $options);

        $wsdl = 'https://ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/ServiceBroker?wsdl';
        if ($envTest) {
            $wsdl = 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/ServiceBroker?wsdl';
        }

        return new ServiceBroker($options, $wsdl);
    }
}
