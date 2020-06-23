<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

    $id = $_GET['idadmin'];
	$nama_asrama = $_POST['nama_asrama'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];

	$sql = "UPDATE asrama SET nama_asrama='$nama_asrama', alamat='$alamat',
        no_telp='$no_telp' WHERE idadmin='$id'";

	if (mysqli_query($koneksi, $sql)) {
		header("location:user_asrama_read.php?idadmin=".$id);
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
