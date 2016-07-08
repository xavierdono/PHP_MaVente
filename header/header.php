<?php

session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)) . DS);

require_once ROOT . 'Autoloader.php';
Autoloader::register();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];

    $_SESSION['lang'] = $lang;
} else {

    if(isset($_SESSION['lang'])) {
         $lang = $_SESSION['lang'];
    } else {
        $lang = 'fr';
    }
}

if (isset($_GET['cart'])) {
    $id = intval($_GET['cart']);

    $cart = App\entities\Cart::getInstance();
    $cart->addItem($id);

    $_SESSION['cart'] = serialize($cart);
}
?>

<div id="header">
    <div class="top_right">
        <div class="languages">
            <div class="lang_text">Languages:</div>
            <a href="?lang=en" class="lang"><img src="images/en.gif" alt="" border="0" /></a> <a href="?lang=fr" class="lang"><img src="images/de.gif" alt="" border="0" /></a>
        </div>
    </div>
    <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="" border="0" width="182" height="85" /></a> </div>
</div>