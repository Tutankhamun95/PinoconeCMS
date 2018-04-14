<?php
	include ("test_server.php");
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
div.jumbotron {

	    text-align:center;
	}
	    
</style>

<title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Pinocone</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="#">Products</a>


		</div>
	</div>
	<ul class="navbar-nav">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
	</ul>
</nav>

<div class="jumbotron">
	<h1 class="display-4">Create New Food Menu</h1>
</div>

<div class="container">
<div class="row">
	<div class="col-sm-3">
	<ul class="list-group">
	  <li class="list-group-item"><strong>Create</strong> New Food Menu</li>
	</ul>
	</div>

	<div class="col-sm-9">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-row">
					<h2>Create a new Menu</h2>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-12">
		                <label for="menu_name">Name</label>
		                <input type="text" name="menu_name" id="menu_name" class="form-control" required/>
		                                
		            </div>
	            </div>

	            <div class="form-row">
		            <div class="form-group col-sm-12">
		                <label for="menu_description">Description</label>
		                <textarea class="form-control" name="menu_description" id="menu_description" rows="3"></textarea>
		                                
		            </div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-12">
						<label for="menu_image">Poster</label>
						<input class="form-control-file" type="file" name="menu_image" id="menu_image" />
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-12">
						<label for="menu_price">Price</label>
						<input class="form-control" type="number" name="menu_price" id="menu_price" />
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-12">
						<input type="submit" name="add_food_menu" value="add" class="btn-success btn-lg" />
					</div>
				</div>
			</form>		

	</div>
</div>
</div>
<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>