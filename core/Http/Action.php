<?php
namespace EasyMVC\Http;
use EasyMVC\Api\ControllerInterface;
abstract class Action implements ControllerInterface
{
    abstract public function execute(array $params): string;
    
}