<?php
/**
 * Created by Phan Thanh Tùng.
 * User: David Evans
 * Date: 08/03/2012
 * Time: 19:45
 * To change this template use File | Settings | File Templates.
 */
$host="localhost";
$user="root";//Username truy cập phpmyadmin
$password="";//Password truy cập phpmyadmin
$db="web_cosmetics";//database
$connection=mysqli_connect("{$host}","{$user}","{$password}","{$db}") or die ('Could not connect database');
require_once "mysqli.class.php";
$db=new db();
?>
