<?php
namespace EstebanBocic\Test\Controller\Adminhtml\banner;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPagee;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('EstebanBocic_Test::banner');
        $resultPage->addBreadcrumb(__('EstebanBocic'), __('EstebanBocic'));
        $resultPage->addBreadcrumb(__('Manage Banner'), __('Manage Banner'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Banner'));

        return $resultPage;
    }
}
?>