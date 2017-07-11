<!DOCTYPE html>
<html>

<head>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			    <form class="omb_loginForm" id="loginform" action="" autocomplete="off" method="POST" role="form" class="form-horizontal">
			    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
						<input type="text" class="form-control" name="name" placeholder="Username"></span>

					</div>

					<span class="help-block"></span>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
</span>
						<input type="text" class="form-control" name="email" placeholder="email address">

					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
						<input  type="password" class="form-control" name="pass" placeholder="Password">

					</div>
					<span class="help-block"></span>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-refresh " aria-hidden="true"></i></span>
						<input  type="password" class="form-control" name="confirmpass" placeholder="Confirm Password">
					</div>
					<span class="help-block"></span>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>
</span>
						<label class="radio-inline">
					      <input type="radio" name="gender" value="male">Male
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="gender" value="female">Female
					    </label>

					</div>



					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign Up</button>
				</form>
			</div>
    	</div>
	</div>



        </div>






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
$dbname = "database1";





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


</body>
</html>
