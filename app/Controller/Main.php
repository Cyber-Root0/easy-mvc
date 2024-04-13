<?php
namespace CyberRoot0\EasyMVC\Controller;

use EasyMVC\Api\ControllerInterface;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;

class Main extends Action
{
    public function __construct(
        protected Template $view
    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render('index', []);
    }
}