<?php
namespace CyberRoot0\EasyMVC\Controller\Clientes;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Clientes\Model as ClientModel;
class Delete extends Action
{
    public function __construct(
        protected Template $view,
        private ClientModel $cliente

    ) {

    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        if (!empty($this->cliente->get($id))){
            $this->cliente->delete($id);
        }
        $this->redirect('/clientes/');
        return '';
    }
}