<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$sql = "DELETE FROM food_item (name) VALUES ('$name')";
$con->query($sql);
header("location: ../admin-page.php");
?>