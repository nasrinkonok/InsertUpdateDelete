<?php 
require_once('db.php');


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT into infodb(name,email,phone)
VALUES('$name','$email','$phone')";
$result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
if($result==true){
	header("location:contacts.php");
}else{
	echo "data not inserted";
}



?>
