<?php

    // Koneksi MySQLi Procedural
	$db_host = "localhost"; //host
	$db_user = "root"; //username database
	$db_pass = ""; //password database
	$db_name = "panti_asuhan"; //nama database

	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (mysqli_connect_errno()) {
	    trigger_error('Koneksi ke database gagal: '.mysqli_connect_error(), E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal"
	}
?>
