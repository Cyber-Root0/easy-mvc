<?php
namespace CyberRoot0\EasyMVC\Controller\Clientes;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Clientes\Model as ClientModel;
use CyberRoot0\EasyMVC\Repository\Clientes\Entity;
class Create extends Action
{
    public function __construct(
        protected Template $view,
        private ClientModel $cliente

    ) {

    }
    public function execute(array $params): string
    {
        if ($this->isPost()){
            $data = $this->getParams();
            $cliente = new Entity();
            $cliente->idade = (int) $data->idade;
            $cliente->nome = $data->nome;
            $cliente->sobrenome = $data->sobrenome;
            $this->cliente->create($cliente);
            $this->redirect('/clientes/');
        }
        return $this->view->render('clientes/create');
    }
}