<?php

$link = mysqli_connect("localhost", "root", "",'newproject');//server, username, password, database
if (mysqli_connect_error())
    {
        echo "<br>Error in connection";
    }
   

if (array_key_exists('useremail', $_POST) OR array_key_exists('pass', $_POST)){
    

    if($_POST['useremail'] == "")
    {
        echo "Email ID is required";
    }
    else
    {
        if($_POST['pass'] == "")
        {
            echo "Password is required";
        }
        else
        {
            $sql = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['useremail'])."'";
            $result = mysqli_query ($link,$sql);
            $row = mysqli_fetch_array($result);
            if($row['password'] == $_POST['pass'] )
            {
                echo "logged in";
				session_start();

                $_SESSION['user'] = $row['name'];
                header ("Location: loginpage.php" );
				//echo "<script type=\"text/javascript\">window.location.href = \"loginpage.php\";</script>";

            }
            else
            {
                echo "incorrect password";
            }
        }

    }

    
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style type="text/css">
          body
          {
           font-family: 'Montserrat', sans-serif;
              overflow-x: hidden;
          }
          .col-sm-4
          {
            text-align: center;
          }
          .container
          {

            text-align: center;
          }

          #login
          {
            margin-top: 150px;
          }
    </style>

    <title>Login</title>
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
      
  </head>


  <body>
    
     

    <div class="row">
      <div class="col-sm-4"> </div>
      <div class="col-sm-4"><div class="card" id=login>
        <div class="card-header">
          Sign In
        </div>
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              
              <input type="email" class="form-control" name="useremail" id="email1" placeholder="Enter email">
              
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" name="pass" id="pass1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <small id="emailHelp" class="form-text text-muted">Forgot password? <a href="changepassword.php"> Click here</a></small>
            </div>
			  
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
		  
		  <div class="card-footer">
		  	<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#exampleModalScrollable2">Sign Up Now!</button>
		  </div>
		  
      </div>
    </div>
      <div class="col-sm-4"> </div>
    </div>
	  
	  
	  
	  <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalScrollableTitle">Register as a new member</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action="register.php" method="post">
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="name" required>
				</div>
			  </div>
				
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="Email" required>
				</div>
			  </div>
				
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Contact number</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="pno" required>
				</div>
			  </div>
				
			<div class="form-group row">
				  
			  <label class="col-sm-2 col-form-label">Sex</label>
				  
			  <div class="col-sm-10">
			  <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
				  <label class="form-check-label" for="inlineRadio1">Female</label>
			  </div>
			  <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
				  <label class="form-check-label" for="inlineRadio2">Male</label>
			  </div>
			  <div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="LGBTQ">
				  <label class="form-check-label" for="inlineRadio3">Others</label>
			  </div>
			  </div>
			  </div>
				
			  <div class="form-group row">
				<label class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="address" required>
				</div>
			  </div>
				
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Set Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="pass" required>
				</div>
			  </div>
				
			  <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="pass2" required>
				</div>
			  </div>
				
			  <button type="submit" class="btn btn-primary">Go!</button>
			  
			</form>
		  </div>
		  <!--div class="modal-footer">
			
			
		  </div-->
		</div>
	  </div>
	</div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
<!--
password change
home page
email verification
input validation

-->



