<?php

namespace EstebanBocic\Test\Model\Config;

class BannerGroups implements \Magento\Framework\Option\ArrayInterface
{

	 /**
     * @var \EstebanBocic\Test\Model\bannerFactory
     */
    protected $_bannerFactory;
    
     /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \EstebanBocic\Test\Model\bannerFactory $bannerFactory
     * @param \EstebanBocic\Test\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \EstebanBocic\Test\Model\BannerFactory $bannerFactory
    ) {
        $this->_bannerFactory = $bannerFactory;
    }
    
    
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    	$optionArray = array();
    	foreach($this->toArray() as $arr){
    		$optionArray[] = array( 'value' => $arr , 'label' => $arr);
    	}
        return $optionArray;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
    	$group = array();
    	$collection = $this->_bannerFactory->create()->getCollection();
    	
    	foreach($collection as $banner){
    		$group[$banner->getGroup()]  = $banner->getGroup();
    	}
        return $group;
    }
}