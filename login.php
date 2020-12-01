<?php
error_reporting();
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
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
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
			<form method="post" action="login.php">
			<label class="header-details">Log In</label><br>
			<label for="exampleInputEmail1">Enter Username</label>
    	<input type="text" class="form-control" name="uid" placeholder="Usename here" required autofocus><br>
    	<label for="exampleInputEmail1">Enter Password</label>
    	<input type="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pwd"><br>
		<input type="submit" name="loger" value="Submit" class="btn btn-success">
		</form><br>
		<button onclick="location.href='create_account.php'" class="btn btn-primary">Create an account</button>
		

		</div>


	<?php

if(isset($_POST['loger']))
{

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE u_name='$uid' AND u_pass='$pwd'");



if($row = mysqli_fetch_array($result))
{
	$name= $row['username'];
$_SESSION['uname']=$row['u_name'];//stores userid session
$_SESSION['upass']=$row['u_pass'];//stores password session
$_SESSION['user']=$name;
$session=$_SESSION['user'];
header('location: index.php');

}
else
{
echo '<script type="text/javascript">alert("Invalid Username or Password!");</script>';
}
}
?>
	

</body>
</html>