<?php

$categories = App\tables\Base::getAllCategories();

$mod = 2;

echo '<div class="title_box">Categories</div>';
echo '<ul class="left_menu">';

foreach ($categories as $category) {
    if ($mod % 2) {
        echo '<li class="even"><a href="#">' . $category->getName($lang) . '</a></li>';
    } else {
        echo '<li class="odd"><a href="#">' . $category->getName($lang) . '</a></li>';
    }
    $mod++;
}

echo '</ul>';