<?php
$otp = $_GET['inpotp'];
unset($_GET['inpotp']);
?>

<form method="POST">
	<input type="password" placeholder ="new password" name="npass1">
	<input type="password" placeholder ="confirm password" name="npass2">
	<input type="submit">

</form>


<?php
session_start();
//print_r($_POST);
//print_r($_SESSION);

if($otp != "111111"){
	echo "Incorrect OTP";
}
else{

if(array_key_exists('npass1',$_POST) && $otp == "111111"){

$pass1 = $_POST['npass1'];
$pass2 = $_POST['npass2'];
$em = $_SESSION['email'];
$pn = $_SESSION['phone'];
	
	
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


$link = mysqli_connect("localhost", "root", "",'newproject');//server, username, password, database
if (mysqli_connect_error())
    {
        echo "<br>Error in connection";
    }
if($passok == true )

$query = "UPDATE users SET password = '$pass1' WHERE `users`.`email` ='$em' ";
$query2 = "UPDATE users SET hash = '$hash' WHERE `users`.`email` ='$em' ";
$result = mysqli_query ($link,$query);
$result2 = mysqli_query ($link,$query2);

if($result && $result2){
	echo "Password updated successfully";
	header ("Location:index.php");
}

}

}
?>