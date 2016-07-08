<?php

namespace App\Entities;

class Cart {

    private static $id = array();
    private static $_instance = null;

    public static function getInstance() {

        if(is_null(self::$_instance)) {
            self::$_instance = new Cart();
        }

        return self::$_instance;
    }

    public static function getId() {
        return self::$id;
    }

    public static function addItem($added_id) {
        array_push(self::$id, $added_id);
    }

    public static function getSum() {
        return 'TODO';
    }
}
