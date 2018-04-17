<?php

$con = mysqli_connect("localhost", "root", "123456", "food");

if (isset($_POST['add_food_menu'])){

	(string) $menu_name = $_POST['menu_name'];

	$menu_description = $_POST['menu_description'];

	/** Warning: Without enctype="multipart/form-data"
	Image file will not be uploaded **/
	$menu_image = $_FILES['menu_image']['name'];
    $menu_image_tmp = $_FILES['menu_image']['tmp_name'];

    $product_image = $_FILES['product_image']['name'];

    $menu_price = $_POST['menu_price'];

    $insert_menu = "INSERT INTO menu_item (menu_name, menu_description, menu_image, menu_price) VALUES ('$menu_name', '$menu_description', '$menu_image', '$menu_price')";
        
    move_uploaded_file($menu_image_tmp, "menu_images/$menu_image");

    mysqli_query($con, $insert_menu);
   
}

function displayMenus(){

		global $con;

		$get_menus = "select * from menu_item";

		$run_menus = mysqli_query($con, $get_menus);

		while ($row_menu = mysqli_fetch_array($run_menus))
		{
			$menu_id = $row_menu['menu_id'];

			$menu_name = $row_menu['menu_name'];

			$menu_description = $row_menu['menu_description'];

			$menu_image = $row_menu['menu_image'];

			echo "
			<div class='col-sm-4'>
			<div class='card'>
				<img class='card-img-top' src='menu_images/$menu_image' alt='Card image cap'>
				<div class='card-body'>
					<h5 class='card-title'>$menu_name</h5>
					<p class='card-text'>$menu_description</p>
					<a href='#' type='submit' ></a>
				</div>
			</div>
			</div>	
			"; // important //
		}
}

function displayMenusInTable(){

	global $con;

	$get_menus = "select * from menu_item";

	$run_menus = mysqli_query($con, $get_menus);

	while ($row_menu = mysqli_fetch_array($run_menus))
	{
		$menu_id = $row_menu['menu_id'];

		$menu_name = $row_menu['menu_name'];

		$menu_description = $row_menu['menu_description'];

		$menu_price = $row_menu['menu_price'];

	echo "
	<tr>
		<td>$menu_id</td>
		<td>$menu_name</td>
		<td>$menu_description</td>
		<td>$menu_price</td>
		<td><a href='?del=$menu_id' class='btn btn-info btn-danger btn-sm' role='button'>DELETE</a></td>
	</tr>
	";

	}		

}

if (isset($_GET['del'])){
	$menu_id = $_GET['del'];

	$delete_menu = "DELETE FROM menu_item WHERE menu_id ='$menu_id'";

	mysqli_query($con, $delete_menu);
}





?>