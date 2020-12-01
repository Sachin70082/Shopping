<?php
	include("codes\DbConnect\dbconnect.php");

	session_start();
	
	$check = $_GET['id'];

	$query = "SELECT * FROM products where id='$check'";
            
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
              $description = $row['description'];
			}


			
?>



<!DOCTYPE html>
<html>
<head>
	<title>CARAMEL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="codes/css/header.css">
	<link rel="stylesheet" type="text/css" href="codes/css/slider.css">
	<link rel="stylesheet" type="text/css" href="codes/css/footer.css">
	<link rel="stylesheet" type="text/css" href="codes/css/buyproduct.css">
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
<!-- -----------------------------Product View----------------------------------
------------------------------------------------------------------------------ -->
	<div class="body-container">
		<div class="image-view"><img src="<?php echo $img; ?>">
			<div class="btn-div" style="margin-top: 20px;">
				
				<form action="cart.php?id=<?php echo $check; ?>&action=add" method="POST">
                    <input type="hidden" name="hidden_id" value="<?php echo $rndm_num; ?>">
                    <input type="hidden" name="hidden_name" value="<?php echo $name; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $price; ?>">
                    <input type="hidden" name="hidden_image" value="<?php echo $img; ?>">
                    <input type="hidden" name="hidden_desc" value="<?php echo $description; ?>">
                    <input type="submit" name="add_to_cart" value="Add to cart" id="add" class="btn btn-warning btn-lg ">

                 <!--    <a href="cart.php" class="btn btn-warning btn-lg"><font color=#222>BUY NOW</font></a> -->
                    
            </form>

          
				
				
			</div>
		</div>
	
		<div class="pro-detls">
			<h3><?php echo $name; ?></h3>
			<h5>₹ <?php echo $price; ?> /-</h5><br><br>
			

			<p>Size :
			<input type="button" class="btn btn-outline-primary" value="28">
			<input type="button" class="btn btn-outline-primary" value="30">
			<input type="button" class="btn btn-outline-primary" value="32">
			<input type="button" class="btn btn-outline-primary" value="34">
			<input type="button" class="btn btn-outline-primary" value="36">
			</p>

			<br>
			<p><b>Description</b> : <?php echo $description; ?></p>
			
			

			<p>Saller : <a href="" class="text-info"> Modi Shop</a></p>
		</div>




	</div>



<footer class="footer">
	<p>© 2020 Copyright: <b>Caramel by Sagar</b></p>
</footer>
</body>
</html>