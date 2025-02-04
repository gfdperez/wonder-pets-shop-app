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
	<link rel="stylesheet" href="PendingUserPage.css" type="text/css">
	<title>Wonder Pet Shop - Pending List</title>
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

		<div class="header_box" >
        	<div class="header_text">your pending transactions</div>
        </div>
		<table class = "table">
		<?php
			$select_query = "select * from pending where Customer_ID = '$customer_data[customer_id]'";
			$match = mysqli_query($connection_sales, $select_query);
			$counter = 0;
			
			while ($array = mysqli_fetch_array($match)) {
				if ($counter == 0)
					echo '<tr><td></td><td></td><td></td><td class = "transaction">' ."Transaction ID: " .$array["ID"] .'</td><td></td><td></td><td></td></tr>';
				else {
					echo '<tr><td class = "type"></td></tr>';
					echo '<tr><td class = "type"></td></tr>';
					echo '<tr class = "transaction"><td></td><td></td><td></td><td>' ."Transaction ID: " .$array["ID"] .'</td><td></td><td></td><td></td></tr>';
				}
				
				echo '<tr><td class = "type"></td></tr>';
				echo '<tr><td class = "type">' ."Animal" .'</td><td class = "type"></td><td class = "type">' ."Price" .'</td><td class = "type"></td><td class = "type">' ."Quantity" .'</td><td class = "type"></td><td class = "type">' ."Subtotal" .'</td>';
				
				if ($array["Pomeranian"] != 0)
					echo '<tr><td class = "content">' ."Pomeranian" .'</td><td class = "content"></td><td class = "content">' ."25000" .'</td><td class = "content"></td><td class = "content">' .$array["Pomeranian"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal1"] .'</td>';
				if ($array["Pug"] != 0)
					echo '<tr><td class = "content">' ."Pug" .'</td><td class = "content"></td><td class = "content">' ."25000" .'</td><td class = "content"></td><td class = "content">' .$array["Pug"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal2"] .'</td>';
				if ($array["Corgi"] != 0)
					echo '<tr><td class = "content">' ."Corgi" .'</td><td class = "content"></td><td class = "content">' ."85000" .'</td><td class = "content"></td><td class = "content">' .$array["Corgi"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal3"] .'</td>';
				if ($array["Persian"] != 0)
					echo '<tr><td class = "content">' ."Persian Cat" .'</td><td class = "content"></td><td class = "content">' ."20000" .'</td><td class = "content"></td><td class = "content">' .$array["Persian"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal4"] .'</td>';
				if ($array["Belgian"] != 0)
					echo '<tr><td class = "content">' ."Belgian Cat" .'</td><td class = "content"></td><td class = "content">' ."45000" .'</td><td class = "content"></td><td class = "content">' .$array["Belgian"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal5"] .'</td>';
				if ($array["Siamese"] != 0)
					echo '<tr><td class = "content">' ."Siamese Cat" .'</td><td class = "content"></td><td class = "content">' ."7000" .'</td><td class = "content"></td><td class = "content">' .$array["Siamese"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal6"] .'</td>';
				if ($array["Parakeets"] != 0)
					echo '<tr><td class = "content">' ."Parakeets" .'</td><td class = "content"></td><td class = "content">' ."250" .'</td><td class = "content"></td><td class = "content">' .$array["Parakeets"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal7"] .'</td>';
				if ($array["Conures"] != 0)
					echo '<tr><td class = "content">' ."Conures" .'</td><td class = "content"></td><td class = "content">' ."15000" .'</td><td class = "content"></td><td class = "content">' .$array["Conures"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal8"] .'</td>';
				if ($array["Puntius"] != 0)
					echo '<tr><td class = "content">' ."Puntius Barbs" .'</td><td class = "content"></td><td class = "content">' ."150" .'</td><td class = "content"></td><td class = "content">' .$array["Puntius"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal9"] .'</td>';
				if ($array["Rasbora"] != 0)
					echo '<tr><td class = "content">' ."Rasbora" .'</td><td class = "content"></td><td class = "content">' ."150" .'</td><td class = "content"></td><td class = "content">' .$array["Rasbora"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal10"] .'</td>';
				if ($array["Tarantula"] != 0)
					echo '<tr><td class = "content">' ."Curly Hair Tarantula" .'</td><td class = "content"></td><td class = "content">' ."350" .'</td><td class = "content"></td><td class = "content">' .$array["Tarantula"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal11"] .'</td>';
				if ($array["Mantis"] != 0)
					echo '<tr><td class = "content">' ."Ghost Praying Mantis" .'</td><td class = "content"></td><td class = "content">' ."930" .'</td><td class = "content"></td><td class = "content">' .$array["Mantis"] .'</td><td class = "content"></td><td class = "content">' .$array["Subtotal12"] .'</td>';
				
				echo '<tr><td class = "type"></td></tr>';
				echo '<tr><td></td><td></td><td></td><td></td><td></td><td class = "type">' ."Total Price:" .'</td><td class = "content">' .$array["Total_Price"] .'</td></tr>';
				
				$counter++;
			}
		?>
		</table>
	</div>
</body>
</html>