<?php
include 'header.php';
error_reporting(0);
session_start();
ob_start();
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
	<?php

	
  if($session==true){
  header('location:index.php'); 

  }


  ?>
	
<!-- ----------------------SLIDER------------------------------- -->

  
  
    <!-- END SLIDER -->

    <!-- <div class="bg-img">
    	<div id="blk-fg"></div>
    	<img src="../shopping project/image folder/shopgg.jpg">
	</div> -->

<div class="slider-text">
	<div class="box-1">
		<div id="up-box1">
			<h1>WELCOM TO</h1>
		</div>
		<div id="up-box2"><h1>TONES OF</h1></div>
	</div>
	<div class="box-2"><h2>CARAMEL DESIGNED.</h2></div>
</div>
	
<!-- ---------------------------------------------------------------------------
------------------------------Ad Slider------------------------------------ -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">

      <img class="d-block w-100" src="..\shoppingproject\image folder\ways-your-website-can-hurt-sales.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..\shoppingproject\image folder\shopping-images-140625-6934578.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://beanstalkwebsolutions.com/blog/wp-content/uploads/2016/08/ways-your-website-can-hurt-sales.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript">
	$('.carousel').carousel({
  interval: 2000
})
</script>
<!-- -----------------------------------BEST SALLERS------------------------------------- -->
<div class="salerbody">
	<div class="headtext"><h2>Latest lunches</h2></div>

	<?php
	
	include("codes\DbConnect\dbconnect.php");

	 // $query = "SELECT * FROM products where dist = '$dist' ORDER BY res_id limit $start_from, $num_per_page";

	 $query = "SELECT * FROM products WHERE type='latest' limit 4";
            
            $sql = mysqli_query($conn,$query);


            $file_path = 'image folder/';


         while($row1 = mysqli_fetch_array($sql))

             { 
             	$rndm_num = $row1['id'];
             	 $brand = $row1['brand'] ;
              $name = $row1['name'] ;
              $img= $file_path.$row1['image'];
              $price= $row1['price'];
              $qty= $row1['qty'];
			?>

	<div class="card" style="width: 18rem;">
	 <a href="buyproduct.php?id=<?php echo $rndm_num; ?>&brand=<?php echo $brand; ?>&name=<?php echo $name; ?>">
  <img class="card-img-top" src="<?php echo $img; ?>" alt="Card image cap"> </a>
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5>
    <p class="card-text">₹ <?php echo $price; ?> /-</p>
	</div>
	</div>

	<?php } ?>
	

</div>
<!-- -----------------------------------Trending Offers------------------------------------- -->
<div class="salerbody">
	<div class="headtext"><h2>Trending offers</h2></div>
<?php
	$query2 = "SELECT * FROM products WHERE type='trending' limit 4";
            
            $sql1 = mysqli_query($conn,$query2);

            $file_path = 'image folder/';


         while($row = mysqli_fetch_array($sql1))

             { 
             	$rndm_num = $row['id'];
             	 $brand = $row['brand'] ;
              $name = $row['name'] ;
              $img= $file_path.$row['image'];
              $price= $row['price'];
              $qty= $row['qty'];

			?>

	<div class="card" style="width: 18rem;">
	 <a href="buyproduct.php?id=<?php echo $rndm_num; ?>&brand=<?php echo $brand; ?>&name=<?php echo $name; ?>">
  <img class="card-img-top" src="<?php echo $img; ?>" alt="Card image cap"> </a>
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5>
    <p class="card-text">₹ <?php echo $price; ?> /-</p>
	</div>
	</div>
<?php } ?>
	

</div>
<!-- ------------------------------Image Card---------------------------- -->
<div class="cardbody">
	
	<?php
	$query3 = "SELECT * FROM products ORDER BY name DESC Limit 8";
            
            $sql2 = mysqli_query($conn,$query3);

            $file_path = 'image folder/';


         while($row = mysqli_fetch_array($sql2))

             { 
             	$rndm_num = $row['id'];
             	 $brand = $row['brand'] ;
              $name = $row['name'] ;
              $img= $file_path.$row['image'];
              $price= $row['price'];
              $qty= $row['qty'];

			?>

	<div class="card" style="width: 18rem;">
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