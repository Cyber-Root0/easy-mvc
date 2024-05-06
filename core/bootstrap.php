<?php
$start = microtime(true);

use DI\Container;
use EasyMVC\Http\Router;
use EasyMVC\DI\ObjectManager;
use CR0\Interceptor\Kernel;
/* DI Configuration */
$containerDinition = require(__DIR__.'/../config/di/container.php');
/* Interceptor Config */
$kernel = Kernel::getInstance($containerDinition);
/* Aspect Definition */
(require(__DIR__.'/../config/di/proxy/aspect.php'));
$container = $kernel->build();
/* Exception Error Handler */
ini_set('display_errors', 1);
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
// Calculate the execution time
$end = microtime(true);
$executionTime = $end - $start;

// Output the result
echo "Script execution time: " . $executionTime . " seconds";
