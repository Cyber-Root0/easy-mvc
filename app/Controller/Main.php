<?php
namespace CyberRoot0\EasyMVC\Controller;

use EasyMVC\Api\ControllerInterface;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use EasyMVC\Api\ScopeConfig;

class Main extends Action implements ControllerInterface
{
    public function __construct(
        protected Template $view,
        protected ScopeConfig $scopeConfig
    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render(
            'example', [
                'name' => $this->scopeConfig->getValue('database.drivers.mysql.port')
            ]
        );
    }
}