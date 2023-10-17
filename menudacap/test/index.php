<?php


    require_once "config.php";
    function  buiding_menu($parent,$menuData){
        $html="";
        if(isset($menuData['parent'][$parent])){
            $html.="<ul class='nav'>";
            foreach($menuData['parent'][$parent] as $value){
                $html.="<li>";
                $html.="<a href='#'>".$menuData['items'][$value]['name']."</a>";
                $html.=buiding_menu($value,$menuData);
                $html.="</li>";
            }
            $html.="</ul>";
        }
        return $html;
    }
    $result=$db->select($connection,"SELECT * FROM menu");
    foreach($result as $value){
        $menuData['items'][$value['id']]=$value;//Lưu dữ liệu các biến có id khác nh
        $menuData['parent'][$value['parent']][]=$value['id'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="author" content="David Evans"/>
    <link rel="stylesheet" href="style.css"/>
    <title></title>
</head>
<body>
    <h1>Vi Du Menu Da Cap</h1>
<?php
    echo buiding_menu(0,$menuData);
?>
</body>
</html>
<?php

?>
