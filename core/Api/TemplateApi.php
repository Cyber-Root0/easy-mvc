<?php
namespace EasyMvc\Api;
interface TemplateApi
{    
    /**
     * Controlle Execute
     *
     * @param string $view
     * @param  array $params
     * @return string
     */
    public function render(string $view, array $params) : string;
}
