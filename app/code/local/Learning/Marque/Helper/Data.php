<?php
class Learning_Marque_Helper_Data extends Mage_Core_Helper_Abstract{

    const IMAGE_FOLDER = "marque";

    /**
     * Renvoie l'URL de l'image
     * @param $filename
     * @return string
     */
    public function getImageUrl($filename)
    {
        return Mage::getBaseUrl('media') . self::IMAGE_FOLDER . '/' . $filename;
    }

}