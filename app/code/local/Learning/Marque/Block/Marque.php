<?php

class Learning_Marque_Block_Marque extends Mage_Core_Block_Template{

    public function getMarques(){
        $marques = Mage::getModel('learning_marque/marque')
            ->getCollection()
            ->addIsActiveFilter()
            ->addOrderByPosition();
        return $marques;
    }

}