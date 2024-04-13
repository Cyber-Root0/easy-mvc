<?php
namespace CyberRoot0\EasyMVC\Controller\Seller;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Seller\Model as SellerModel;
class Index extends Action
{
    public function __construct(
        protected Template $view,
        private SellerModel $seller

    ) {

    }
    public function execute(array $params): string
    {
        return $this->view->render('seller/index', $this->seller->getAll());
    }
}