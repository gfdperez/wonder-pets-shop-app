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
	<link rel="stylesheet" href="NaviBar.css" type="text/css">
	<link rel="stylesheet" href="HomePage.css" type="text/css">
	<title>Wonder Pet Shop - Home</title>
</head>
<body>
	<div class="wrapper">
		<div class="shop_logo">
           		<img src="Design Elements/Wonder Pets Shop Logo.png" alt="Wonder Pet Shop Logo" width="80" height="80">
        </div>
        <a href="index.php">
            <button class="home_button">Home</button>
        </a>
        <a href="PetListPage.php">
            <button class="petlist_button">Pets List</button>
        </a>
        <a href="AdoptPage.php">
            <button class="adopt_button">Adopt</button>
        </a>
        <a href="PendingUserPage.php">
            <button class="pending_button">Pending</button>
        </a>
        <a href="UserProfilePage.php">
            <button class="profile_button">Profile</button>
        </a>
        <div class="vertical_line">|</div>
        <a href="UserLogoutPage.php">
            <button class="logout_button">Log Out</button>
        </a>

        <div class="pets_bg">
           		<img src="Design Elements/Pets BG.png" alt="Pet Animals">
        </div>
        <div class="shopname_box">
        	<div class="shopname_text">wonder pets shop</div>
        </div>
        <form action="PetListPage.php">
			<button class="seepetslist_button" type="submit">See Pets List</button>
		</form>
		<div class="line"></div>
		<a href="AboutLoggedIn.php">
            <button class="about">About</button>
        </a>
	</div>
</body>
</html>