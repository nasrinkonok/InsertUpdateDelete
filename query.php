<?php
require_once('db.php');
	if(isset($_POST['update'])){
		
		$updateQuery= "UPDATE infodb SET name='$_POST[name]' , email='$_POST[email]' , phone='$_POST[phone]' WHERE id='$_POST[hidden]'";
		mysqli_query($connection, $updateQuery);
		
	}
	
	header('location:contacts.php');


?>