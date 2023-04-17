<?php
namespace Embitelbng\Sample\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Embitelbng\Sample\Model\ResourceModel\Test');
    }
}
