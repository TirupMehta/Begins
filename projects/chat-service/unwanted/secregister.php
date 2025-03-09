
<?php
include 'con.php';
  if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password']; 
    $confi=$_POST["confi"];
    $bd_month=$_POST['bd_month'];
    $bd_day=$_POST['bd_day'];
    $bd_yr=$_POST['bd_yr'];
    $gender=$_POST["gender"]
	$sql="insert into data( name, email, password, confi, bd_month, bd_day, bd_yr, gender) values( '$name', '$email', '$password', '$confi', '$bd_month', '$bd_day', '$bd_yr', '$gender')";
	$result=mysqli_query($conn,$sql);
    if ($result) {
		//echo "the data is successfully inserted";
		header('location:Display.php');
	} 
	else{
		die(mysqli_error($conn));
	}
}
  
 ?>


