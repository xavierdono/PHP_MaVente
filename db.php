<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

//require_once ROOT . 'vendor/fzaninotto/Faker/src/autoload.php';
require_once ROOT . 'vendor/autoload.php';

$faker_fr = \Faker\Factory::create('fr_FR');
$faker_en = \Faker\Factory::create('en_US');
$base = new SQLite3(ROOT . 'db_vente.db');

///////////////////////////////////
//  manufacturers
///////////////////////////////////
$query = "DROP TABLE manufacturers";
$base->exec($query);

$query = "CREATE TABLE manufacturers (
            manu_id bigint(20) NOT NULL PRIMARY KEY,
            manu_name text
          )";
$base->exec($query);

$query = "INSERT INTO manufacturers (manu_id, manu_name) VALUES (1, 'Bosch');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (2, 'Samsung');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (3, 'Makita');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (4, 'LG');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (5, 'Fujitsu Siemens');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (6, 'Motorola');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (7, 'Phillips');";
$query .= "INSERT INTO manufacturers (manu_id, manu_name) VALUES (8, 'Beko');";
$base->exec($query);

///////////////////////////////////
//  categories
///////////////////////////////////
$query = "DROP TABLE categories";
$base->exec($query);

$query = "CREATE TABLE categories (
            cat_id bigint(20) NOT NULL PRIMARY KEY,
            cat_name_en text,
            cat_name_fr text
          )";
$base->exec($query);

$query = "INSERT INTO categories (cat_id, cat_name_en, cat_name_fr) VALUES (1, 'Power Tools', 'Outils électrique');";
$query .= "INSERT INTO categories (cat_id, cat_name_en, cat_name_fr) VALUES (2, 'Spare Parts', 'Pièces détachées');";
$query .= "INSERT INTO categories (cat_id, cat_name_en, cat_name_fr) VALUES (3, 'Hand Tools', 'Outils main');";
$query .= "INSERT INTO categories (cat_id, cat_name_en, cat_name_fr) VALUES (4, 'Accessories', 'Accessoires');";
$base->exec($query);

///////////////////////////////////
//  items_status
///////////////////////////////////
$query = "DROP TABLE items_status";
$base->exec($query);

$query = "CREATE TABLE items_status (
            sta_id bigint(20) NOT NULL PRIMARY KEY,
            sta_name text
          )";
$base->exec($query);

$query = "INSERT INTO items_status (sta_id, sta_name) VALUES (1, 'In stock');";
$query .= "INSERT INTO items_status (sta_id, sta_name) VALUES (2, 'Not available');";
$base->exec($query);

///////////////////////////////////
//  items_warranties
///////////////////////////////////
$query = "DROP TABLE items_warranties";
$base->exec($query);

$query = "CREATE TABLE items_warranties (
            war_id bigint(20) NOT NULL PRIMARY KEY,
            war_name text
          )";
$base->exec($query);

$query = "INSERT INTO items_warranties (war_id, war_name) VALUES (1, '12 months');";
$query .= "INSERT INTO items_warranties (war_id, war_name) VALUES (2, '24 months');";
$base->exec($query);

///////////////////////////////////
//  items_transport
///////////////////////////////////
$query = "DROP TABLE items_transport";
$base->exec($query);

$query = "CREATE TABLE items_transport (
            trs_id bigint(20) NOT NULL PRIMARY KEY,
            trs_name text
          )";
$base->exec($query);

$query = "INSERT INTO items_transport (trs_id, trs_name) VALUES (1, 'delivery services postal');";
$query .= "INSERT INTO items_transport (trs_id, trs_name) VALUES (2, 'delivery services company');";
$base->exec($query);

///////////////////////////////////
//  items_include
///////////////////////////////////
$query = "DROP TABLE items_include";
$base->exec($query);

$query = "CREATE TABLE items_include (
            inc_id bigint(20) NOT NULL PRIMARY KEY,
            inc_name text
          )";
$base->exec($query);

$query = "INSERT INTO items_include (inc_id, inc_name) VALUES (1, 'TVA 5%');";
$query .= "INSERT INTO items_include (inc_id, inc_name) VALUES (2, 'TVA 20%');";
$base->exec($query);

///////////////////////////////////
//  items
///////////////////////////////////
$query = "DROP TABLE items";
$base->exec($query);

$query = "CREATE TABLE items (
            items_id bigint(20) NOT NULL PRIMARY KEY,
            items_name_en text,
            items_name_fr text,
            items_desc_en text,
            items_desc_fr text,
            items_ean text,
            fk_manu_id integer,
            fk_cat_id integer,
            fk_sta_id integer,
            fk_war_id integer,
            fk_trs_id integer,
            fk_inc_id integer,
            items_discount real,
            items_price real
          )";
$base->exec($query);

for ($x = 0; $x < 55; $x++) {
    $query = "INSERT INTO items (items_id, items_name_en, items_name_fr, items_desc_en, items_desc_fr, items_ean, fk_manu_id, fk_cat_id, fk_sta_id, fk_war_id, fk_trs_id, fk_inc_id, items_discount, items_price) "
            . "VALUES ('" . $x . "', '"
            . str_replace("'", "''", $faker_en->realText(35)) . "', '"
            . str_replace("'", "''", $faker_fr->realText(35)) . "', '"
            . str_replace("'", "''", $faker_en->realText(255)) . "', '"
            . str_replace("'", "''", $faker_fr->realText(255)) . "', '"
            . $faker_fr->ean13 . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 8) . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 8) . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 2) . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 2) . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 2) . "', '"
            . $faker_fr->numberBetween($min = 1, $max = 2) . "', '"
            . $faker_fr->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20)  . "', '"
            . $faker_fr->randomFloat($nbMaxDecimals = 2, $min = 88, $max = 300) . "')";
    $base->exec($query);
}

$base->close();
