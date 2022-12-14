<?php

namespace Webjump\GlobalMessages\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class GlobalMessage extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'global_messages_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('global_messages', 'entity_id');
        $this->_useIsObjectNew = true;
    }
}
