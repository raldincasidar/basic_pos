<?php 


	require_once 'db2.php';

	$product_code = escape_string(htmlspecialchars($_POST['product_code']));
	$name = escape_string(htmlspecialchars($_POST['name']));
	$sell_price = escape_string(htmlspecialchars($_POST['price']));
	$quantity_available = escape_string(htmlspecialchars($_POST['quantity']));

	sql_query("INSERT INTO products (name, sell_price, quantity_available, product_code) VALUES ('$name', '$sell_price', '$quantity_available', '$product_code')");
	?>