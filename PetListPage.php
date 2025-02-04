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
	<link rel="stylesheet" href="PetListPage.css" type="text/css">
	<title>Wonder Pet Shop - Pets List</title>
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

		<div class="listheader_box" >
        	<div class="listheader_text">wonder pets list</div>
        </div>
		<form action="AdoptPage.php">
			<button class="adoptapet_button" type="submit">Adopt a Pet</button>
		</form>
		<div class="block1" >
			<div class="pet_pic"><img src="Animals Pictures/01_Pomeranian.png" width="120" height="120"></div>
        	<div class="petname_oneline">pomeranian</div>
			<div class="prices">P 25,000</div>
        </div>
		<div class="block2" >
			<div class="pet_pic"><img src="Animals Pictures/02_Pug.png" width="120" height="120"></div>
        	<div class="petname_oneline">pug</div>
			<div class="prices">P 25,000</div>
        </div>
		<div class="block3" >
			<div class="pet_pic"><img src="Animals Pictures/03_Corgi.png" width="120" height="120"></div>
        	<div class="petname_oneline">corgi</div>
			<div class="prices">P 85,000</div>
        </div>
		<div class="block4" >
			<div class="pet_pic"><img src="Animals Pictures/04_PersianCat.png" width="120" height="120"></div>
        	<div class="petname_oneline">persian cat</div>
			<div class="prices">P 20,000</div>
        </div>
		<div class="block5" >
			<div class="pet_pic"><img src="Animals Pictures/05_BelgianCat.png" width="120" height="120"></div>
        	<div class="petname_oneline">belgian cat</div>
			<div class="prices">P 45,000</div>
        </div>
		<div class="block6" >
			<div class="pet_pic"><img src="Animals Pictures/06_SiameseCat.png" width="120" height="120"></div>
        	<div class="petname_oneline">siamese cat</div>
			<div class="prices">P 7,000</div>
        </div>
		<div class="block7" >
			<div class="pet_pic"><img src="Animals Pictures/07_Parakeets.png" width="120" height="120"></div>
        	<div class="petname_oneline">parakeets</div>
			<div class="prices">P 250</div>
        </div>
		<div class="block8" >
			<div class="pet_pic"><img src="Animals Pictures/08_Conures.png" width="120" height="120"></div>
        	<div class="petname_oneline">conures</div>
			<div class="prices">P 15,000</div>
        </div>
		<div class="block9" >
			<div class="pet_pic"><img src="Animals Pictures/09_PuntiusBarbs.png" width="120" height="120"></div>
        	<div class="petname_oneline">puntius barbs</div>
			<div class="prices">P 150</div>
        </div>
		<div class="block10" >
			<div class="pet_pic"><img src="Animals Pictures/10_Rasbora.png" width="120" height="120"></div>
        	<div class="petname_oneline">rasbora</div>
			<div class="prices">P 150</div>
        </div>
		<div class="block11" >
			<div class="pet_pic"><img src="Animals Pictures/11_CurlyHairTarantula.png" width="120" height="120"></div>
        	<div class="petname_twolines">curly hair tarantula</div>
			<div class="prices_adjusted">P 350</div>
        </div>
		<div class="block12" >
			<div class="pet_pic"><img src="Animals Pictures/12_GhostPrayingMantis.png" width="120" height="120"></div>
        	<div class="petname_twolines">ghost praying mantis</div>
			<div class="prices_adjusted">P 930</div>
        </div>
		<div class="line"></div>
		<a href="AboutLoggedIn.php">
            <button class="about">About</button>
        </a>
	</div>
</body>
</html>