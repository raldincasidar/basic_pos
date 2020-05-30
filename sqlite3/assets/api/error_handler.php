<?php 

	if (session_id() == '') {
		session_start();
	}

	if (isset($_SESSION['error_report']) AND isset($_SESSION['error_type'])) {
		if ($_SESSION['error_type'] == "Error") {
			$__error = "red";
		}
		if ($_SESSION['error_type'] == "Warning") {
			$__error = "orange";
		}
		if ($_SESSION['error_type'] == "Notice") {
			$__error = "yellow grey-text text-darken-4";
		}
		if ($_SESSION['error_type'] == "Success") {
			$__error = "green";
		}
		echo "<script>M.toast({html: '".$_SESSION['error_report']."', classes: '".$__error." darken-1'})</script>";
		unset($_SESSION['error_report']);
		unset($_SESSION['error_type']);
	}

	function newError($error_report, $error_type) {
		$_SESSION['error_report'] = $error_report;
		$_SESSION['error_type'] = $error_type;
	}