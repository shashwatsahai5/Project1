<?php
session_start();
echo "Hi ". $_SESSION['user']."<br><br>";

echo"<button onclick=\"location.href='logout.php'\" type=\"button\">Log out</button><br><br>";

$person = $_SESSION['user'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newproject";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM users WHERE name = '$person' ";
$result = mysqli_query ($link,$query);
while($row = mysqli_fetch_array($result)){
	echo "<b>"."Name: "."</b>" . $row["name"]."<br>". 
		 "<b>"."Email "."</b>" . $row["email"] ."<br>". 
		 "<b>"."Phone: "."</b>". $row["phno"]. "<br>".
		 "<b>"."Gender: "."</b>".$row["sex"]."<br>".
		 "<b>"."Address: "."</b>".$row["address"]."<br><br>";
		
}

?>