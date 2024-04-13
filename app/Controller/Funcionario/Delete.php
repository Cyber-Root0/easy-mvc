<?php
namespace CyberRoot0\EasyMVC\Controller\Funcionario;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Funcionario\Model as FuncionarioModel;
class Delete extends Action
{
    public function __construct(
        protected Template $view,
        private FuncionarioModel $funcionario

    ) {

    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        if (!empty($this->funcionario->get($id))){
            $this->funcionario->delete($id);
        }
        $this->redirect('/funcionarios/');
        return '';
    }
}