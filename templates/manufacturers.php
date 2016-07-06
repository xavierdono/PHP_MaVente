<?php

$manufacturers = App\tables\Base::getAllManufactures();

$mod = 2;

echo '<div class="title_box">Manufacturers</div>';
echo '<ul class="left_menu">';

foreach ($manufacturers as $manufacturer) {
    if ($mod % 2) {
        echo '<li class="even"><a href="#">' . $manufacturer->getName() . '</a></li>';
    } else {
        echo '<li class="odd"><a href="#">' . $manufacturer->getName() . '</a></li>';
    }
    $mod++;
}

echo '</ul>';