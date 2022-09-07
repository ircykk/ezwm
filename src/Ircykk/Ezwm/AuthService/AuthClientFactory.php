<?php

namespace Ircykk\Ezwm\AuthService;

use Ircykk\Ezwm\Auth\Auth;

class AuthClientFactory
{
    /**
     * @return Auth
     */
    public function build(bool $envTest = false, array $options = [])
    {
        $defaultOptions = [
            'trace' => EZWM_SOAP_TRACE,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ];

        $options = array_merge($defaultOptions, $options);

        $wsdl = 'https://ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/Auth?wsdl';
        if ($envTest) {
            $wsdl = 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/Auth?wsdl';
        }

        return new Auth($options, $wsdl);
    }
}
