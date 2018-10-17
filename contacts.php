<?php
require_once('db.php');
$sql="SELECT * from infodb";
$result=mysqli_query($connection,$sql);
?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	
	

    <title>Company</title>
  </head>
  <body>
    <div class="container" style="background: #ce596d  ">
	<div class="jumbotron" style="background: #ce596d  ">
  <h1 class="display-4 text-center" style="color: #520a16 ">All Contacts</h1>
  <a href="index.php" class="btn btn-info" style="background: #C70039 ">Add new contacts</a>
  <table class="table" style="background:#bd4559">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  while($r=mysqli_fetch_assoc($result)){
  ?>
  
  
    <tr>
      <th scope="row"><?php echo $r['id'] ?></th>
      <td class="text-white"><?php echo $r['name'] ?></td>
      <td class="text-white"><?php echo $r['email'] ?></td>
      <td class="text-white"><?php echo $r['phone'] ?></td>
	  
	  <td>
	  
	  
	  <a href="update.php?name=<?php echo $r['name'] ?>" class="btn btn-info" style="background: #d44e10">Update</a>	 ||  
	  <a href="delete.php?id=<?php echo $r['id'] ?>" class="btn btn-info" style="background: #d41010">Delete</a>
	  
	  </td>
    </tr>
    
	<?php
	
  }
	
	?>
	
	
  </tbody>
</table>
 
 
 
 
 
  
  
</form>
</div>
	
	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>