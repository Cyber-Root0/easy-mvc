<?php
namespace CyberRoot0\EasyMVC\Controller\Funcionario;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Funcionario\Model as FuncionarioModel;
class Index extends Action
{
    public function __construct(
        protected Template $view,
        private FuncionarioModel $funcionario

    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render('funcionario/index', $this->funcionario->getAll());
    }
}