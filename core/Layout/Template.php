<?php
namespace EasyMvc\Layout;
use EasyMvc\Api\TemplateApi;
class Template implements TemplateApi
{    
    private string $ext = '.phtml';
    /**
     * __construct
     *
     * @param  string $pathview
     * @return void
     */
    public function __construct(
        protected string $pathview
    ){
    }    
    /**
     * render
     *
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render(string $view, array $out = []): string{
        ob_start();
        require_once(
            $this->pathview.$view.$this->ext
        );
        $output = ob_get_contents();
        ob_get_clean();
        return $output;
    }
}