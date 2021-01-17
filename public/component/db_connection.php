<?php
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db = "app-aipt";

	$connection = mysqli_connect($host, $user, $pass, $db);

	if(!$connection) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>
