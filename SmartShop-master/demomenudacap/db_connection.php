<?php

$host="localhost";
$user="root";
$password="";
$db="menu";//database
$connection=mysqli_connect("{$host}","{$user}","{$password}","{$db}") or die ('Could not connect database');
require_once "mysqli.class.php";
$db=new db();
?>
