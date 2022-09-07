<?php

namespace Ircykk\Ezwm\Auth;

class Auth extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
      'AuthorizationException' => 'Ircykk\\Ezwm\\Auth\\AuthorizationException',
      'AuthenticationException' => 'Ircykk\\Ezwm\\Auth\\AuthenticationException',
      'ServiceException' => 'Ircykk\\Ezwm\\Auth\\ServiceException',
      'PassExpiredException' => 'Ircykk\\Ezwm\\Auth\\PassExpiredException',
      'AuthTokenException' => 'Ircykk\\Ezwm\\Auth\\AuthTokenException',
      'ServerException' => 'Ircykk\\Ezwm\\Auth\\ServerException',
      'InputException' => 'Ircykk\\Ezwm\\Auth\\InputException',
      'SessionException' => 'Ircykk\\Ezwm\\Auth\\SessionException',
      'ArrayOfMessage' => 'Ircykk\\Ezwm\\Auth\\ArrayOfMessage',
      'BaseException' => 'Ircykk\\Ezwm\\Auth\\BaseException',
      'ServiceLocation' => 'Ircykk\\Ezwm\\Auth\\ServiceLocation',
      'authToken' => 'Ircykk\\Ezwm\\Auth\\authToken',
      'session' => 'Ircykk\\Ezwm\\Auth\\session',
      'loginRequest' => 'Ircykk\\Ezwm\\Auth\\loginRequest',
      'loginParam' => 'Ircykk\\Ezwm\\Auth\\loginParam',
      'loginParams' => 'Ircykk\\Ezwm\\Auth\\loginParams',
      'changePasswordParams' => 'Ircykk\\Ezwm\\Auth\\changePasswordParams',
      'paramValue' => 'Ircykk\\Ezwm\\Auth\\paramValue',
      'anyValue' => 'Ircykk\\Ezwm\\Auth\\anyValue',
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
            $wsdl = 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/Auth?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param null $outputHeaders
     *
     * @return string
     */
    public function login(loginRequest $request, &$outputHeaders = null)
    {
        return $this->__soapCall('login', [$request], null, null, $outputHeaders);
    }

    /**
     * @param string $request
     *
     * @return string
     */
    public function logout($request)
    {
        return $this->__soapCall('logout', [$request]);
    }

    /**
     * @return string
     */
    public function changePassword(changePasswordParams $request)
    {
        return $this->__soapCall('changePassword', [$request]);
    }

    /**
     * @return string
     */
    public function changePasswordLog(changePasswordParams $request)
    {
        return $this->__soapCall('changePasswordLog', [$request]);
    }
}
