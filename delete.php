<?php
require_once('db.php');
$id=$_GET['id'];
echo $id;
$dlt="DELETE from infodb where id=$id";
$res=mysqli_query($connection,$dlt);
if($res){
	
	header('location:contacts.php');
	
}else{
	echo "can't delete";
}





?>