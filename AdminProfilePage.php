<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $admin_data = check_admin($connection);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="AdminNaviBar.css" type="text/css">
	<link rel="stylesheet" href="AdminProfilePage.css" type="text/css">
	<title>Wonder Pet Shop - Profile</title>
</head>
<body>
	<div class="wrapper">
		<div class="shop_logo">
           		<img src="Design Elements/Wonder Pets Shop Logo.png" alt="Wonder Pet Shop Logo" width="80" height="80">
        </div>
         <a href="AdminHomePage.php">
            <button class="home_button">Home</button>
        </a>
		<a href="AdminEvaluatePage.php">
            <button class="eval_button">Evaluate</button>
        </a>
        <a href="AdminProfilePage.php">
            <button class="profile_button">Admin Profile</button>
        </a>
        <div class="vertical_line">|</div>
        <a href="AdminLogoutPage.php">
            <button class="logout_button">Log Out</button>
        </a>
        
        <div class="profileheader_box">
            <div class="profileheader_text">Admin Profile</div>
        </div>

        <div class="profile_box">
            <div class="label_email">Email Address:</div>
            <div class="label_lname">Last Name:</div>
            <div class="label_fname">First Name:</div>
            <div class="label_mobile">Mobile Number:</div>
            <div class="label_home">Home Address:</div>

            <div class="value_email"><?php echo $admin_data['email'];?></div>
            <div class="value_lname"><?php echo $admin_data['last_name'];?></div>
            <div class="value_fname"><?php echo $admin_data['first_name'];?></div>
            <div class="value_mobile"><?php echo $admin_data['mobile_no'];?></div>
            <div class="value_home"><?php echo $admin_data['home_add'];?></div>
 
        </div>
    </div>

    

</body>
</html>