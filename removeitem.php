<?php
 session_start();
    foreach ($_SESSION['shopping_cart'] as $key => $values) {
      if ($values["item_id"]==$_GET["id"]) 
      {
        unset($_SESSION["shopping_cart"][$key]);
       }
      
    }
    header("location: cart.php");
 ?>