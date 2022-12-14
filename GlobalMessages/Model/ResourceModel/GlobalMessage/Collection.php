<?php

namespace Webjump\GlobalMessages\Model\ResourceModel\GlobalMessage;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Webjump\GlobalMessages\Model\GlobalMessage as Model;
use Webjump\GlobalMessages\Model\ResourceModel\GlobalMessage as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'global_messages_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
