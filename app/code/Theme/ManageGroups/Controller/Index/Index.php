<?php

namespace Theme\ManageGroups\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

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
	    $this->_view->loadLayout();
	    $this->_view->getLayout()->initMessages();
	    $this->_view->renderLayout();
	 //    $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		// $storeManager = $objectManager->get('Magento\Store\Model\StoreManagerInterface');
		// $currentStore = $storeManager->getStore();

	 //    switch ($currentStore) {
	 //    	case 'value':
	 //    		# code...
	 //    		break;
	    	
	 //    	default:
	 //    		# code...
	 //    		break;
	 //    }
	    // $resultPage = $this->_resultPageFactory->create();
     //    $resultPage->addHandle('dashboard_index_indexer'); //loads the layout of module_custom_customlayout.xml file with its name
     //    return $resultPage;
    }
}