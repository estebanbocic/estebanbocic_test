<?php
namespace EstebanBocic\Test\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('EstebanBocic\Test\Model\ResourceModel\Banner');
    }
}
?>