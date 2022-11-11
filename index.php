<?php
session_start();
//$urladmin = "http://localhost:8080/STORE STOYS/admin/";
//$urluser = "http://localhost:8080/STORE STOYS/";
$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "ec2-52-200-215-149.compute-1.amazonaws.com";
$username = "tbemlhvelmhrao";
$password = "af4d1bfb08947427e7ed2882faa904093c90e0d81bb7c55fb8ef346522f48d68";
$db = "d1p5lbhl2umbl0";
$conn = pg_connect('postgres://tbemlhvelmhrao:af4d1bfb08947427e7ed2882faa904093c90e0d81bb7c55fb8ef346522f48d68@ec2-52-200-215-149.compute-1.amazonaws.com:5432/d1p5lbhl2umbl0');

include('theme.php');
