<?php
namespace EstebanBocic\Test\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('EstebanBocic\Test\Model\Banner', 'EstebanBocic\Test\Model\ResourceModel\Banner');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>