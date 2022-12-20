<?php

namespace Webjump\GlobalMessages\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Webjump\GlobalMessages\Model\ResourceModel\GlobalMessage;
use Webjump\GlobalMessages\Model\GlobalMessage as GlobalMessageRepository;

class Save extends Action implements HttpPostActionInterface
{
    public function __construct(
        Context $context,
        private GlobalMessage $gmResourceModel,
        private GlobalMessageRepository $gmRepo
    )
    {
        parent::__construct($context);
    }

    /**
     * @inheritdoc
     */
    public function execute(): void
    {
        $globalMessage = $this->gmRepo;
        $postData = $this->getRequest()->getPostValue();
        $globalMessage->setData('message',$postData['message']);
        $globalMessage->setData('color_background',$postData['color_background']);
        $globalMessage->setData('color_text',$postData['color_text']);
        $globalMessage->setData('is_active',intval($postData['is_active']));
        $this->gmResourceModel->save($globalMessage);
        $this->_redirect('*');
        return;
    }
}
