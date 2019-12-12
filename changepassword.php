<!doctype html>
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

          #pass
          {
            margin-top: 10rem;
          }
    </style>

    <title>Login</title>
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
      
  </head>


  <body>
    
     

    <div class="row">
      <div class="col-sm-4"> </div>
      <div class="col-sm-4"><div class="card" id=pass>
        <div class="card-header">
          Password Recovery
        </div>
        <div class="card-body">
          <form method="post">
			  <div class="form-group">
    
    			<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Recovery Email id">
    
  			  </div>
			  
			  <div class="form-group">
    
    			<input type="number" class="form-control" id="examplephone" aria-describedby="emailHelp" placeholder="Enter Phone number">
    
  			  </div>
			  
            
          
        <hr>
		  
		  
		  	<button type="submit" class="btn btn-default btn-block" formmethod="post">Send OTP</button>
		  </form>
		</div>
		  
		<div class="card-footer">
			<form class="form-inline" action="reset.php">
			  
			  <div class="form-group mx-sm-3 mb-2">
				
				<input type="text" class="form-control" id="inpotp" placeholder="Enter OTP">
			  </div>
			  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
			</form> 
		</div>

		  
      </div>
		  
		  
    </div>
      <div class="col-sm-4"> </div>
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

<?php
//generate OTP
//send through mail
//if matches, open password change form
//if not, echo otp not match send again
//echo "Enter the 6 digit OTP: ";



?>




