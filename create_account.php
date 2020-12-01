<?php
ob_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		
		.form-box{
			background: white;
			width: 300px;
			height: auto;
			position: relative;
			left: 50%;
			margin-top: 20px;
			transform: translateX(-50%);
			border: 1px solid #ccc;
			padding: 10px;
			border-radius: 4px;
			
		}
		.header-details{
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			padding-top: 0px;
			font-weight: bold;

		}
		
		
	</style>
</head>
<body>
<?php
	include 'header.php';
	?>
		<div class="form-box">
			<form method="post" action="">
			
			<label for="">Enter Username</label>
    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username here" name="uid" required autofocus><br>
    	<label for="exampleInputEmail">Enter Password</label>
    	<input type="Password" class="form-control" id="exampleInputPass" name="pwd"><br>
    	<label for="exampleInputEmail">Verify Password</label>
    	<input type="Password" class="form-control" id="exampleInputVPass" name="vwd"><br>
    	<label for="">Full name</label>
    	<input type="text" class="form-control" id="exampleInputEmail1" name="name"><br>
    	
		<input type="submit" name="loger" value="Submit" class="btn btn-success">
		</form><br>
		<button onclick="location.href='login.php'" class="btn btn-primary">Back</button>
	
		</div>
	
	
	<?php
if(isset($_POST['loger']))
{
	$sql = "SELECT * FROM users";
 $result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$user= $row['u_name'];	
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$vwd = mysqli_real_escape_string($conn, $_POST['vwd']);
$nm = mysqli_real_escape_string($conn, $_POST['name']);



		if(!empty($uid) && !empty($pwd) && !empty($vwd) && !empty($nm)){
 			if($pwd==$vwd){
 				if($uid!=$user){
 					$sql2= "INSERT INTO users (u_name, u_pass, username) VALUES ('$uid', '$pwd', '$nm')";
 					if(mysqli_query($conn,$sql2))
	   				{
	   				
	   				echo "<script> alert('Success'); </script>";
	   				header('location:login.php');
	   				}
	   			}else{echo "<script> alert('Already taken Username.'); </script>";}
 				
 			}else{ echo "<script> alert('Password did not mached.'); </script>"; }			
			
 			}
	   		
 		
 		else{
 				echo "<script> alert('All fields are required.'); </script>";
 					

 			}

}
?>
</body>
</html>