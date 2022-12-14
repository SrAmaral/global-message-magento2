<?php

namespace Webjump\GlobalMessages\Model;

use Magento\Framework\Model\AbstractModel;
use Webjump\GlobalMessages\Model\ResourceModel\GlobalMessage as ResourceModel;

class GlobalMessage extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'global_messages_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
