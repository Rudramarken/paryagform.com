<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   ="";
$dbname     ="prayag";
$conn       = mysqli_connect($severname,$username,$password,$dbname);

if($conn)
{
	//echo "ok";
}
else 
{
	echo "connection failed";
}
?>