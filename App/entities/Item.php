<?php

namespace App\Entities;

class Item {

    private $id;
    private $name_en;
    private $name_fr;
    private $desc_en;
    private $desc_fr;
    private $ean;
    private $manu_id;
    private $cat_id;

    function getId() {
        return $this->id;
    }

    function getName($lang = 'fr') {
        if ($lang === 'fr') {
            return $this->name_fr;
        } else {
            return $this->name_en;
        }
    }

    function getDesc($lang = 'fr') {
        if ($lang === 'fr') {
            return $this->desc_fr;
        } else {
            return $this->desc_en;
        }
    }

    function getEan() {
        return $this->ean;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName_en($name_en) {
        $this->name_en = $name_en;
    }

    function setName_fr($name_fr) {
        $this->name_fr = $name_fr;
    }

    function setDesc_en($desc_en) {
        $this->desc_en = $desc_en;
    }

    function setDesc_fr($desc_fr) {
        $this->desc_fr = $desc_fr;
    }

    function setEan($ean) {
        $this->ean = $ean;
    }

    function getManu_id() {
        return $this->manu_id;
    }

    function getCat_id() {
        return $this->cat_id;
    }

    function setManu_id($manu_id) {
        $this->manu_id = $manu_id;
    }

    function setCat_id($cat_id) {
        $this->cat_id = $cat_id;
    }

}
