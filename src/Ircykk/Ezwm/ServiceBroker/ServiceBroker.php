<?php

namespace Ircykk\Ezwm\ServiceBroker;

class ServiceBroker extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
      'AuthorizationException' => 'Ircykk\\Ezwm\\ServiceBroker\\AuthorizationException',
      'AuthenticationException' => 'Ircykk\\Ezwm\\ServiceBroker\\AuthenticationException',
      'ServiceException' => 'Ircykk\\Ezwm\\ServiceBroker\\ServiceException',
      'PassExpiredException' => 'Ircykk\\Ezwm\\ServiceBroker\\PassExpiredException',
      'AuthTokenException' => 'Ircykk\\Ezwm\\ServiceBroker\\AuthTokenException',
      'ServerException' => 'Ircykk\\Ezwm\\ServiceBroker\\ServerException',
      'InputException' => 'Ircykk\\Ezwm\\ServiceBroker\\InputException',
      'SessionException' => 'Ircykk\\Ezwm\\ServiceBroker\\SessionException',
      'ArrayOfMessage' => 'Ircykk\\Ezwm\\ServiceBroker\\ArrayOfMessage',
      'BaseException' => 'Ircykk\\Ezwm\\ServiceBroker\\BaseException',
      'ServiceLocation' => 'Ircykk\\Ezwm\\ServiceBroker\\ServiceLocation',
      'authToken' => 'Ircykk\\Ezwm\\ServiceBroker\\authToken',
      'session' => 'Ircykk\\Ezwm\\ServiceBroker\\session',
      'base64Binary' => 'Ircykk\\Ezwm\\ServiceBroker\\base64Binary',
      'hexBinary' => 'Ircykk\\Ezwm\\ServiceBroker\\hexBinary',
      'ServiceResponse' => 'Ircykk\\Ezwm\\ServiceBroker\\ServiceResponse',
      'ServiceRequest' => 'Ircykk\\Ezwm\\ServiceBroker\\ServiceRequest',
      'Service' => 'Ircykk\\Ezwm\\ServiceBroker\\Service',
      'Payload' => 'Ircykk\\Ezwm\\ServiceBroker\\Payload',
      'textload' => 'Ircykk\\Ezwm\\ServiceBroker\\textload',
      'streamload' => 'Ircykk\\Ezwm\\ServiceBroker\\streamload',
      'Param' => 'Ircykk\\Ezwm\\ServiceBroker\\Param',
      'ArrayOfParam' => 'Ircykk\\Ezwm\\ServiceBroker\\ArrayOfParam',
    ];

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge([
      'features' => 1,
    ], $options);
        if (!$wsdl) {
            $wsdl = 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/ServiceBroker?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @return ServiceResponse
     */
    public function executeService(ServiceRequest $request)
    {
        return $this->__soapCall('executeService', [$request]);
    }
}
