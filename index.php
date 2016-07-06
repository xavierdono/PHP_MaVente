<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

require_once 'Autoloader.php';
Autoloader::register();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Tools Shop</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="css/iecss.css" />
        <![endif]-->
        <script type="text/javascript" src="js/boxOver.js"></script>
    </head>
    <body>
        <div id="main_container">
            <div id="header">
                <div class="top_right">
                    <div class="languages">
                        <div class="lang_text">Languages:</div>
                        <a href="#" class="lang"><img src="images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img src="images/de.gif" alt="" border="0" /></a> </div>
                    <div class="big_banner"> <a href="index.php"><img src="images/banner728.jpg" alt="" border="0" /></a> </div>
                </div>
                <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="" border="0" width="182" height="85" /></a> </div>
            </div>
            <div id="main_content">
                <?php
                include_once './templates/menu_bar.php';
                ?>
                <br />
                <div class="left_content">
                    <?php
                    include_once './templates/manufacturers.php';
                    ?>
                    <br />
                    <?php
                    include_once './templates/categories.php';
                    ?>
                    <br />
                    <?php
                    include_once './templates/special_products.php';
                    ?>
                </div>
                <div class="center_content">
                    <?php
                    include_once './templates/item_of_the_month.php';
                    ?>
                    <?php
                    include_once './templates/latest_products.php';
                    ?>
                    <?php
                    include_once './templates/recomended_products.php';
                    ?>
                </div>
                <div class="right_content">
                    <div class="title_box">Search</div>
                    <div class="border_box">
                        <input type="text" name="search_input" class="newsletter_input" value="keyword"/>
                        <a href="#" class="join">Search</a>
                    </div>
                    <div class="shopping_cart">
                        <?php
                        include_once './templates/shopping_card.php';
                        ?>
                    </div>
                    <?php
                    include_once './templates/whats_new.php';
                    ?>
                </div>
            </div>
            <?php
            include_once './templates/footer.php';
            ?>
        </div>
    </body>
</html>
