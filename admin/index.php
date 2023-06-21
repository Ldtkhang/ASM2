<?php
session_start();
$urladmin ="https://khangtoy-c0c43d999583.herokuapp.com/admin/";
$urluser ="https://khangtoy-c0c43d999583.herokuapp.com/";

$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="seypaf5q0fnfmgps";
$password="ekh4orrzjl47dhuc";
$db= "yzrlq4yb0y0lthl4";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('theme.php');
