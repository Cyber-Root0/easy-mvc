<?php
namespace CyberRoot0\EasyMVC\Controller\Produto;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Produto\Model as ProdutoModel;
use CyberRoot0\EasyMVC\Repository\Produto\Entity;
class Create extends Action
{
    public function __construct(
        protected Template $view,
        private ProdutoModel $produto

    ) {

    }
    public function execute(array $params): string
    {
        if ($this->isPost()){
            $data = $this->getParams();
            $produto = new Entity();
            $produto->nome = $data->nome;
            $produto->descricao = $data->descricao;
            $produto->valor = (float) $data->valor;
            $this->produto->create($produto);
            $this->redirect('/produtos/');
        }
        return $this->view->render('produtos/create');
    }
}