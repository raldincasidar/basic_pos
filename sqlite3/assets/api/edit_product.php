<?php 


	require_once 'db2.php';

	$name = escape_string(htmlspecialchars($_POST['name']));
	$sell_price = escape_string(htmlspecialchars($_POST['price']));
	$quantity_available = escape_string(htmlspecialchars($_POST['quantity']));
	$id = $_POST['id'];

	sql_query("UPDATE products SET name='$name', sell_price='$sell_price',quantity_available='$quantity_available' WHERE id = '$id'");
	?>