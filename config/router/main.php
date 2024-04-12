<?php
use CyberRoot0\EasyMvc\Controller\Main;
$routes = [
    '/' => Main::class,
    '/teste' => Main::class
];

/* Process route and return action  */
foreach($routes as $path => $action){
    $routeManager->get($path, $action);
    $routeManager->post($path, $action);
}
return $routeManager->handler();