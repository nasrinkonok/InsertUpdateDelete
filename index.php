<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" /">
    <title>Company</title>
  </head>
  <body>
    <div class="container" style="background: #228554 ">
	<div class="jumbotron" style="background: #228554 ">
  <h1 class="display-4 text-center" style="color:#581845">Company Name</h1>
  <div id="contacts"><a href="contacts.php" class="btn btn-info" style="background:#c02020">Contacts</a></div>
  
  
  <form action="insert.php" method="post" class="col-sm-8 offset-2" style="color:#871665">
  <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required="">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPhoneno">Phone</label>
    <input type="phone" class="form-control" name="phone" placeholder="Phone" required="">
  </div>
  
  
  <button type="submit" class="btn btn" style="background:   #49db91 "  >Submit</button>
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