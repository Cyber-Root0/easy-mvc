<?php
namespace CyberRoot0\EasyMVC\Controller\Produto;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Produto\Model as ProdutoModel;
class Index extends Action
{
    public function __construct(
        protected Template $view,
        private ProdutoModel $produto

    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render('produtos/index', $this->produto->getAll());
    }
}