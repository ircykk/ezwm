<?php

include __DIR__ . '/../vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();

$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/Auth?wsdl',
        'outputDir' => __DIR__ . '/../src/Ircykk/Ezwm/Auth',
        'namespaceName' => 'Ircykk\Ezwm\Auth'
    ))
);

$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://test-ezwm.nfz.gov.pl/ws-broker-server-ezlec/services/ServiceBroker?wsdl',
        'outputDir' => __DIR__ . '/../src/Ircykk/Ezwm/ServiceBroker',
        'namespaceName' => 'Ircykk\Ezwm\ServiceBroker'
    ))
);
