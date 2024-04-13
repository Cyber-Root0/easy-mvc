<?php
use DI\Container;
use EasyMVC\Http\Router;
use EasyMVC\DI\ObjectManager;
/* DI Configuration */
$containerDinition = require(__DIR__.'/../config/di/container.php');
$container = new Container($containerDinition);
ObjectManager::set($container);
/* Exception Error Handler */
ini_set('display_errors', 0);
/* Handler Routes */
try{
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $routeManager = new Router($method, $path);
    $controllerClass = require(__DIR__.'/../config/router/main.php');
    if ($controllerClass!= null){
        $action = $container->get($controllerClass);
        $output = $action->execute($routeManager->getParams());
        echo $output;
    }else{
        require_once(__DIR__.'/view/404.html');
    }
}catch(\Exception $e){
    echo $e->getMessage();
}

