<?php
/**
 * Created by JetBrains PhpStorm.
 * User: David Evans
 * Date: 08/03/2012
 * Time: 20:11
 * To change this template use File | Settings | File Templates.
 */
require_once "config.php";
$result=$db->select($connection,"SELECT * FROM menu ORDER BY id");
foreach($result as $value){
    @$menuData['items'][$value['id']]=$value;
    @$menuData['parent'][$value['parent']][]=$value['id'];
 }
function select_menu($parent,$menuData,$text="--"){
        $html="";
        if(isset($menuData['parent'][$parent])){
            foreach($menuData['parent'][$parent] as $value){
                $html.="<option value='{$value}'>";
                $html.=$text.$menuData['items'][$value]['name'];
                $html.="</option>";
                $html.= select_menu($value,$menuData,$text."--");
            }
        }
        return $html;
 }
if(isset($_POST['submit'])){

        if(!empty($_POST['menu'])){
            $menu_name=addslashes($_POST['menu']);
            $parent=addslashes($_POST['menu_id']);

            if($db->insert($connection,"INSERT INTO menu(name,parent) VALUE('{$menu_name}',{$parent})")==true){
                $insert="Thanh cong";
            }
            else $insert="That bai";
        }
        else echo "Vui long dien vao";
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

<form action="add_menu.php" method="post">
    <select name="menu_id">
        <option value="0">None</option>
        <?php echo select_menu(0,$menuData);?>
    </select>
    <input type="text" name="menu"/>
    <input type="submit" name="submit"/>
</form>
<p><?php if(isset($insert)) echo $insert;?></p>
</body>
</html>
