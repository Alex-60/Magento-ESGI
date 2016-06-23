<?php

class Learning_Marque_Block_Adminhtml_Marque_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->_objectId   = 'id';
        $this->_blockGroup = 'learning_marque';
        $this->_controller = 'adminhtml_marque';

        $this->_updateButton('save', 'label', Mage::helper('learning_marque')->__('Save Marque'));
        $this->_updateButton('delete', 'label', Mage::helper('learning_marque')->__('Delete Marque'));
        $this->_removeButton('reset');

        $this->_addButton('saveandcontinue', array(
            'label'   => Mage::helper('learning_marque')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save',
        ), -100);

        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('marque_data') && Mage::registry('marque_data')->getId()) {
            return Mage::helper('learning_marque')->__("Edit Marque '%s'", Mage::registry('marque_data')->getName());
        } else {
            return Mage::helper('learning_marque')->__('Add Marque');
        }
    }
}
