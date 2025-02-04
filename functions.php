<?php 

	function check_login($connection){

		if(isset($_SESSION['customer_id'])){
			$id = $_SESSION['customer_id'];
			$login_query = "select * from customers where customer_id = '$id' limit 1";

			$result_out = mysqli_query($connection, $login_query);
			if($result_out && mysqli_num_rows($result_out) > 0){
				$customer_data = mysqli_fetch_assoc($result_out);
				return $customer_data;
			}
		}

		header("Location: UserLoginPage.php");
		die();
	}

	function check_admin($connection){

		if(isset($_SESSION['admin_id'])){
			$id = $_SESSION['admin_id'];
			$login_query = "select * from admin where admin_id = '$id' limit 1";

			$result_out = mysqli_query($connection, $login_query);
			if($result_out && mysqli_num_rows($result_out) > 0){
				$admin_data = mysqli_fetch_assoc($result_out);
				return $admin_data;
			}
		}

		header("Location: AdminLoginPage.php");
		die();
	}

	function check_input($data){
		//Function that the filters input data from unnecessary characters
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function random_number($length){
		$text = "";
		if ($length < 8){
			$length = 8;
		}

		$len = rand(4, $length);

		for ($i = 0; $i < $len; $i++) { 
			$text .= rand(0, 9);
		}

		return $text;
	}