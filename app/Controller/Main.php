<?php
namespace CyberRoot0\EasyMvc\Controller;
use EasyMvc\Api\ControllerInterface;
use EasyMvc\Http\AbstractController;
use EasyMvc\Layout\Template;
class Main extends AbstractController implements ControllerInterface
{
    public function __construct(
        protected Template $view
    ){

    }
    public function execute(array $params) : string{
        return $this->view->render(
            'example',
            array(
                'name' => 'World :)'
            )
            );
    }
}