<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "wonder_pets_shop";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$connection){
		die("Failed to connect to the database!");
	}
