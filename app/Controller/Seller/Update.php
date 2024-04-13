<?php
namespace CyberRoot0\EasyMVC\Controller\Seller;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Seller\Model as SellerModel;
use CyberRoot0\EasyMVC\Repository\Seller\Entity;
class Update extends Action
{
    public function __construct(
        protected Template $view,
        private SellerModel $seller

    ) {
    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        $seller = $this->seller->get($id);
        if ($this->isPost()){
            $data = $this->getParams();
            $seller = new Entity();
            $seller->id = (int) $data->id;
            $seller->nome = $data->nome;
            $seller->contato = $data->contato;
            $seller->email = $data->email;
            $this->seller->update($seller);
            $this->redirect('/seller/');
            return '';
        }
        if (!empty($seller)){
            return $this->view->render('seller/update', $seller);
        }
        return '';
    }
}