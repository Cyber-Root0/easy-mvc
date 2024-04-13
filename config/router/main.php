<?php
use CyberRoot0\EasyMVC\Controller\Main;
use CyberRoot0\EasyMVC\Controller\Clientes\Index as ClienteIndex;
use CyberRoot0\EasyMVC\Controller\Clientes\Delete as ClientDelete;
use CyberRoot0\EasyMVC\Controller\Clientes\Create as ClienteCreate;
use CyberRoot0\EasyMVC\Controller\Clientes\Update as ClienteUpdate;
$routes = [
    '/' => Main::class,
    /* Cliente Routes */
    '/clientes/' => ClienteIndex::class,
    '/clientes/delete/{id}' => ClientDelete::class,
    '/clientes/create/' => ClienteCreate::class,
    '/clientes/update/{id}' => ClienteUpdate::class
    /* Product Routes */
];

/* Process route and return action  */
foreach($routes as $path => $action){
    $routeManager->get($path, $action);
    $routeManager->post($path, $action);
}
return $routeManager->handler();