<?php

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$confirmpass = $_POST["confirmpass"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];



//godaddy
/*
$servername = "localhost";
$username = "bkuser1";
$password = "bkuser1";
$dbname = "my_sample";
*/
//localhost

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (empty($_POST["name"]) || empty($_POST["email"])){
  echo "<script>alert('Please fill all fields before clicking SignUp')</script>";
}

if($_POST[pass] == $_POST[confirmpass]){
$sql = "INSERT INTO Login (Username, Password,Confirmpass,Email,Gender) VALUES ('$name', '$pass','$confirmpass','$email','$gender')";
}
else{
 echo "<script>alert('password mismatch')</script>";
}

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
}
}

mysqli_close($conn);
?>
