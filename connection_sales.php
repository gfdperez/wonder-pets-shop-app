<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "wps_sales";

	$connection_sales = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$connection){
		die("Failed to connect to the database!");
	}
