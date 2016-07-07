<?php
$item = App\tables\Base::getItemOfTheMonth()
?>
<div class="oferta"> <img src="images/p1.png" width="165" height="113" border="0" class="oferta_img" alt="" />
    <div class="oferta_details">
        <div class="oferta_title"><?php echo $item->getName($lang) ?></div>
        <div class="oferta_text">><?php echo $item->getDesc($lang) ?></div>
        <a href="details.php?id=<?php echo $item->getId() ?>" class="prod_buy">Details</a> 
    </div>
</div>