<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $admin_data = check_admin($connection);
	
	include("connection_sales.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$ID = $_POST["ID"];
		
		if (isset($_POST["decline"])) {
			$select_query = "select * from pending where ID = '$ID'";
			$match = mysqli_query($connection_sales, $select_query);
			
			if (!empty($_POST["ID"])) {
				if ($match) {
					if($match && mysqli_num_rows($match) > 0) {
						$drop_query = "delete from pending where ID='$_POST[ID]'";
						mysqli_query($connection_sales, $drop_query);
						
						header("Location: AdminEvaluatePage.php?success=Transaction successfully declined.");
					}
					else
						header("Location: AdminEvaluatePage.php?error=Transaction ID does not exist!");
				}
			}
			else
				header("Location: AdminEvaluatePage.php?error=Transaction ID is required!");
		}
		else if (isset($_POST["accept"])) {
			$select_query = "select * from pending where ID = '$ID'";
			$match = mysqli_query($connection_sales, $select_query);
			
			if (!empty($_POST["ID"])) {
				if ($match) {
					if($match && mysqli_num_rows($match) > 0) {
						$array = mysqli_fetch_array($match);
						$accept_query = "insert into accepted(ID, Customer_ID, Pomeranian, Subtotal1, Pug, Subtotal2, Corgi, Subtotal3, Persian, 
							Subtotal4, Belgian, Subtotal5, Siamese, Subtotal6, Parakeets, Subtotal7, Conures, Subtotal8, Puntius, Subtotal9, 
							Rasbora, Subtotal10, Tarantula, Subtotal11, Mantis, Subtotal12, Total_Price) values('$array[ID]', 
							'$array[Customer_ID]', '$array[Pomeranian]', '$array[Subtotal1]', '$array[Pug]', '$array[Subtotal2]', '$array[Corgi]', '$array[Subtotal3]', '$array[Persian]', '$array[Subtotal4]', '$array[Belgian]', 
							'$array[Subtotal5]', '$array[Siamese]', '$array[Subtotal6]', '$array[Parakeets]', '$array[Subtotal7]', '$array[Conures]', '$array[Subtotal8]', '$array[Puntius]', '$array[Subtotal9]', '$array[Rasbora]', 
							'$array[Subtotal10]', '$array[Tarantula]', '$array[Subtotal11]', '$array[Mantis]', '$array[Subtotal12]', '$array[Total_Price]')";
						mysqli_query($connection_sales, $accept_query);
									
						$drop_query = "delete from pending where ID='$_POST[ID]'";
						mysqli_query($connection_sales, $drop_query);
						
						header("Location: AdminEvaluatePage.php?success=Transaction successfully accepted!");
					}
					else
						header("Location: AdminEvaluatePage.php?error=Transaction ID does not exist!");
				}
			}
			else
				header("Location: AdminEvaluatePage.php?error=Transaction ID is required!");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="AdminNaviBar.css" type="text/css">
	<link rel="stylesheet" href="AdminEvaluatePage.css" type="text/css">
	<title>Wonder Pet Shop - Evaluate</title>
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
		<div class="header_box" >
        	<div class="header_text">evaluate pending transactions</div>
        </div>
		
		<table class="table">
		<?php
			$select_query = "select * from pending";
			$match = mysqli_query($connection_sales, $select_query);
			$counter = 0;
			
			echo '<tr><td class="type">' ."Transaction ID" .'</td><td class="type"></td><td class="type">' ."Date of Transaction" .'</td></tr>';
			echo '<tr><td class="content"></td></tr>';
			
			while ($array = mysqli_fetch_array($match)) {
				if ($counter == 0)
					echo '<tr><td class = "content">' .$array["ID"] .'</td><td class = "content"></td><td class = "content">' .$array["Date"];
				else {
					echo '<tr><td class="content"></td></tr>';
					echo '<tr><td class = "content">' .$array["ID"] .'</td><td class = "content"></td><td class = "content">' .$array["Date"];
				}
					
				$counter++;
			}
		?>
		</table>
		
		<form method="post">
			<input type="number" name="ID" placeholder="enter transaction id"/>
			<?php if(isset($_GET['error'])) { ?>
					<div class="error_box"><div class="error_mess"><?php echo $_GET['error']; ?></div></div>
			<?php } elseif (isset($_GET['success'])) { ?>
					<div class="success_box"><div class="success_mess"><?php echo $_GET['success']; ?></div></div>
			<?php } ?>
			<button class="decline_box" type="submit" name="decline">Decline</button>
			<button class="accept_box" type="submit" name="accept">Accept</button>
		</form>
	</div>
</body>
</html>