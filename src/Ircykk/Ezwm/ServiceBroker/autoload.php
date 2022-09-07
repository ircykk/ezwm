<?php

 function autoload_c30602aeb561092ff10458c3522439eb($class)
 {
     $classes = [
        'Ircykk\Ezwm\ServiceBroker\ServiceBroker' => __DIR__.'/ServiceBroker.php',
        'Ircykk\Ezwm\ServiceBroker\AuthorizationException' => __DIR__.'/AuthorizationException.php',
        'Ircykk\Ezwm\ServiceBroker\AuthenticationException' => __DIR__.'/AuthenticationException.php',
        'Ircykk\Ezwm\ServiceBroker\ServiceException' => __DIR__.'/ServiceException.php',
        'Ircykk\Ezwm\ServiceBroker\PassExpiredException' => __DIR__.'/PassExpiredException.php',
        'Ircykk\Ezwm\ServiceBroker\AuthTokenException' => __DIR__.'/AuthTokenException.php',
        'Ircykk\Ezwm\ServiceBroker\ServerException' => __DIR__.'/ServerException.php',
        'Ircykk\Ezwm\ServiceBroker\InputException' => __DIR__.'/InputException.php',
        'Ircykk\Ezwm\ServiceBroker\SessionException' => __DIR__.'/SessionException.php',
        'Ircykk\Ezwm\ServiceBroker\ArrayOfMessage' => __DIR__.'/ArrayOfMessage.php',
        'Ircykk\Ezwm\ServiceBroker\BaseException' => __DIR__.'/BaseException.php',
        'Ircykk\Ezwm\ServiceBroker\ServiceLocation' => __DIR__.'/ServiceLocation.php',
        'Ircykk\Ezwm\ServiceBroker\authToken' => __DIR__.'/authToken.php',
        'Ircykk\Ezwm\ServiceBroker\session' => __DIR__.'/session.php',
        'Ircykk\Ezwm\ServiceBroker\base64Binary' => __DIR__.'/base64Binary.php',
        'Ircykk\Ezwm\ServiceBroker\hexBinary' => __DIR__.'/hexBinary.php',
        'Ircykk\Ezwm\ServiceBroker\ServiceResponse' => __DIR__.'/ServiceResponse.php',
        'Ircykk\Ezwm\ServiceBroker\ServiceRequest' => __DIR__.'/ServiceRequest.php',
        'Ircykk\Ezwm\ServiceBroker\Service' => __DIR__.'/Service.php',
        'Ircykk\Ezwm\ServiceBroker\Payload' => __DIR__.'/Payload.php',
        'Ircykk\Ezwm\ServiceBroker\textload' => __DIR__.'/textload.php',
        'Ircykk\Ezwm\ServiceBroker\streamload' => __DIR__.'/streamload.php',
        'Ircykk\Ezwm\ServiceBroker\Param' => __DIR__.'/Param.php',
        'Ircykk\Ezwm\ServiceBroker\ArrayOfParam' => __DIR__.'/ArrayOfParam.php',
    ];
     if (!empty($classes[$class])) {
         include $classes[$class];
     }
 }

spl_autoload_register('autoload_c30602aeb561092ff10458c3522439eb');

// Do nothing. The rest is just leftovers from the code generation.
