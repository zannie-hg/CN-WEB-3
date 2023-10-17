<?php
include 'menu_functions.php';

$menuHTML = build_menu($menuData);
file_put_contents('menu.html', $menuHTML);
?>
