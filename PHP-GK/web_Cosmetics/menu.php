<?php


require_once "config.php";
function  buiding_menu($parent, $menuData)
{
    $html = "";
    if (isset($menuData['parent'][$parent])) {
        $html .= "<ul class='nav'>";
        foreach ($menuData['parent'][$parent] as $value) {
            $html .= "<li>";

            $html .= "<a href='#'>" . $menuData['items'][$value]['name'] . "</a>";
            $html .= buiding_menu($value, $menuData);
            $html .= "</li>";
        }
        $html .= "</ul>";
    }
    return $html;
}
$result = $db->select($connection, "SELECT * FROM menu");
foreach ($result as $value) {
    $menuData['items'][$value['id']] = $value; //Lưu dữ liệu các biến có id khác nh
    $menuData['parent'][$value['parent']][] = $value['id'];
    
}
?>

<head>
    
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <style>
        body .nav {

            background-color: #000;
            color: #FF0000;
            font-family: Arial, sans-serif;
            z-index: 1;
        }

        .nav {
            text-align: center;
            list-style: none;
            padding: 0;
            background-color: #000;
        }

        .nav li {
            width: 11rem;

            display: inline-block;

        }

        .nav a {

            font-size: 20px;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #000;
            color: #fff;
        }

        .nav a:hover {
            color: #FF3300;

        }


        .nav li:hover ul {
            display: block;
        }

        .nav ul {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            /* Đổi màu nền của submenu */
            padding: 0;
            display: none;
            list-style: none;
            width: 100%;
            border-top: 2px solid #FF0000;
          
        }

        .nav ul li {
            margin: 0;
            text-align: left;
            border-bottom: 1px solid #555;
           
        }

        .nav ul a {
            padding: 10px;
            color: #FF0000;
            
        }

        .nav ul a:hover {
            background-color: #555;
            
        }
        .nav ul ul {
    margin-left: 10px; /* Điều chỉnh giá trị này để thay đổi khoảng cách lùi vào bên phải */
}

    </style>
</head>

<body>
    <?php
    echo buiding_menu(0, $menuData);
    ?>
</body>

</html>
<?php

?>