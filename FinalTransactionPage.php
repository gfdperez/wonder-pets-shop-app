<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $customer_data = check_login($connection);
	
	include("connection_sales.php");

	if (isset($_REQUEST["check1"])){
		if (empty($_REQUEST["quantity1"])) {
			$quantity1 = 0;
			$subtotal1 = $quantity1 * 25000;
		}
		else {
			$quantity1 = $_REQUEST["quantity1"];
			$subtotal1 = $quantity1 * 25000;
		}
	}
	else{
		$quantity1 = 0;
		$subtotal1 = 0;
	}
	
	if (isset($_REQUEST["check2"])){
		if (empty($_REQUEST["quantity2"])) {
			$quantity2 = 0;
			$subtotal2 = $quantity2 * 25000;
		}
		else {
			$quantity2 = $_REQUEST["quantity2"];
			$subtotal2 = $quantity2 * 25000;
		}
	}
	else{
		$quantity2 = 0;
		$subtotal2 = 0;
	}
	
	if (isset($_REQUEST["check3"])){
		if (empty($_REQUEST["quantity3"])) {
			$quantity3 = 0;
			$subtotal3 = $quantity3 * 85000;
		}
		else {
			$quantity3 = $_REQUEST["quantity3"];
			$subtotal3 = $quantity3 * 85000;
		}
	}
	else{
		$quantity3 = 0;
		$subtotal3 = 0;
	}
	
	if (isset($_REQUEST["check4"])){
		if (empty($_REQUEST["quantity4"])) {
			$quantity4 = 0;
			$subtotal4 = $quantity4 * 20000;
		}
		else {
			$quantity4 = $_REQUEST["quantity4"];
			$subtotal4 = $quantity4 * 20000;
		}
	}
	else{
		$quantity4 = 0;
		$subtotal4 = 0;
	}
	
	if (isset($_REQUEST["check5"])){
		if (empty($_REQUEST["quantity5"])) {
			$quantity5 = 0;
			$subtotal5 = $quantity5 * 45000;
		}
		else {
			$quantity5 = $_REQUEST["quantity5"];
			$subtotal5 = $quantity5 * 45000;
		}
	}
	else{
		$quantity5 = 0;
		$subtotal5 = 0;
	}
	
	if (isset($_REQUEST["check6"])){
		if (empty($_REQUEST["quantity6"])) {
			$quantity6 = 0;
			$subtotal6 = $quantity6 * 7000;
		}
		else {
			$quantity6 = $_REQUEST["quantity6"];
			$subtotal6 = $quantity6 * 7000;
		}
	}
	else{
		$quantity6 = 0;
		$subtotal6 = 0;
	}
	
	if (isset($_REQUEST["check7"])){
		if (empty($_REQUEST["quantity7"])) {
			$quantity7 = 0;
			$subtotal7 = $quantity7 * 250;
		}
		else {
			$quantity7 = $_REQUEST["quantity7"];
			$subtotal7 = $quantity7 * 250;
		}
	}
	else{
		$quantity7 = 0;
		$subtotal7 = 0;
	}
	
	if (isset($_REQUEST["check8"])){
		if (empty($_REQUEST["quantity8"])) {
			$quantity8 = 0;
			$subtotal8 = $quantity8 * 15000;
		}
		else {
			$quantity8 = $_REQUEST["quantity8"];
			$subtotal8 = $quantity8 * 15000;
		}
	}
	else{
		$quantity8 = 0;
		$subtotal8 = 0;
	}
	
	if (isset($_REQUEST["check9"])){
		if (empty($_REQUEST["quantity9"])) {
			$quantity9 = 0;
			$subtotal9 = $quantity9 * 150;
		}
		else {
			$quantity9 = $_REQUEST["quantity9"];
			$subtotal9 = $quantity9 * 150;
		}
	}
	else{
		$quantity9 = 0;
		$subtotal9 = 0;
	}
	
	if (isset($_REQUEST["check10"])){
		if (empty($_REQUEST["quantity10"])) {
			$quantity10 = 0;
			$subtotal10 = $quantity10 * 150;
		}
		else {
			$quantity10 = $_REQUEST["quantity10"];
			$subtotal10 = $quantity10 * 150;
		}
	}
	else{
		$quantity10 = 0;
		$subtotal10 = 0;
	}
				
	if (isset($_REQUEST["check11"])){
		if (empty($_REQUEST["quantity11"])) {
			$quantity11 = 0;
			$subtotal11 = $quantity11 * 350;
		}
		else {
			$quantity11 = $_REQUEST["quantity11"];
			$subtotal11 = $quantity11 * 350;
		}
	}
	else{
		$quantity11 = 0;
		$subtotal11 = 0;
	}
		
	if (isset($_REQUEST["check12"])){
		if (empty($_REQUEST["quantity12"])) {
			$quantity12 = 0;
			$subtotal12 = $quantity12 * 930;
		}
		else {
			$quantity12 = $_REQUEST["quantity12"];
			$subtotal12 = $quantity12 * 930;
		}
	}
	else{
		$quantity12 = 0;
		$subtotal12 = 0;
	}
				
	$total = $subtotal1 + $subtotal2 + $subtotal3 + $subtotal4 + $subtotal5 + $subtotal6 + $subtotal7 + $subtotal8 + $subtotal9 + $subtotal10 + $subtotal11 + $subtotal12;
	
	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		if ($total == 0)
			header("Location: AdoptPage.php?error=No Animal Selected/Zero Quantity Order");
	}
	else if ($_SERVER['REQUEST_METHOD'] == "POST"){
		$pending_query = "insert into pending(Customer_ID, Pomeranian, Subtotal1, Pug, Subtotal2, Corgi, Subtotal3, Persian, 
			Subtotal4, Belgian, Subtotal5, Siamese, Subtotal6, Parakeets, Subtotal7, Conures, Subtotal8, Puntius, Subtotal9, 
			Rasbora, Subtotal10, Tarantula, Subtotal11, Mantis, Subtotal12, Total_Price) values('$customer_data[customer_id]', 
			'$quantity1', '$subtotal1', '$quantity2', '$subtotal2', '$quantity3', '$subtotal3', '$quantity4', '$subtotal4', '$quantity5', '$subtotal5', 
			'$quantity6', '$subtotal6', '$quantity7', '$subtotal7', '$quantity8', '$subtotal8', '$quantity9', '$subtotal9', '$quantity10', '$subtotal10', 
			'$quantity11', '$subtotal11', '$quantity12', '$subtotal12', '$total')";
		mysqli_query($connection_sales, $pending_query);
		header("Location: PendingUserPage.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="NaviBar.css">
	<link rel="stylesheet" href="FinalTransactionPage.css">
	<title>Wonder Pet Shop - Final Transaction</title>
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
        	<div class="header_text">finalize your transaction</div>
        </div>
		<div class="block" >
			<div class="animal">animal</div>
			<div class="price">price</div>
			<div class="quantity">quantity</div>
			<div class="subtotal">subtotal</div>
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
			<div class="quantityval1"><?php echo "$quantity1"; ?></div>
			<div class="quantityval2"><?php echo "$quantity2"; ?></div>
			<div class="quantityval3"><?php echo "$quantity3"; ?></div>
			<div class="quantityval4"><?php echo "$quantity4"; ?></div>
			<div class="quantityval5"><?php echo "$quantity5"; ?></div>
			<div class="quantityval6"><?php echo "$quantity6"; ?></div>
			<div class="quantityval7"><?php echo "$quantity7"; ?></div>
			<div class="quantityval8"><?php echo "$quantity8"; ?></div>
			<div class="quantityval9"><?php echo "$quantity9"; ?></div>
			<div class="quantityval10"><?php echo "$quantity10"; ?></div>
			<div class="quantityval11"><?php echo "$quantity11"; ?></div>
			<div class="quantityval12"><?php echo "$quantity12"; ?></div>
			<div class="subtotalval1"><?php echo "P{$subtotal1}.00"; ?></div>
			<div class="subtotalval2"><?php echo "P{$subtotal2}.00"; ?></div>
			<div class="subtotalval3"><?php echo "P{$subtotal3}.00"; ?></div>
			<div class="subtotalval4"><?php echo "P{$subtotal4}.00"; ?></div>
			<div class="subtotalval5"><?php echo "P{$subtotal5}.00"; ?></div>
			<div class="subtotalval6"><?php echo "P{$subtotal6}.00"; ?></div>
			<div class="subtotalval7"><?php echo "P{$subtotal7}.00"; ?></div>
			<div class="subtotalval8"><?php echo "P{$subtotal8}.00"; ?></div>
			<div class="subtotalval9"><?php echo "P{$subtotal9}.00"; ?></div>
			<div class="subtotalval10"><?php echo "P{$subtotal10}.00"; ?></div>
			<div class="subtotalval11"><?php echo "P{$subtotal11}.00"; ?></div>
			<div class="subtotalval12"><?php echo "P{$subtotal12}.00"; ?></div>
			<div class="totalprice">total price:</div>
			<div class="totalpriceval"><?php echo "P{$total}.00"; ?></div>
        </div>
		<a href="AdoptPage.php">
			<button class="cancel_box" type="submit">Cancel</button>
		</a>
		<form method="post">
			<button class="submit_box" type="submit">Submit</button>
		</form>
		<div class="line"></div>
		<a href="AboutLoggedIn.php">
            <button class="about">About</button>
        </a>
	</div>
</body>
</html>