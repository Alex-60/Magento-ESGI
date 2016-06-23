<?php

class Learning_Marque_Block_Adminhtml_Marque extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller     = 'adminhtml_marque';
        $this->_blockGroup     = 'learning_marque';
        $this->_headerText     = Mage::helper('learning_marque')->__('Manage marque');
        $this->_addButtonLabel = Mage::helper('learning_marque')->__('Add marque');
        parent::__construct();
    }
}