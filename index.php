<?php
session_start();
$urladmin ="https://khangtoy-7e1f5470f3ad.herokuapp.com/admin/";
$urluser ="https://khangtoy-7e1f5470f3ad.herokuapp.com/";

$home = "home.php";
$register = "register.php";
$shoppingcart = "shoppingcart.php";
$order = "order.php";
$logout = "logout.php";

//////////////////////////////////////////////////// Connection ////////////////////////////////////////////////
$host = "z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="tvdg82gjvsolpgib";
$password="r2bxbt5hwwfdv3gw";
$db= "eqy8f5w4zth4rwz9";
$conn = mysqli_connect($host,$username,$password,$db) or die("Can not connect database".mysqli_connect_error());
include('theme.php');