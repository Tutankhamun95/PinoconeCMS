<?php

$con = mysqli_connect("localhost", "root", "123456", "food");

if (isset($_POST['add_food_item'])){

	$food_name = mysqli_real_escape_string($con, $_POST['food_name']);

	$food_description = mysqli_real_escape_string($con, $_POST['food_description']);

	mysqli_query($con, "INSERT INTO food_item (name, description) VALUES ('$food_name', '$food_description')");


}

if (isset($_POST['add_menu_item'])){

	$menu_name = mysqli_real_escape_string($con, $_POST['menu_name']);

	$menu_description = mysqli_real_escape_string($con, $_POST['menu_description']);

	mysqli_query($con, "INSERT INTO menu_item (menu_name, menu_description) VALUES ('$menu_name', '$menu_description')");

	echo "Successful added to menu_item";

	


}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$menu_id = $request->menu_id;
$food_id = $request->food_id;

mysqli_query($con, "INSERT INTO menu (menu_id, food_id) VALUES ('$menu_id', '$food_id')");

?>