<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

    $id = $_GET['idtrans'];
	$tgl = $_POST['tgl'];
	$bank = $_POST['bank'];
	$no_rek = $_POST['no_rek'];

	$sql = "INSERT INTO konfirmasi_donasi (idtrans, tgl_transfer, nama_bank, norek)
            VALUES('$id', '$tgl', '$bank', '$no_rek')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:konfirmasi_donasi_read.php?idtrans=".$id);
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
