<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
    $password = md5($_POST['password']);
	$level = $_POST['level'];
	$status = $_POST['stat'];

	$sql = "INSERT INTO admin (nip, nama_lengkap, username, password, level, stat) VALUES('$nip', '$nama', '$username', '$password', '$level', '$status')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:user_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
