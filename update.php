<?php
require_once('db.php');

	$sql = "SELECT * FROM infodb WHERE name='$_GET[name]'";
	$result = mysqli_query($connection, $sql);
	

		
	echo "<table border= 0 align=center>
	<tr><center><h2>Information</h2></center> </tr>";
	
	while($row = mysqli_fetch_array($result)) {
		echo " <form action=query.php method=POST > ";
		  echo " <tr>";
			echo" <th>"."Name:"." </th>";
			 echo " <td>"."<input type=text name=name value= " .$row['name'] ." </td>";
		  echo " </tr>"; 
		  
		  echo " <tr>";
		   echo" <th>"."Email:"." </th>";
			echo " <td>" ."<input type=text name=email value=".$row['email'] . " </td>";		
		  echo " </tr>";
		  
		  echo " <tr>";
		   echo" <th>"."Phone:"." </th>";
			echo " <td>"."<input type=text name=phone value=" .$row['phone'] . " </td>";		
		  echo " </tr>";
		  echo " <input type=hidden name=hidden value=" .$row['id'] ." <br>"." <br>";
		  echo " <input type=submit name=update value=Update "." <br> ";
		echo" <form> ";

	}
	 
		
		echo " </table>";		
			?>
	