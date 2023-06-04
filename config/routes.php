<?php

use App\Controller\HomepageController;
use App\Controller\LuckyController;
use App\Controller\UnluckyController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('lucky_number', '/lucky/number')
        ->controller([LuckyController::class, 'number'])
        ->methods(['GET', 'HEAD']);
    $routes->add('unlucky_number', '/unlucky/number')
        ->controller([UnluckyController::class, 'number'])
        ->methods(['POST']);

    $routes->add('homepage', '/')
        ->controller([HomepageController::class, 'homepage'])
        ->stateless();
    $routes->add('hello', '/hello/{name}')
        ->controller([HomepageController::class, 'hello'])
        ->defaults([
            'name' => "Raf",
        ]);

    $routes->import('../src/Controller/', 'annotation');

};
