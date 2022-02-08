<?php

	$server = "localhost"; //host
	$username = "root"; //user
	$password = ""; //password
	$database = "db_absensi"; //db

	mysql_connect($server, $username, $password);
	mysql_select_db($database) or die('Database tidak ditemukan');
	
?>