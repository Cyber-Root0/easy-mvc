<?php
namespace CyberRoot0\EasyMVC\Controller\Funcionario;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Funcionario\Model as FuncionarioModel;
use CyberRoot0\EasyMVC\Repository\Funcionario\Entity;
class Update extends Action
{
    public function __construct(
        protected Template $view,
        private FuncionarioModel $funcionario

    ) {
    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        $funcionario = $this->funcionario->get($id);
        if ($this->isPost()){
            $data = $this->getParams();
            $funcionario = new Entity();
            $funcionario->id = (int) $data->id;
            $funcionario->nome = $data->nome;
            $funcionario->cargo = $data->cargo;
            $funcionario->salario = (float) $data->salario;
            $this->funcionario->update($funcionario);
            $this->redirect('/funcionarios/');
            return '';
        }
        if (!empty($funcionario)){
            return $this->view->render('funcionario/update', $funcionario);
        }
        return '';
    }
}