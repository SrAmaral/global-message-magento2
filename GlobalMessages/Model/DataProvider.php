<?php

namespace Webjump\GlobalMessages\Model;

use Magento\Ui\DataProvider\AbstractDataProvider;

use Webjump\GlobalMessages\Model\ResourceModel\GlobalMessage\CollectionFactory;

class DataProvider extends AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $messagesCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $messagesCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $messagesCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        return [];
    }
}
