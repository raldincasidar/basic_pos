<?php 

	require_once 'db2.php';

	$spending_name = escape_string(htmlspecialchars($_POST['spending_name']));
	$spent = escape_string(htmlspecialchars($_POST['spent']));
	$date_spent = date('F d, Y');
	$note = escape_string(htmlspecialchars($_POST['note']));

	sql_query("INSERT INTO expenses (name, spent, date_spent, note) VALUES ('$spending_name', '$spent', '$date_spent', '$note')");