<?php
session_start();
$urladmin ="https://khangtoy-52677512fbc2.herokuapp.com/admin/";
$urluser ="https://khangtoy-52677512fbc2.herokuapp.com/";

$home = "home.php";
$register = "register.php";
$shoppingcart = "shoppingcart.php";
$order = "order.php";
$logout = "logout.php";

//////////////////////////////////////////////////// Connection ////////////////////////////////////////////////
$host = "u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="seypaf5q0fnfmgps";
$password="ekh4orrzjl47dhuc";
$db= "yzrlq4yb0y0lthl4";
$conn = mysqli_connect($host,$username,$password,$db) or die("Can not connect database".mysqli_connect_error());
include('theme.php');