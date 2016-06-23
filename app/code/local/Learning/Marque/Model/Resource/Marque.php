<?php
class Learning_Marque_Model_Resource_Marque extends Mage_Core_Model_Resource_Db_Abstract{

    /**
     * Magento class constructor
     */
    protected function _construct(){
        $this->_init('learning_marque/marque', 'entity_id');
    }

}