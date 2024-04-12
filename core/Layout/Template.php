<?php
namespace EasyMvc\Layout;
use EasyMvc\Api\TemplateApi;
class Template implements TemplateApi
{
    public function __construct(
        protected string $pathview
    ){

    }
    public function render(string $view, array $params): string{
        
        return '';
    }
}