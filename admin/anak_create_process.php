<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$tmpt_lahir = $_POST['tmpt_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kelamin = $_POST['kelamin'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO anak (nis, nama, tempat_lahir, tgl_lahir, jenis_kelamin, alamat)
            VALUES('$nis', '$nama', '$tmpt_lahir', '$tgl_lahir', '$kelamin', '$alamat')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:anak_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
