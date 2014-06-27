<?php
namespace Magentozend\Hello\Controller;
class Index extends \Magento\Framework\App\Action\Action
{
    public function indexAction()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}