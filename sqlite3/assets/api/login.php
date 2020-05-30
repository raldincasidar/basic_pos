<?php 

	require_once 'db2.php';
	require_once 'login_sessions.php';
	require_once 'error_handler.php';


	$username = escape_string(htmlspecialchars($_POST['username']));
	$password = md5($_POST['password']);


	$getMatch = sql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

	while ($info = $getMatch->fetchArray()) {
		$found_username = $info['username'];
		$found_password = $info['password'];
		$found_id = $info['id'];
		$found_name = $info['name'];
		$found_email = $info['email'];
		$found_number = $info['number'];
		$found_profile_pic = $info['profile_pic'];
		$found_date_reg = $info['date_reg'];
		$found_gender = $info['gender'];
	}

	if ($found_username == $username AND $found_password == $password) {
		session_append('secured_1', $found_id, $found_name, $found_username, $found_email, $found_number, $found_profile_pic, $found_date_reg, $found_gender);
		header('location: ../../dashboard.php');
	}
	else {
		newError("Incorrect Login Credentials . Pls try again", "Error");
		header('location: '.$_SERVER['HTTP_REFERER']);
	}
