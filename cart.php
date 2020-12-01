<?php
error_reporting(0); 
session_start();




if (isset($_POST['add_to_cart'])) {
	
	if (isset($_SESSION["shopping_cart"])) {
			 $item_array= array_column($_SESSION["shopping_cart"], "item_id");
                  if (!in_array($_GET["id"], $item_array)) {
                    $count = count($_SESSION["shopping_cart"]);
                     $item_array = array(
                            'item_id' => $_GET['id'],
                            'item_code' => $_POST['hidden_id'],
                           'item_name' => $_POST['hidden_name'],
                           'item_price' => $_POST['hidden_price'],
                           'item_desc' => $_POST['hidden_desc'],
                           'item_image' => $_POST['hidden_image'] );
                     
                     $_SESSION["shopping_cart"][$count] = $item_array;
                     }

                  else{

                    	echo "ITEM ALREADY ADDED";

                 		}

          }

            
    else{
                $item_array = array(
                           'item_id' => $_GET['id'],
                            'item_code' => $_POST['hidden_id'],
                           'item_name' => $_POST['hidden_name'],
                           'item_price' => $_POST['hidden_price'],
                           'item_desc' => $_POST['hidden_desc'],
                           'item_image' => $_POST['hidden_image'] );
                $_SESSION["shopping_cart"][0]=$item_array;
        }
	
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
	<link rel="stylesheet" type="text/css" href="codes/css/product.css">
	<link rel="stylesheet" type="text/css" href="codes/css/saler-body.css">

<!-- Global styles START -->          
<script type="text/javascript" src="..\shoppingproject\codes\java script\jquery-3.4.0.min.js"></script>

	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php
	include 'header.php';
	
$total = 0;
	 
	?>

<div class="item" style="padding-top: 20px;">

	
                    <?php
             
   
    foreach($_SESSION["shopping_cart"] as $key => $values) {

    	 $total += (int)$values["item_price"];
?>

	<div class="card w-50" style="position: relative; left: 50%; transform: translateX(-50%);">
  <div class="card-body"><img class="card-img-top" style="width: 8rem;" src="<?php echo $values["item_image"]; ?>">
    <h5 class="card-title"><?php echo $values["item_name"]; ?></h5>
    <p class="card-text"><?php echo $values["item_price"];?> /-</p>
    
   <a href="removeitem.php?id=<?php echo $values["item_id"]; ?>" style="float: right;" class="btn btn-dark">Remove</a>
    
  
  </div>
</div>

 <?php } ?>

 
 <div class="underline" style="width: 70%; height: 10px; border-bottom: 1px solid #000; position: relative; left: 50%; transform: translateX(-50%);"></div>
  <div class="text" style="width: 50%; height: 120px; margin-top: 10px; position: relative; left: 50%; transform: translateX(-50%);"><h3 style="float: right;">Sub total : ₹ <?php echo $total ?> /-</h3>
  	<button type="button" class="btn btn-warning btn-lg btn-block">Proceed now</button>
  	<a href="product.php" class="btn btn-secondary btn-lg btn-block">Add more products</a>
  </div>
	


</div>
	

<footer class="footer">
	<p>© 2020 Copyright: <b>Caramel by Sagar</b></p>
</footer>

</body>
</html>