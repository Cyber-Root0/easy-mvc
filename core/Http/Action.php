<?php
namespace EasyMVC\Http;
use EasyMVC\Api\ControllerInterface;
abstract class Action implements ControllerInterface
{
    abstract public function execute(array $params): string;
    protected function redirect(string $path){
        header('Location: '.$path);
    }
    protected function isPost() : bool{
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }    
    /**
     * getParams
     *
     * @return void
     */
    protected function getParams() : object{
        return (object) $_REQUEST;
    }   
}