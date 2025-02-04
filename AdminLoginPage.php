<?php
	session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$email = check_input($_POST['email']);
		$password = check_input($_POST['password']);

		if(!empty($email) && !empty($password)){
			$login_query = "select * from admin where email = '$email' limit 1";
			$result_out = mysqli_query($connection, $login_query);

			if($result_out){
				if($result_out && mysqli_num_rows($result_out) > 0){
					$admin_data = mysqli_fetch_assoc($result_out);
					
					if($admin_data['password'] === $password){
						$_SESSION['admin_id'] = $admin_data['admin_id'];
						header("Location: AdminHomePage.php");
						die();
					} else {
						header("Location: AdminLoginPage.php?error=Email and Password do not match!");
					}
				} else {
					header("Location: AdminLoginPage.php?error=Email does not exist! Please sign up!");
				}

			} 

		} else {
			if(!empty($email)){
				header("Location: AdminLoginPage.php?error=Password is required!");
			} elseif (!empty($password)) {
				header("Location: AdminLoginPage.php?error=Email Address is required!");
			} else {
				header("Location: AdminLoginPage.php?error=Multiple required fields are missing!");
			}
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="AdminLoginPage.css" type="text/css">
	<title>Wonder Pet Shop - Admin Login</title>
</head>
<body>
	<div class="wrapper">
		<div class="login_box">
			<div class="shop_logo">
           		<img src="Design Elements/Wonder Pets Shop Logo.png" alt="Wonder Pet Shop Logo" width="110" height="110">
        	</div>
			<form method="post">
				<input class="input_email" type="text" name="email" placeholder="Email Address"/>
				<input class="input_pass" type="password" name="password" placeholder="Password"/>
				<?php if(isset($_GET['error'])) { ?>
					<div class="error_box"><div class="error_mess"><?php echo $_GET['error']; ?></div></div>
				<?php } elseif (isset($_GET['success'])) { ?>
					<div class="success_box"><div class="success_mess"><?php echo $_GET['success']; ?></div></div>
				<?php } ?>
				<button class="login_button" type="submit">ADMIN LOGIN</button>
			</form>
			<form action="AdminSignupPage.php">
				<button class="signup_button" type="submit">SIGN UP</button>
			</form>
		</div>
		<div class="line"></div>
        <a href="UserLoginPage.php">
            <button class="admin">Customer</button>
        </a>
	</div>
</body>
</html>