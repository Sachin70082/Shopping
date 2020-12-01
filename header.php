<?php
error_reporting(0); 
ob_start();
include("codes\DbConnect\dbconnect.php");

?>
	



<!DOCTYPE html>
<html>
<head>
	<title>CARAMEL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="codes/css/header.css">
	<link rel="stylesheet" type="text/css" href="codes/css/slider.css">
	<link rel="stylesheet" type="text/css" href="codes/css/footer.css">
	<link rel="stylesheet" type="text/css" href="codes/css/saler-body.css">

<!-- Global styles START -->          
<script type="text/javascript" src="..\shoppingproject\codes\java script\jquery-3.4.0.min.js"></script>

	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	
</head>
<body>
	<!-- ----------------Header------------------ -->
	<div class="header">
		<div class="logo-bar">
			<img src="logo/FINAL -1.PNG">
			<div id="cart">
				<a href="cart.php"><img src="logo/cart.PNG"></a>
			</div>

		</div>

		<?php

	session_start();
  if($session==true){
  header('location:index.php'); 
  echo "<style> 
		p #login-text{display: none;}
		p #logout-text{display: block;}
		</style>";
  }


  ?>
	

		<div class="upper-links">

			<a href="#"><p>My Account</p></a>
			<a href="login.php"><p  id="login-text">Login</p> </a>
			<a href="logout.php" style="" ><p id="logout-text">Logout</p> </a>

		</div>




		<div class="navbar">
			<ul>
				<a href="index.php">
					<li>Home</li>
				</a>
				<a href="product.php">
					<li>Men</li>
				</a>
				<a href="product.php">
					<li>Women</li>
				</a>
				<a href="product.php">
					<li>Kids</li>
				</a>
				<a href="product.php">
					<li>New</li>
				</a>
				
			</ul>

			<input type="text" name="search" placeholder="Search item here." id="search-bar">
			<a href=""><BUTTON>Search</BUTTON></a>

			
		</div>

	</div>
	
	</body>
</html>