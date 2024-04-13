<?php
namespace CyberRoot0\EasyMVC\Controller\Clientes;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Clientes\Model as ClientModel;
use CyberRoot0\EasyMVC\Repository\Clientes\Entity;
class Update extends Action
{
    public function __construct(
        protected Template $view,
        private ClientModel $cliente

    ) {
    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        $cliente = $this->cliente->get($id);
        if ($this->isPost()){
            $data = $this->getParams();
            $cliente = new Entity();
            $cliente->id = (int) $data->id;
            $cliente->idade = (int) $data->idade;
            $cliente->nome = $data->nome;
            $cliente->sobrenome = $data->sobrenome;
            $this->cliente->update($cliente);
            $this->redirect('/clientes/');
            return '';
        }
        if (!empty($cliente)){
            return $this->view->render('clientes/update', $cliente);
        }
        return '';
    }
}