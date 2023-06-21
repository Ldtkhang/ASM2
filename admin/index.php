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
$host = "g84t6zfpijzwx08q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="shcmc12nz9x2zrrx";
$password="udbii8wahzsungz3";
$db= "a3xn43qyg024l7fs";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('theme.php');
