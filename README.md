# EZWM api client 

Api client for NFZ EZWM service [ezwm.nfz.gov.pl](https://ezwm.nfz.gov.pl/ap-zz/user/zz/welcome@default), docs (PDF): [nfz.gov.pl](https://www.nfz.gov.pl/gfx/nfz/userfiles/_public/aktualnosci/aktualnosci_centrali/komunikaty_di/2018/specyfikacja_uslug_do_obslugi_zlecen_zaopatrzenia_w_wyroby_medyczne__v1.0.pdf).

This repo will not be often updated, but feel free to contribute.

## Installation

Via Composer:

`composer require ircykk/ezwm`

## Usage

Example how to create session (retrieve auth token and session id):
```php
<?php

use Ircykk\Ezwm\Auth\authToken;
use Ircykk\Ezwm\Auth\session;
use Ircykk\Ezwm\AuthService\AuthClientFactory;
use Ircykk\Ezwm\AuthService\AuthService;
use Ircykk\Ezwm\AuthService\Credentials;

include_once __DIR__.'/vendor/autoload.php';

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
```

## Building classes from wsdl/xsd

Repository contain prebuild classes, but you can build them yourself if you need.

### Generating Service classes from schemas

Generator will generate class from wsdl schema for namespace `Ircykk\Ezwm\ServiceBroker` and `Ircykk\Ezwm\Auth`.  

1. Install composer dependencies:  
`composer install`
2. Run generator  
`php bin/wsdl2php.php`

More details: https://github.com/wsdl2phpgenerator/wsdl2phpgenerator

### Generating Document classes from xsd schemas

Generator will generate class from xsd schema for namespace `Ircykk\Ezwm\Schema`.

1. Install composer dependencies:  
   `composer install`
2. Run generator  
   `bash bin/xsd2php.sh`
   
You can tweak generator config in `bin/config.yml`.  
More details: https://github.com/goetas-webservices/xsd2php

#### Fixes after build

Since session is returned in SOAP response headers we need to tweak `login` method in `Ircykk\Ezwm\Auth\AuthenticationService` class.
We need add `$outputHeaders` to params, so we can get session id from response headers.

```php
/**
 * @param loginRequest $request
 * @param null $outputHeaders
 * @return string
 */
public function login(loginRequest $request, &$outputHeaders = null)
{
   return $this->__soapCall('login', array($request), null, null, $outputHeaders);
}
```

