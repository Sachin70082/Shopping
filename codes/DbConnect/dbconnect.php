<?php

$servername = "localhost";

$dbname = "shopping";


$username = "root";
$password = "";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	die("Connection faild because ".mysqli_connect_error());

	

}


?>





