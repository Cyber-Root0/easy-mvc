<?php
namespace EasyMvc\DI;
class ObjectManager
{
    private static $container = null;    
    /**
     * set unic di container object
     *
     * @param  object $container
     * @return void
     */
    public static function set($container){
        if (self::$container == null){
            self::$container = $container;
        }
    }    
    /**
     * provide object from DI container
     *
     * @param  string $classname
     * @return object
     */
    public static function getInstance(string $classname){
        return self::$container->get($classname);
    }
}