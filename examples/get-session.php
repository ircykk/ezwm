<?php

use Ircykk\Ezwm\Auth\authToken;
use Ircykk\Ezwm\Auth\session;
use Ircykk\Ezwm\AuthService\AuthClientFactory;
use Ircykk\Ezwm\AuthService\AuthService;
use Ircykk\Ezwm\AuthService\Credentials;

include_once __DIR__.'/../vendor/autoload.php';

const EZWM_ENV_TEST = false;
const EZWM_SOAP_TRACE = false;

// credentials
$login = '*********';
$password = '********';
$operatorId = '***/******';
$domain = '**';
$type = '***';

// create credentials object
$credentials = new Credentials(
    $login,
    $password,
    $operatorId,
    $domain,
    $type
);

$authClientFactory = new AuthClientFactory();
$authClient = $authClientFactory->build(EZWM_ENV_TEST);
$authService = new AuthService($credentials, $authClient);

try {
    $sessionResponse = $authService->createSession();

    /** @var session $session */
    $session = $sessionResponse['session'];
    /** @var authToken $authToken */
    $authToken = $sessionResponse['authToken'];

    $sessionId = $session->getId();
    $authTokenId = $authToken->getId();

    echo "Session ID: $sessionId; Auth Token ID: $authTokenId";
} catch (Exception $e) {
    echo html_entity_decode($e->getMessage());
}
