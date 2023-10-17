<?php
function build_menu($menuItems, $parentId = 0) {
    // ... (như đã cung cấp trước đó)
}

$query = "SELECT * FROM menu";
$result = mysqli_query($connection, $query);

$menuData = [];
while ($row = mysqli_fetch_assoc($result)) {
    $menuData[] = $row;
}
