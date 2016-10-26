<?php 
session_start();

 if(isset( $_SESSION['loggedin'] ) ){
 	header('location: profile.php');
 	die(); 
 }




if( isset($_POST['signup']) ){

	$full_name = $_POST['full-name'];
	$email = $_POST['email'];
	$password =$_POST['password'];


	if( !empty($email) && !empty($password) && !empty($full_name) ){

		$_SESSION['full-name'] = $full_name;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		$message="HEY ". $full_name. " have been registered please login";

	}else{
		$error ="sorry Either email or password or fullname is empty";
	}



}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TRD</title>
</head>
<body>
	<header>
		<?php 
			if( isset($error) ){
				echo $error;
			}
			if( isset($message) ){
				echo $message;
			}
			
		 ?>
	</header>
	<div class="main-area">
		<div class="login-form">
			<form action="profile.php" method="POST">
				<input type="email" name="email" placeholder="email"><br>
				<input type="password" name="password" placeholder="password"><br>
				<input type="submit" name="login" value="login"><br>
			</form>
		</div>
		<div class="signup-form">
			<form action="" method="POST">
				<input type="text" name="full-name" placeholder="full-name"><br>
				<input type="email" name="email" placeholder="email"><br>
				<input type="password" name="password" placeholder="password"><br>
				<input type="submit" name="signup" value="SIGN UP"><br>
			</form>
		</div>
	</div>
	<footer></footer>
</body>
</html>