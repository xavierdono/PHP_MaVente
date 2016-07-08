<?php

$items = App\tables\Base::getLatestProducts();

echo '<div class="center_title_bar">Latest Products</div>';

foreach($items as $item) {
    echo '<div class="prod_box">
            <div class="center_prod_box">
                <div class="product_title"><a href="#">' . $item->getName($lang) . '</a></div>
                <div class="product_img"><a href="#"><img src="images/p1.jpg" alt="" border="0" /></a></div>
                <div class="prod_price"><span class="reduce">' . $item->getPrice() . '</span> <span class="price">' . $item->getPriceDiscount() . '</span></div>
            </div>
            <div class="prod_details_tab"> <a href="?cart=id=' . $item->getId() . '" class="prod_buy">Add to Cart</a> <a href="details.php?id=' . $item->getId() . '" class="prod_details">Details</a> </div>
        </div>';

}