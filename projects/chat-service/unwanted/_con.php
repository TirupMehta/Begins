<?php 
$servername  ="localhost";
$username    ="root";
$password    ="";
$dbname      ="dating";
$conn =new mysqli($servername,$username,$password,$dbname);
  
  if (!$conn) {
  	die(mysqli_error($conn));
  }
  	else
  		//echo "successfully";
  		//header("location:g2dbcon.php");
?>
