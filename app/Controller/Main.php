<?php
namespace CyberRoot0\EasyMVC\Controller;

use EasyMVC\Api\ControllerInterface;
use EasyMVC\Http\AbstractController;
use EasyMVC\Layout\Template;

class Main extends AbstractController implements ControllerInterface
{
    public function __construct(
        protected Template $view
    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render(
            'example', [
                'name' => 'World'
            ]
        );
    }
}