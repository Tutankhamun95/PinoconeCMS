<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food_final";
$name = $_SESSION['name']; //session intitialised based on name 
$role = $_SESSION['role']; //session also initialised based on role 
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>