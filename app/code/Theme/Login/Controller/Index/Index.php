<?php

namespace Theme\Login\Controller\Index;

use Magento\Framework\App\Action\Context;


class Index extends \Magento\Framework\App\Action\Action
{
	protected $_resultPageFactory;

    public function __construct(Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {

        // $this->_view->loadLayout();
        // $this->_view->getLayout()->initMessages();
        // $resultPage->getConfig()->getTitle()->set('FAQ');
        // $this->_view->renderLayout();
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Login');
        return $resultPage;
    }
}