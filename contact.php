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
            <?php
            include_once './header/header.php';
            ?>
            <div id="main_content">
                <?php
                include_once './menu/menu_bar.php';
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
                <?php
                include_once './templates/contact.php';
                ?>
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
            include_once './footer/footer.php';
            ?>
        </div>
    </body>
</html>
