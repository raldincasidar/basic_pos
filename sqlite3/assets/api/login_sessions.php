<?php 

 	if (session_id() == '') {
		session_start();
	}

	if ($_SESSION) {
		$verify = $_SESSION['verify'];
	 	$id = $_SESSION['id'];
	 	$name = $_SESSION['name'];
	 	$username = $_SESSION['username'];
	 	$email = $_SESSION['email'];
	 	$number = $_SESSION['number'];
	 	$profile_pic = $_SESSION['profile_pic'];
	 	$date_reg = $_SESSION['date_reg'];
	 	$gender = $_SESSION['gender'];
	}

 	function session_append($verify, $id, $name, $username, $email, $number, $profile_pic, $date_reg, $gender){
 		$_SESSION['verify'] = $verify;
 		$_SESSION['id'] = $id;
 		$_SESSION['name'] = $name;
 		$_SESSION['username'] = $username;
 		$_SESSION['email'] = $email;
 		$_SESSION['number'] = $number;
 		$_SESSION['profile_pic'] = $profile_pic;
 		$_SESSION['date_reg'] = $date_reg;
 		$_SESSION['gender'] = $gender;

 		return $_SESSION['verify'];
 	}

 	function securityCheck() {
 		global $verify;
 		$current_script = basename($_SERVER["SCRIPT_FILENAME"]);
 		if ($current_script == 'index.php') {
 			if (isset($verify) AND $verify == "secured_1") {
 				header('location: dashboard.php');
 			}
 		}
 		else {
 			if (!isset($verify) AND $verify != "secured_1") {
 				header('location: index.php');
 			}
 		}
 	}