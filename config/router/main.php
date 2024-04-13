<?php
use CyberRoot0\EasyMVC\Controller\Main;
use CyberRoot0\EasyMVC\Controller\Clientes\{
    Index as ClienteIndex,
    Create as ClienteCreate,
    Update as ClienteUpdate,
    Delete as ClientDelete
};
use CyberRoot0\EasyMVC\Controller\Seller\{
    Index as SellerIndex,
    Create as SellerCreate,
    Update as SellerUpdate,
    Delete as SellerDelete
};
use CyberRoot0\EasyMVC\Controller\Funcionario\{
    Index as IndexFunc, 
    Create as CreateFunc, 
    Update as UpdatFunc, 
    Delete as DelFunc
};
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
    '/seller/update/{id}' => SellerUpdate::class,
    /* Funcionario Routes */
    '/funcionarios/' => IndexFunc::class,
    '/funcionarios/delete/{id}' => DelFunc::class,
    '/funcionarios/create/' => CreateFunc::class,
    '/funcionarios/update/{id}' => UpdatFunc::class,
];

/* Process route and return action  */
foreach($routes as $path => $action){
    $routeManager->get($path, $action);
    $routeManager->post($path, $action);
}
return $routeManager->handler();