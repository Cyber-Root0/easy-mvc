<?php
namespace CyberRoot0\EasyMVC\Controller\Seller;
use EasyMVC\Http\Action;
use EasyMVC\Layout\Template;
use CyberRoot0\EasyMVC\Repository\Seller\Model as Seller;
class Delete extends Action
{
    public function __construct(
        protected Template $view,
        private Seller $seller

    ) {

    }
    public function execute(array $params): string
    {
        $id = (int) $params[1];
        if (!empty($this->seller->get($id))){
            $this->seller->delete($id);
        }
        $this->redirect('/seller/');
        return '';
    }
}