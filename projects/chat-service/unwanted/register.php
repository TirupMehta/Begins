
<?php
if (isset($_POST['name'])) {
  sleep(5);
  $conn =new PDO("mysql:host=localhost; dbname=datingweb","root","");
  $data=array(':name' =>$_POST["name"],
  ':email'    =>$_POST["email"],
  ':password' =>$_POST["password"],
  ':confi'    =>$_POST["confi"],
  ':bd_month' =>$_POST['bd_month'],
  ':bd_day'   =>$_POST['bd_day'],
  ':bd_yr'    =>$_POST['bd_yr'],
  ':gender'   =>$_POST["gender"]
);

	
	$query="insert into register(name, email, password, confi, bd_month, bd_day, bd_yr, gender) values (:name,:email,:password,:confi,:bd_month',:bd_day,:bd_yr,:gender)";
	$statment=$conn->prepare($query);
  $statment->excute($data);
  echo '<div class="alert alert-success">Data Saved </div>';
	
}
 ?>


