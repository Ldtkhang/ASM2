<?php
session_start();
$urladmin ="https://khangtoy-7e1f5470f3ad.herokuapp.com/admin/";
$urluser ="https://khangtoy-7e1f5470f3ad.herokuapp.com/";

$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="vzgy1jbgl1f3bzfc";
$password="mnqcfryemr6j35pl";
$db= "ulavhu7uv2kwvmls";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('theme.php');
