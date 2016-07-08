<?php

if(isset($_SESSION['cart'])) {

    $cart = unserialize($_SESSION['cart']);

    echo '<div class="shopping_cart">
            <div class="title_box">Shopping cart</div>
            <div class = "cart_details">' . count($cart->getId()) . ' items<br />
                <span class="border_cart">
                </span>Total: <span class="price">'. $cart->getSum() . '</span>
            </div>
            <div class="cart_icon">
                <a href="#"><img src="images/shoppingcart.png" alt="" width="35" height="35" border="0" /></a>
            </div>
         </div>';
}