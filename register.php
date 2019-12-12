<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "newproject";

	// Create connection
	$link = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_error())
    {
        echo "<br>Error in connection";
    }


	//print_r ($_POST);
$name = mysqli_real_escape_string($link,$_POST['name']);
$email = mysqli_real_escape_string($link,$_POST['Email']);
$phone = mysqli_real_escape_string($link,$_POST['pno']);
$sex = mysqli_real_escape_string($link,$_POST['gender']);
$add = mysqli_real_escape_string($link,$_POST['address']);
$pass1 = mysqli_real_escape_string($link,$_POST['pass']);
$pass2 = mysqli_real_escape_string($link,$_POST['pass2']);

$passok = false;

$uppercase = preg_match('@[A-Z]@', $pass1);
$lowercase = preg_match('@[a-z]@', $pass1);
$number    = preg_match('@[0-9]@', $pass1);

if(!$uppercase || !$lowercase || !$number || strlen($pass1) < 8) {
  echo "Include capital letters, small letters and numbers. The length of password should be greater than 8.";
}

else{
	if($pass1 == $pass2){
		$hash = md5($pass1);
		echo $hash;
		$passok = true;
	}
	else {
		echo "passwords not matched";
	}

}

if ((array_key_exists('email', $_POST) OR array_key_exists('pno', $_POST)) AND $passok == true) {
	
    
		$query = "INSERT INTO users (`id`, `name`, `email`, `phno`, `sex`, `address`, `password`, `hash`, `active`) VALUES (NULL, '$name', '$email', '$phone', '$sex', '$add', '$pass1', '$hash', '0')";

		

		if(mysqli_query($link,$query)){echo "User Added Sucessfully!";}
		else{echo "Couldn't execute query ".mysqli_error($link);}
		
		
		
}

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by clicking the url below.
 
------------------------
Username: '.$email.'
Password: '.$pass1.'
------------------------
 
Please click this link to activate your account:
localhost/project/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From: shashwtsahai5@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers);


?>