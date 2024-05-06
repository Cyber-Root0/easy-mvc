<?php
namespace CyberRoot0\EasyMVC\Aspect;
use CyberRoot0\EasyMVC\Controller\Main;
class EventController
{    
    /**
     * beforeExecute
     *
     * @param Main $subject
     * @param array $params
     * @return array
     */
    public function beforeExecute(Main $subject, array $params) : array{
        return [
            $params
        ];
    }
}