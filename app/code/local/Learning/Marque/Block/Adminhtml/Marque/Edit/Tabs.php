<?php

class Learning_Marque_Block_Adminhtml_Marque_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('marque_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('learning_marque')->__('Marque Information'));
    }
}
