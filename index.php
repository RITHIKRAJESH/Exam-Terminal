<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exam Terminal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				

				<form action="#" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" value="signin" name="signin">
							Signin
						</button>
					</div>
					<div class="text-center p-t-136">
						<a  href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
if(isset($_POST["signin"]))
{

$email=$_POST["email"];
$password=$_POST["password"];
include "dbconnect.php";
$sql="select * from login where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
//$email=$row["email"];
if($row=mysqli_fetch_array($result))
   {
   	$_SESSION["userid"]=$row["userid"];
   	$_SESSION["email"]=$row["email"];
   	$role=$row["role"];
   	$staus=$row["status"];
    echo $role;
	if($role == "Admin")
	{
		echo "<meta http-equiv='refresh' content='1;url=admin/'>";
	}
	else if ($role == "Teacher" && $row["status"] == "active")
	 {
   echo "<meta http-equiv='refresh' content='1;url=teacher/'>";
  }
   else if ($role == "Student" && $row["status"] == "active") 
   {
   echo "<meta http-equiv='refresh' content='1;url=student/'>";
   }
else if ($role == "BC" && $row["status"] == "active") 
   {
   echo "<meta http-equiv='refresh' content='1;url=classteacher/'>";
   }
   }
   else
   	echo "<script>alert('incorrect credentials or not being activated')</script>";

}

?>

