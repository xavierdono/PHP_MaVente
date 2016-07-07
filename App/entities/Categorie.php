<?php

namespace App\Entities;

class Categorie {

    private $id;
    private $name_en;
    private $name_fr;
    
    function getId() {
        return $this->id;
    }

    function getName($lang = 'fr') {
        if($lang === 'fr') {
            return $this->name_fr;
        } else {
            return $this->name_en;
        }
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
}
