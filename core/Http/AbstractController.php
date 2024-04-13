<?php
namespace EasyMVC\Http;
use EasyMVC\Api\ControllerInterface;
abstract class AbstractController implements ControllerInterface
{
    abstract public function execute(array $params): string;
    
}