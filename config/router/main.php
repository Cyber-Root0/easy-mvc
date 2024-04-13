<?php
use CyberRoot0\EasyMVC\Controller\Main;
use CyberRoot0\EasyMVC\Controller\Clientes\Index as ClienteIndex;
use CyberRoot0\EasyMVC\Controller\Clientes\Delete as ClientDelete;
use CyberRoot0\EasyMVC\Controller\Clientes\Create as ClienteCreate;
use CyberRoot0\EasyMVC\Controller\Clientes\Update as ClienteUpdate;
use CyberRoot0\EasyMVC\Controller\Seller\Index as SellerIndex;
use CyberRoot0\EasyMVC\Controller\Seller\Create as SellerCreate;
use CyberRoot0\EasyMVC\Controller\Seller\Update as SellerUpdate;
use CyberRoot0\EasyMVC\Controller\Seller\Delete as SellerDelete;
$routes = [
    '/' => Main::class,
    /* Cliente Routes */
    '/clientes/' => ClienteIndex::class,
    '/clientes/delete/{id}' => ClientDelete::class,
    '/clientes/create/' => ClienteCreate::class,
    '/clientes/update/{id}' => ClienteUpdate::class,
    /* Seller Routes */
    '/seller/' => SellerIndex::class,
    '/seller/delete/{id}' => SellerDelete::class,
    '/seller/create/' => SellerCreate::class,
    '/seller/update/{id}' => SellerUpdate::class
];

/* Process route and return action  */
foreach($routes as $path => $action){
    $routeManager->get($path, $action);
    $routeManager->post($path, $action);
}
return $routeManager->handler();