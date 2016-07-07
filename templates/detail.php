<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$item = App\tables\Base::getItemByID($id);
?>

<div class="center_content">
    <div class="center_title_bar"><?php echo $item->getName($lang) ?></div>
    <div class="prod_box_big">
        <div class="center_prod_box_big">
            <div class="product_img_big"> <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="images/p3.jpg" alt="" border="0" /></a>
                <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="images/thumb1.jpg" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="images/thumb2.jpg" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="images/thumb1.jpg" alt="" border="0" /></a> </div>
            </div>
            <div class="details_big_box">
                <div class="product_title_big"><?php echo $item->getName($lang) ?></div>
                <div class="specifications">Available: <span class="blue">In stock</span><br />
                    Warranties: <span class="blue">24 months</span><br />
                    Transport: <span class="blue">delivery services company</span><br />
                    Include :<span class="blue">TVA</span><br />
                    Description :<span class="blue"><?php echo $item->getDesc($lang) ?></span><br />
                </div>
                <div class="prod_price_big"><span class="reduce">350$</span><span class="price">270$</span></div>
                <a href="#" class="prod_buy">Add to cart</a> 
            </div>
        </div>
    </div>
</div>