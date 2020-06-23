<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

    $id = $_GET['idadmin'];
	$nama_asrama = $_POST['nama_asrama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$sql = "INSERT INTO asrama (idadmin, nama_asrama, alamat, no_telp)
            VALUES('$id', '$nama_asrama', '$alamat', '$no_telp')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:user_asrama_read.php?idadmin=".$id);
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
