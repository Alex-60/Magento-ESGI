<?php

class Learning_Marque_Block_Adminhtml_Marque_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form implements Mage_Adminhtml_Block_Widget_Tab_Interface
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('marque_form', array('legend' => Mage::helper('learning_marque')->__('Marque information')));
        $fieldset->addType('image', 'Learning_Marque_Block_Adminhtml_Form_Renderer_Image');
        $fieldset->addField('name', 'text', array(
            'label'    => Mage::helper('learning_marque')->__('Name'),
            'name'     => 'name',
            'class'    => 'required-entry',
            'required' => true
        ));

        $fieldset->addField('image_url', 'image', array(
            'label'     => Mage::helper('learning_marque')->__('Image'),
            'required'  => false,
            'name'      => 'image_url',
            'directory' => 'marque/'
        ));

        $fieldset->addField('is_active', 'select', array(
            'label'    => Mage::helper('learning_marque')->__('Status'),
            'name'     => 'is_active',
            'class'    => 'required-entry',
            'values'   => Mage::getSingleton('adminhtml/system_config_source_enabledisable')->toOptionArray(),
            'required' => true
        ));

        $fieldset->addField('position', 'text', array(
            'label'    => Mage::helper('learning_marque')->__('Position'),
            'class'    => 'validate-number',
            'name'     => 'position',
            'required' => true,
            'value'    => 0
        ));

        if (Mage::getSingleton('adminhtml/session')->getMarqueData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getMarqueData());
            Mage::getSingleton('adminhtml/session')->getMarqueData(null);
        } elseif (Mage::registry('marque_data')) {
            $form->setValues(Mage::registry('marque_data')->getData());
        }

        return parent::_prepareForm();
    }

    public function getTabLabel()
    {
        return Mage::helper('learning_marque')->__('Marque Information');
    }

    public function getTabTitle()
    {
        return Mage::helper('learning_marque')->__('Marque Information');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }
}
