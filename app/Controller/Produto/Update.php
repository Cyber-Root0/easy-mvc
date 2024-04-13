<?php
namespace CyberRoot0\EasyMVC\Controller\Produto;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Produto\Model as ProdutoModel;
use CyberRoot0\EasyMVC\Repository\Produto\Entity;
class Update extends Action
{
    public function __construct(
        protected Template $view,
        private ProdutoModel $produto

    ) {
    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        $produto = $this->produto->get($id);
        if ($this->isPost()){
            $data = $this->getParams();
            $produto = new Entity();
            $produto->id = $data->id;
            $produto->nome = $data->nome;
            $produto->descricao = $data->descricao;
            $produto->valor = (float) $data->valor;
            $this->produto->update($produto);
            $this->redirect('/produtos/');
            return '';
        }
        if (!empty($produto)){
            return $this->view->render('produtos/update', $produto);
        }
        return '';
    }
}