<?php
namespace CyberRoot0\EasyMvc\Controller;
use EasyMvc\Api\ControllerInterface;
use EasyMvc\Http\AbstractController;
class Main extends AbstractController implements ControllerInterface
{
    public function __construct(){
        
    }
    public function execute(array $params) : string{
        return 'AAAAAAAAAAAAAAA';
    }
}