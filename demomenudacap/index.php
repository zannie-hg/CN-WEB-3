<?php
include 'db_connection.php';
include 'menu_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
$menuHTML = build_menu($menuData);
echo $menuHTML;
?>

</body>
</html>
