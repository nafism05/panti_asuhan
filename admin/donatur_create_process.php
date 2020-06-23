<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

	$sql = "INSERT INTO donatur (nama, email, alamat, no_telp)
            VALUES('$nama', '$email', '$alamat', '$telp')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:donatur_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
