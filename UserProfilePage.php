<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $customer_data = check_login($connection);
	
	include("connection_sales.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="NaviBar.css" type="text/css">
	<link rel="stylesheet" href="UserProfilePage.css" type="text/css">
	<title>Wonder Pet Shop - Profile</title>
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
        
        <div class="profileheader_box">
            <div class="profileheader_text">Your Profile</div>
        </div>

        <div class="profile_box">
            <div class="label_email">Email Address:</div>
            <div class="label_lname">Last Name:</div>
            <div class="label_fname">First Name:</div>
            <div class="label_mobile">Mobile Number:</div>
            <div class="label_home">Home Address:</div>
            <div class="label_recent">Recent Acquired Pets:</div>

            <div class="value_email"><?php echo $customer_data['email'];?></div>
            <div class="value_lname"><?php echo $customer_data['last_name'];?></div>
            <div class="value_fname"><?php echo $customer_data['first_name'];?></div>
            <div class="value_mobile"><?php echo $customer_data['mobile_no'];?></div>
            <div class="value_home"><?php echo $customer_data['home_add'];?></div>
            
			<?php
				$select_query = "select * from accepted where Customer_ID = '$customer_data[customer_id]' order by date DESC limit 3";
				$match = mysqli_query($connection_sales, $select_query);
				$recent = array("placeholder1", "placeholder2", "placeholder3");
				$counter = 0;
				
				if ($match && mysqli_num_rows($match) > 0) {
					while ($array = mysqli_fetch_array($match)) {
						if ($array['Pomeranian'] != 0 && $counter != 3) {
							$recent[$counter] = "Pomeranian";
							$counter++;
						}
						if ($array["Pug"] != 0 && $counter != 3) {
							$recent[$counter] = "Pug";
							$counter++;
						}
						if ($array["Corgi"] != 0 && $counter != 3) {
							$recent[$counter] = "Corgi";
							$counter++;
						}
						if ($array["Persian"] != 0 && $counter != 3) {
							$recent[$counter] = "Persian Cat";
							$counter++;
						}
						if ($array["Belgian"] != 0 && $counter != 3) {
							$recent[$counter] = "Belgian Cat";
							$counter++;
						}
						if ($array["Siamese"] != 0 && $counter != 3) {
							$recent[$counter] = "Siamese Cat";
							$counter++;
						}
						if ($array["Parakeets"] != 0 && $counter != 3) {
							$recent[$counter] = "Parakeets";
							$counter++;
						}
						if ($array["Conures"] != 0 && $counter != 3) {
							$recent[$counter] = "Conures";
							$counter++;
						}
						if ($array["Puntius"] != 0 && $counter != 3) {
							$recent[$counter] = "Puntius Barbs";
							$counter++;
						}
						if ($array["Rasbora"] != 0 && $counter != 3) {
							$recent[$counter] = "Rasbora";
							$counter++;
						}
						if ($array["Tarantula"] != 0 && $counter != 3) {
							$recent[$counter] = "Curly Hair Tarantula";
							$counter++;
						}
						if ($array["Mantis"] != 0 && $counter != 3) {
							$recent[$counter] = "Ghost Praying Mantis";
							$counter++;
						}
					}
				}
			?>
			<?php if ($counter == 1) { ?>
				<div class="value_recent"><?php echo $recent[0]?></div>
			<?php } else if ($counter == 2) { ?>
				<div class="value_recent"><?php echo $recent[0] ." | " .$recent[1]?></div>
			<?php } else if ($counter == 3) { ?>
				<div class="value_recent"><?php echo $recent[0] ." | " .$recent[1] ." | " .$recent[2]?></div>
			<?php } else if ($counter == 0) { ?>
				<div class="value_recent"><?php echo "None"?></div>
			<?php } ?>
        </div>
    </div>

    

</body>
</html>