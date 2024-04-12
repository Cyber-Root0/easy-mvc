<?php
namespace EasyMvc\Api;
interface ControllerInterface
{    
    /**
     * Controlle Execute
     *
     * @param  array $params
     * @return string
     */
    public function execute(array $params) : string;
}
