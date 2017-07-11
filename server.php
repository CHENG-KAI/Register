<?php
/*
  $username = "";
  $email = "";
  $errors = array();

//connect to the database
$db = mysqli_connect('localhost', '','', 'registration','');
//if the regtster button is clicked


if (isset($_POST["register"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password_1 = $_POST["password_1"];
  $password_2 = $_POST["password_2"];
  if (empty($username)){
  array_push($errors, "Username is required");
  }
  if (empty($email)){
  array_push($errors, "Email is required");
  }
  if (empty($password_1)){
  array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2){
  array_push($errors,"The two password do not match");
  }

  if (count($errors == 0)){
    $password = md5($password_1);
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$password')";
    mysqli_query($db,$sql);
  }


}
*/


$user = 'root';
$password = 'root';
$db = 'registration';
$host = 'localhost';

$username = "";
$email = "";
$errors = array();

$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);
$mysqli->real_connect($host, $user, $password, $db);
if ($db) {
  echo 'conected';
} else {
  echo 'not conected';
}


if (isset($_POST["register"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password_1 = $_POST["password_1"];
  $password_2 = $_POST["password_2"];
  if (empty($username)){
  array_push($errors, "Username is required");
  }
  if (empty($email)){
  array_push($errors, "Email is required");
  }
  if (empty($password_1)){
  array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2){
  array_push($errors,"The two password do not match");
  }

  if (count($errors == 0)){
    $password = md5($password_1);
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$password');";
    mysqli_query($db,$sql);


  }


}






?>
