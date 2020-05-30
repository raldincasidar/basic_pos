<?php 


	require_once 'db2.php';

	$id = $_POST['id'];

	sql_query("DELETE from products WHERE id = '$id'");
	?>