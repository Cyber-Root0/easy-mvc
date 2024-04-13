<?php
namespace CyberRoot0\EasyMVC\Controller\Seller;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Seller\Model as SellerModel;
use CyberRoot0\EasyMVC\Repository\Seller\Entity;
class Create extends Action
{
    public function __construct(
        protected Template $view,
        private SellerModel $seller

    ) {

    }
    public function execute(array $params): string
    {
        if ($this->isPost()){
            $data = $this->getParams();
            $seller = new Entity();
            $seller->nome = $data->nome;
            $seller->contato = $data->contato;
            $seller->email = $data->email;
            $this->seller->create($seller);
            $this->redirect('/seller/');
        }
        return $this->view->render('seller/create');
    }
}