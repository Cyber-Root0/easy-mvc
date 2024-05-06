<?php
namespace EasyMVC\DI;
use CR0\Interceptor\DI\Config\Container;
class ObjectManager
{   
    /**
     * provide object from DI container
     *
     * @param  string $classname
     * @return object
     */
    public static function getInstance(string $classname){
        return Container::get()->get($classname);
    }
}