<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $customer_data = check_login($connection);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="About.css" type="text/css">
	<title>Wonder Pet Shop - Login</title>
</head>
<body>
	<div class="wrapper">
		<div class="box">
			<div class="logo">
           		<img src="Design Elements/Wonder Pets Shop Logo.png" alt="Wonder Pet Shop Logo" width="110" height="110">
        	</div>
			<div class="text">
				Wonder Pets Shop is an enterprise that aims to provide domestic animals of all kinds a loving, safe
				, and nurturing shelter. It only caters people who embodies the mission of the shop and are committed 
				to take care any pet that they adopt from the shop. Wonder Pets Shop envisions a world where the living 
				organisms, especially the animals, in the environment are free from any threat or extinction.
			</div>
		</div>
		<form action="index.php">
				<button class="back" type="submit">Home</button>
			</form>
		<div class="line"></div>
	</div>
</body>
</html>