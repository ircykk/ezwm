<?php

namespace Ircykk\Ezwm\AuthService;

use Exception;
use Ircykk\Ezwm\Auth\loginParam;
use Ircykk\Ezwm\Auth\loginParams;
use Ircykk\Ezwm\Auth\loginRequest;
use Ircykk\Ezwm\Auth\paramValue;
use SoapClient;

class AuthService
{
    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var SoapClient
     */
    private $authClient;

    public function __construct(Credentials $credentials, $authClient)
    {
        $this->credentials = $credentials;
        $this->authClient = $authClient;
    }

    /**
     * @return array
     *
     * @throws Exception
     */
    public function createSession()
    {
        $loginParamsArray = [
            new loginParam('domain', new paramValue($this->credentials->getDomain(), null)),
            new loginParam('type', new paramValue($this->credentials->getType(), null)),
            new loginParam('idntSwd', new paramValue($this->credentials->getOperatorId(), null)),
            new loginParam('login', new paramValue($this->credentials->getLogin(), null)),
        ];
        $loginParams = new loginParams($loginParamsArray);
        $loginRequest = new loginRequest($loginParams, $this->credentials->getPassword());

        $loginResponse = $this->authClient->login($loginRequest, $outputHeaders);

        return $this->dispatchResponse($loginResponse, $outputHeaders);
    }

    /**
     * @param $loginResponse
     * @param $outputHeaders
     *
     * @return array
     *
     * @throws Exception
     */
    private function dispatchResponse($loginResponse, $outputHeaders)
    {
        if (empty($outputHeaders['session']) || empty($outputHeaders['authToken'])) {
            throw new Exception(sprintf('Unable to login [%s]', $loginResponse));
        }

        return $outputHeaders;
    }
}
