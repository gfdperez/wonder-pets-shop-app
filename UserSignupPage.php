<?php
	session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$LName = check_input($_POST['LName']);
		$FName = check_input($_POST['FName']);
		$mobile = check_input($_POST['mobile']);
		$home = check_input($_POST['home']);
		$email = check_input($_POST['email']);
		$password = check_input($_POST['password']);
		$conpass = check_input($_POST['conpass']);

		if(!empty($LName) && !empty($FName) && !empty($mobile) && !empty($home) && !empty($email) && !empty($password) && !empty($conpass)){

			$email_check_query = "select * from customers where email = '$email' limit 1";
			$result_out = mysqli_query($connection, $email_check_query);

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: UserSignupPage.php?error=Invalid Email format!");
			} elseif ($result_out && mysqli_num_rows($result_out) > 0) {
				header("Location: UserSignupPage.php?error=Email already used!");
			} elseif($password != $conpass){
				header("Location: UserSignupPage.php?error=Password and Confirm Password do not match!");
			} else {
				$customer_id = random_number(20);
				$signup_query = "insert into customers(customer_id, last_name, first_name, home_add, mobile_no, email, password) values('$customer_id', '$LName', '$FName', '$home', '$mobile', '$email', '$password')";
				mysqli_query($connection, $signup_query);

				header("Location: UserLoginPage.php?success=Account successfully created! Please Log In.");
				die();
			}
		} elseif (empty($LName) && empty($FName) && empty($mobile) && empty($home) && empty($email) && empty($password) && empty($conpass)) {
			header("Location: UserSignupPage.php?error=Multiple required fields are missing!");
		} else {
			if(empty($LName)){
				header("Location: UserSignupPage.php?error=Last name is required!");
			} elseif (empty($FName)) {
				header("Location: UserSignupPage.php?error=First name is required!");
			} elseif (empty($mobile)) {
				header("Location: UserSignupPage.php?error=Mobile number is required!");
			} elseif (empty($home)) {
				header("Location: UserSignupPage.php?error=Home address is required!");
			} elseif (empty($email)) {
				header("Location: UserSignupPage.php?error=Email address is required!");
			} elseif (empty($password)) {
				header("Location: UserSignupPage.php?error=Password is required!");
			} elseif (empty($conpass)) {
				header("Location: UserSignupPage.php?error=Please confirm password!");
			} else {
				header("Location: UserSignupPage.php?error=Multiple required fields are missing!");
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="UserSignupPage.css" type="text/css">
	<title>Wonder Pet Shop - Sign Up</title>
</head>
<body>

	<div class="wrapper">
		<div class="signup_box">
			<div class="shop_logo">
           		<img src="Design Elements/Wonder Pets Shop Logo.png" alt="Wonder Pet Shop Logo" width="110" height="110">
        	</div>
			<form method="post">
				<input class="input_lname" type="text" name="LName" placeholder="Last Name"/>
				<input class="input_fname" type="text" name="FName" placeholder="First Name"/>
				<input class="input_mobile" type="text" maxlength="11" name="mobile" placeholder="Mobile No."/>
				<input class="input_home" type="text" name="home" placeholder="Home Address"/>
				<input class="input_email" type="text" name="email" placeholder="Email Address" />
				<input class="input_pass" type="password" name="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
				<input class="input_conpass" type="password" name="conpass" placeholder="Confirm Password" title="Must be equal to your password to confirm"/>
				<?php if(isset($_GET['error'])) { ?>
					<div class="error_box"><div class="error_mess"><?php echo $_GET['error']; ?></div></div>
				<?php } ?>
				<button class="signup_button" type="submit">SIGN UP</button>
			</form>
		</div>
		<div class="line"></div>
        <a href="/about">
            <button class="about">About</button>
        </a>
        <a href="UserLoginPage.php">
            <button class="ulogin">User Login</button>
        </a>
        
	</div>

</body>
</html>