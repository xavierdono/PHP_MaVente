<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

require_once ROOT . 'vendor/fzaninotto/Faker/src/autoload.php';

$base = new SQLite3(ROOT . 'db_vente.db');
$query = "DROP TABLE posts";
$base->exec($query);

$query = "CREATE TABLE posts (
            ID bigint(20) NOT NULL PRIMARY KEY,
            post_author bigint(20) NOT NULL,            
            post_date datetime,
            post_content longtext,
            post_title text,
            guid VARCHAR(255)            
            )";

$base->exec($query);

$faker = \Faker\Factory::create('fr_FR');

for ($x = 0; $x < 15; $x++) {
    $query = "INSERT INTO posts (ID, post_title, post_content, post_author, post_date, guid) VALUES ('" . $x . "', '" . $faker->sentence . "', '" . $faker->text . "', '" . $faker->randomDigitNotNull . "', '" . strftime("%b %d %Y %H:%M", $faker->unixTime($max = 'now')) . "', '" . $faker->url . "')";
    $base->exec($query);
}

$base->close();
