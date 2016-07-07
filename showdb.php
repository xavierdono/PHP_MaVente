<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

require_once 'Autoloader.php';
Autoloader::register();

$manufacturers = App\tables\Base::getAllManufactures();
$categories = App\tables\Base::getAllCategories();
$items = App\tables\Base::getAllItems();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DB</title></head>
    <body>
        <h3>Manufacturers</h3>
        <table>
            <?php
            foreach ($manufacturers as $manufacturer) {
                echo '<tr>';
                echo '<td>' . $manufacturer->getId() . '</td>';
                echo '<td>' . $manufacturer->getName() . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <h3>Categories</h3>
        <table>
            <?php
            foreach ($categories as $categorie) {
                echo '<tr>';
                echo '<td>' . $categorie->getId() . '</td>';
                echo '<td>' . $categorie->getName('fr') . '</td>';
                echo '<td>' . $categorie->getName('en') . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <h3>Items</h3>
        <table>
            <?php
            foreach ($items as $item) {
                echo '<tr>';
                echo '<td>' . $item->getId() . '</td>';
                echo '<td>' . $item->getName('fr') . '</td>';
                echo '<td>' . $item->getName('en') . '</td>';
                echo '<td>' . $item->getDesc('fr') . '</td>';
                echo '<td>' . $item->getDesc('en') . '</td>';
                echo '<td>' . $item->getEan() . '</td>';
                echo '<td>' . $item->getManu_id() . '</td>';
                echo '<td>' . $item->getCat_id() . '</td>';
                echo '<td>' . $item->getStaId() . '</td>';
                echo '<td>' . $item->getWarId() . '</td>';
                echo '<td>' . $item->getTrsId() . '</td>';
                echo '<td>' . $item->getIncId() . '</td>';
                echo '<td>' . $item->getDiscount() . '</td>';
                echo '<td>' . $item->getPrice() . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
