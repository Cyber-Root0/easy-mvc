<?php
namespace CyberRoot0\EasyMVC\Controller\Produto;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Produto\Model as ProdutoModel;
class Delete extends Action
{
    public function __construct(
        protected Template $view,
        private ProdutoModel $produto

    ) {

    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        if (!empty($this->produto->get($id))){
            $this->produto->delete($id);
        }
        $this->redirect('/produtos/');
        return '';
    }
}