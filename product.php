<?php
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
	<link rel="stylesheet" type="text/css" href="codes/css/product.css">
	<link rel="stylesheet" type="text/css" href="codes/css/saler-body.css">

<!-- Global styles START -->          
<script type="text/javascript" src="..\shopping project\codes\java script\jquery-3.4.0.min.js"></script>

	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	
</head>
<body>
	<!-- ----------------Header------------------ -->
<?php
	include 'header.php';
	?>
	</div>

<!-- 	---------------------------------------------------------------------
	-----------------------Body Content--------------------------------- -->
	

<div class="cat-bar">
	<h5>Men >> </h5>
	<ul>

		<li><a href="">T-shirts</a>
		<li><a href="">Shirts</a>
		<li><a href="">Kurtas</a>
		<li><a href="">Jeans</a>
		<li><a href="">Suits</a>
		
	</ul>
	
</div>
<!-- ----------------------------------Content-------------------------
 -->
<div class="item-box">

	<?php
	
	include("codes\DbConnect\dbconnect.php");

// if (isset($_GET['pageno'])) {
//     $page = $_GET['pageno'];
// } else {
//     $page = 1;
// }
// $num_per_page = 8;
// $start_from =($page-1)*8;
	 // $query = "SELECT * FROM products where dist = '$dist' ORDER BY res_id limit $start_from, $num_per_page";

	 $query = "SELECT * FROM products";
            
            $sql = mysqli_query($conn,$query);

            $file_path = 'image folder/';


         while($row = mysqli_fetch_array($sql))

             { 
             	$rndm_num = $row['id'];
             	 $brand = $row['brand'] ;
              $name = $row['name'] ;
              $img= $file_path.$row['image'];
              $price= $row['price'];
              $qty= $row['qty'];
			?>

	<div class="card" style="width: 14rem;">
	 <a href="buyproduct.php?id=<?php echo $rndm_num; ?>&brand=<?php echo $brand; ?>&name=<?php echo $name; ?>">
  <img class="card-img-top" src="<?php echo $img; ?>" alt="Card image cap"> </a>
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5>
    <p class="card-text">₹ <?php echo $price; ?> /-</p>
	</div>
	</div>
	
	<?php } ?>

</div>

<footer class="footer">
	<p>© 2020 Copyright: <b>Caramel by Sagar</b></p>
</footer>


	</body>
</html>