<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)) . DS);

echo ROOT;

require_once ROOT . 'Autoloader.php';
Autoloader::register();

session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = 'fr';
}
?>

<div id="header">
    <div class="top_right">
        <div class="languages">
            <div class="lang_text">Languages:</div>
            <a href="?lang=en" class="lang"><img src="images/en.gif" alt="" border="0" /></a> <a href="?lang=fr" class="lang"><img src="images/de.gif" alt="" border="0" /></a> </div>
        <div class="big_banner"> <a href="index.php"><img src="images/banner728.jpg" alt="" border="0" /></a> </div>
    </div>
    <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="" border="0" width="182" height="85" /></a> </div>
</div>