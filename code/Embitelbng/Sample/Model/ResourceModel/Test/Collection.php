<?php
namespace Embitelbng\Sample\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Embitelbng\Sample\Model\Test',
            'Embitelbng\Sample\Model\ResourceModel\Test'
        );
    }
}
