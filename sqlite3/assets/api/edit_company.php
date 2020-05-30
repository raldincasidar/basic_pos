<?php 

	require_once 'db2.php';


	$shop_logo = base64_decode(substr($_POST['shop_logo'], 23)) ;
	$shop_name = escape_string(htmlspecialchars($_POST['shop_name']));
	$shop_tagline = escape_string(htmlspecialchars($_POST['shop_tagline']));
	$shop_logo_file = fopen('../img/shop-logo.png', 'w');
	fwrite($shop_logo_file, $shop_logo);
	fclose($shop_logo_file);


	sql_query("UPDATE settings SET settings_value = '$shop_name' WHERE settings_name = 'shop_name'");
	sql_query("UPDATE settings SET settings_value = '$shop_tagline' WHERE settings_name = 'shop_tagline'");
