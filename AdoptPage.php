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
	<link rel="stylesheet" href="NaviBar.css">
	<link rel="stylesheet" href="AdoptPage.css">
	<title>Wonder Pet Shop - Adopt</title>
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

		<div class="adopt_header" >
        	<div class="adopt_text">adopt the pet of your choice</div>
        </div>
		<div class="bg_box" >
        	<div class="check_if_adopting">check if adopting</div>
			<div class="animal">animal</div>
			<div class="price">price</div>
			<div class="enter_the_quantity">enter the quantity</div>
			<div class="animalval1">pomeranian</div>
			<div class="animalval2">pug</div>
			<div class="animalval3">corgi</div>
			<div class="animalval4">persian cat</div>
			<div class="animalval5">belgian cat</div>
			<div class="animalval6">siamese cat</div>
			<div class="animalval7">parakeets</div>
			<div class="animalval8">conures</div>
			<div class="animalval9">puntius barbs</div>
			<div class="animalval10">rasbora</div>
			<div class="animalval11">curly hair tarantula</div>
			<div class="animalval12">ghost praying mantis</div>
			<div class="priceval1">P25,000.00</div>
			<div class="priceval2">P25,000.00</div>
			<div class="priceval3">P85,000.00</div>
			<div class="priceval4">P20,000.00</div>
			<div class="priceval5">P45,000.00</div>
			<div class="priceval6">P7,000.00</div>
			<div class="priceval7">P250.00</div>
			<div class="priceval8">P15,000.00</div>
			<div class="priceval9">P150.00</div>
			<div class="priceval10">P150.00</div>
			<div class="priceval11">P350.00</div>
			<div class="priceval12">P930.00</div>
			<form method="get" action="FinalTransactionPage.php">
				<input class="input_check1" type="checkbox" name="check1"/>
				<input class="input_check2" type="checkbox" name="check2"/>
				<input class="input_check3" type="checkbox" name="check3"/>
				<input class="input_check4" type="checkbox" name="check4"/>
				<input class="input_check5" type="checkbox" name="check5"/>
				<input class="input_check6" type="checkbox" name="check6"/>
				<input class="input_check7" type="checkbox" name="check7"/>
				<input class="input_check8" type="checkbox" name="check8"/>
				<input class="input_check9" type="checkbox" name="check9"/>
				<input class="input_check10" type="checkbox" name="check10"/>
				<input class="input_check11" type="checkbox" name="check11"/>
				<input class="input_check12" type="checkbox" name="check12"/>
				<input class="input_quantity1" type="number" name="quantity1" placeholder="quantity"/>
				<input class="input_quantity2" type="number" name="quantity2" placeholder="quantity"/>
				<input class="input_quantity3" type="number" name="quantity3" placeholder="quantity"/>
				<input class="input_quantity4" type="number" name="quantity4" placeholder="quantity"/>
				<input class="input_quantity5" type="number" name="quantity5" placeholder="quantity"/>
				<input class="input_quantity6" type="number" name="quantity6" placeholder="quantity"/>
				<input class="input_quantity7" type="number" name="quantity7" placeholder="quantity"/>
				<input class="input_quantity8" type="number" name="quantity8" placeholder="quantity"/>
				<input class="input_quantity9" type="number" name="quantity9" placeholder="quantity"/>
				<input class="input_quantity10" type="number" name="quantity10" placeholder="quantity"/>
				<input class="input_quantity11" type="number" name="quantity11" placeholder="quantity"/>
				<input class="input_quantity12" type="number" name="quantity12" placeholder="quantity"/>
				<button class="submit_box" type="submit">Submit</button>
			</form>
			<?php if(isset($_GET['error'])) { ?>
				<div class="error_box"><div class="error_mess"><?php echo $_GET['error']; ?></div></div>
			<?php } ?>
			<a href="PetListPage.php">
				<button class="cancel_box" type="submit">Cancel</button>
			</a>
        </div>
		<div class="line"></div>
		<a href="AboutLoggedIn.php">
            <button class="about">About</button>
        </a>
	</div>
</body>
</html>