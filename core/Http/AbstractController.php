<?php
namespace EasyMvc\Http;
use EasyMvc\Api\ControllerInterface;
abstract class AbstractController implements ControllerInterface
{
    abstract public function execute(array $params): string;
    
}