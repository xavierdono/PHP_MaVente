<?php

namespace App\tables;

use App\Entities\Manufacturer;
use App\Entities\Categorie;
use App\Entities\Item;
use App\DB\DBConnection;

class Base {

    public static function getAllManufactures() {
        $manufactures = array();

        $db = new DBConnection();

        $query = "SELECT manu_id, manu_name FROM manufacturers ORDER BY manu_name";
        $results = $db->query($query);

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $manufacture = new Manufacturer();
            $manufacture->setId($row['manu_id']);
            $manufacture->setName($row['manu_name']);
            $manufactures [] = $manufacture;
        }

        $db->close();

        return $manufactures;
    }

    public static function getAllCategories() {
        $categories = array();

        $db = new DBConnection();

        $query = "SELECT cat_id, cat_name_en, cat_name_fr FROM categories ORDER BY cat_name_en";
        $results = $db->query($query);

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $categorie = new Categorie();
            $categorie->setId($row['cat_id']);
            $categorie->setName_en($row['cat_name_en']);
            $categorie->setName_fr($row['cat_name_fr']);
            $categories [] = $categorie;
        }

        $db->close();

        return $categories;
    }

    public static function getAllItems() {
        $items = array();

        $db = new DBConnection();

        $query = "SELECT items_id, items_name_en, items_name_fr, items_desc_en, items_desc_fr, items_ean, fk_manu_id, fk_cat_id FROM items";
        $results = $db->query($query);

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $item = new Item();
            $item->setId($row['items_id']);
            $item->setName_en($row['items_name_en']);
            $item->setName_fr($row['items_name_fr']);
            $item->setDesc_en($row['items_desc_en']);
            $item->setDesc_fr($row['items_desc_fr']);
            $item->setEan($row['items_ean']);
            $item->setManu_id($row['fk_manu_id']);
            $item->setCat_id($row['fk_cat_id']);
            $items [] = $item;
        }

        $db->close();

        return $items;
    }

    public static function getItemOfTheMonth() {
        $item = new Item();

        $db = new DBConnection();

        $query = "SELECT items_id, items_name_en, items_name_fr, items_desc_en, items_desc_fr, items_ean, fk_manu_id, fk_cat_id FROM items WHERE items_id = 0";
        $results = $db->query($query);

        $row = $results->fetchArray(SQLITE3_ASSOC);

        if (count($row) > 0) {
            $item->setId($row['items_id']);
            $item->setName_en($row['items_name_en']);
            $item->setName_fr($row['items_name_fr']);
            $item->setDesc_en($row['items_desc_en']);
            $item->setDesc_fr($row['items_desc_fr']);
            $item->setEan($row['items_ean']);
            $item->setManu_id($row['fk_manu_id']);
            $item->setCat_id($row['fk_cat_id']);
        }

        $db->close();

        return $item;
    }

    public static function getItemByID($id) {
        $item = new Item();

        $db = new DBConnection();

        $query = "SELECT items_id, items_name_en, items_name_fr, items_desc_en, items_desc_fr, items_ean, fk_manu_id, fk_cat_id FROM items WHERE items_id = " . $id;
        $results = $db->query($query);

        $row = $results->fetchArray(SQLITE3_ASSOC);

        if (count($row) > 0) {
            $item->setId($row['items_id']);
            $item->setName_en($row['items_name_en']);
            $item->setName_fr($row['items_name_fr']);
            $item->setDesc_en($row['items_desc_en']);
            $item->setDesc_fr($row['items_desc_fr']);
            $item->setEan($row['items_ean']);
            $item->setManu_id($row['fk_manu_id']);
            $item->setCat_id($row['fk_cat_id']);
        }

        $db->close();

        return $item;
    }

}
