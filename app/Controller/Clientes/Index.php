<?php
namespace CyberRoot0\EasyMVC\Controller\Clientes;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Clientes\Model as ClientModel;
class Index extends Action
{
    public function __construct(
        protected Template $view,
        private ClientModel $cliente

    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render('clientes/index', $this->cliente->getAll());
    }
}