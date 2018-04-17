<?php
	include ("server.php");
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
	
	div.jumbotron.food-jumbo {

		color:#fff;
	    text-align:center;
	    background:url('website-structure-data/image/pic1.jpg');

	    background-size:cover;
	    background-position:center;
	    padding-top:100px;
	    padding-bottom:100px;
	}

	.layer {
		background-color: rgba(0, 0, 0, 0.4);
		padding: 32px;
	}

	.card-img-top {
    width: 100%;
    height: 18vw;
    object-fit: cover;
	}		

	.card {
		margin-bottom: 32px;
		margin-top: 32px;
	}

</style>


<title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php">Pinocone</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="#">Products</a>


		</div>
	</div>
	<ul class="navbar-nav">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
	</ul>
</nav>

<div class="jumbotron food-jumbo">
	<div class="layer">
	<h1 class="display-4">Pinocone Online Catering System </h1>
	<p class="lead">Offers the best foods in town. From Western cuisine to Malaysian's favourite dishes.</p>
	
	<p>Have a look now !</p>
	<p class="lead">
		<a class="btn btn-success btn-lg" href="#" role="button">Menu</a>
	</p>
</div>
</div>

<div class="container">
	<h1>Our Kitchen</h1>

	
	<div class="row">
	<?php
		displayMenus()
		
	?>
	</div>
	
</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>