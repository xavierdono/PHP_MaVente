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
    private $sta_id;
    private $war_id;
    private $trs_id;
    private $inc_id;
    private $discount;
    private $price;

    function getStaId() {
        return $this->sta_id;
    }

    function setStaId($sta_id) {
        $this->sta_id = $sta_id;
    }

    function getWarId() {
        return $this->war_id;
    }

    function setWarId($war_id) {
        $this->war_id = $war_id;
    }

    function getTrsId() {
        return $this->trs_id;
    }

    function setTrsId($trs_id) {
        $this->trs_id = $trs_id;
    }

    function getIncId() {
        return $this->inc_id;
    }

    function setIncId($inc_id) {
        $this->inc_id = $inc_id;
    }

    function getDiscount() {
        return $this->discount;
    }

    function setDiscount($discount) {
        $this->discount = $discount;
    }

    function getPriceDiscount() {
        return round($this->price - ($this->price * $this->discount / 100), 2);
    }

    function getPrice() {
        return round($this->price, 2);
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function getId() {
        return $this->id;
    }

    function getName($lang = 'fr') {
        if ($lang === 'fr') {
            return substr($this->name_fr, 0, 25);
        } else {
            return substr($this->name_en, 0, 25);
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
