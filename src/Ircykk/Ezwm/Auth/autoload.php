<?php

 function autoload_fb242924d549cfb6a35ecca641d7d09d($class)
 {
     $classes = [
        'Ircykk\Ezwm\Auth\Auth' => __DIR__.'/Auth.php',
        'Ircykk\Ezwm\Auth\AuthorizationException' => __DIR__.'/AuthorizationException.php',
        'Ircykk\Ezwm\Auth\AuthenticationException' => __DIR__.'/AuthenticationException.php',
        'Ircykk\Ezwm\Auth\ServiceException' => __DIR__.'/ServiceException.php',
        'Ircykk\Ezwm\Auth\PassExpiredException' => __DIR__.'/PassExpiredException.php',
        'Ircykk\Ezwm\Auth\AuthTokenException' => __DIR__.'/AuthTokenException.php',
        'Ircykk\Ezwm\Auth\ServerException' => __DIR__.'/ServerException.php',
        'Ircykk\Ezwm\Auth\InputException' => __DIR__.'/InputException.php',
        'Ircykk\Ezwm\Auth\SessionException' => __DIR__.'/SessionException.php',
        'Ircykk\Ezwm\Auth\ArrayOfMessage' => __DIR__.'/ArrayOfMessage.php',
        'Ircykk\Ezwm\Auth\BaseException' => __DIR__.'/BaseException.php',
        'Ircykk\Ezwm\Auth\ServiceLocation' => __DIR__.'/ServiceLocation.php',
        'Ircykk\Ezwm\Auth\authToken' => __DIR__.'/authToken.php',
        'Ircykk\Ezwm\Auth\session' => __DIR__.'/session.php',
        'Ircykk\Ezwm\Auth\loginRequest' => __DIR__.'/loginRequest.php',
        'Ircykk\Ezwm\Auth\loginParam' => __DIR__.'/loginParam.php',
        'Ircykk\Ezwm\Auth\loginParams' => __DIR__.'/loginParams.php',
        'Ircykk\Ezwm\Auth\changePasswordParams' => __DIR__.'/changePasswordParams.php',
        'Ircykk\Ezwm\Auth\paramValue' => __DIR__.'/paramValue.php',
        'Ircykk\Ezwm\Auth\anyValue' => __DIR__.'/anyValue.php',
    ];
     if (!empty($classes[$class])) {
         include $classes[$class];
     }
 }

spl_autoload_register('autoload_fb242924d549cfb6a35ecca641d7d09d');

// Do nothing. The rest is just leftovers from the code generation.
