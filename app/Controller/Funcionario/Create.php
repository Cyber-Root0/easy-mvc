<?php
namespace CyberRoot0\EasyMVC\Controller\Funcionario;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Funcionario\Model as FuncionarioModel;
use CyberRoot0\EasyMVC\Repository\Funcionario\Entity;
class Create extends Action
{
    public function __construct(
        protected Template $view,
        private FuncionarioModel $funcionario

    ) {

    }
    public function execute(array $params): string
    {
        if ($this->isPost()){
            $data = $this->getParams();
            $funcionario = new Entity();
            $funcionario->nome = $data->nome;
            $funcionario->cargo = $data->cargo;
            $funcionario->salario = (float) $data->salario;
            $this->funcionario->create($funcionario);
            $this->redirect('/funcionarios/');
        }
        return $this->view->render('funcionario/create');
    }
}