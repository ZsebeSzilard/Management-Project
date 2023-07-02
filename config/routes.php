<?php

use App\Controller\HomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;

return function (RoutingConfigurator $routes) {
    $routes->add('home', '/')
        ->controller(TemplateController::class)
        ->defaults([
            'template' => 'pages/homepage/home_page.html.twig',
            'statusCode' => 200,
            'maxAge' =>86400,
            'sharedAge' => 86400,
        ])
        ->methods(['GET']);

    $routes->add('homepage', '/home')
        ->controller([HomeController::class, 'homePage'])
        ->methods(['GET']);
};
