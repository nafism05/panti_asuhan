<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

    $id = $_GET['idtrans'];
	$tgl = $_POST['tgl'];
	$bank = $_POST['bank'];
	$no_rek = $_POST['no_rek'];

	$sql = "UPDATE konfirmasi_donasi SET tgl_transfer='$tgl', nama_bank='$bank',
        norek='$no_rek' WHERE idtrans='$id'";

	if (mysqli_query($koneksi, $sql)) {
		header("location:konfirmasi_donasi_read.php?idtrans=".$id);
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
