<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

	$tgl = $_POST['tgl'];
	$donatur = $_POST['donatur'];
	$akad = $_POST['akad'];
    $status = $_POST['status'];
    $doa = $_POST['doa'];
    $ket = $_POST['ket'];
    $jenis_barang = $_POST['jenis_barang'];
    $nominal = $_POST['nominal'];
    $amanah = $_POST['amanah'];

	$sql = "INSERT INTO trans_donasi (tanggal, iddonatur, akad, status, doa, ket, jenis_barang, nominal, amanah)
            VALUES('$tgl', '$donatur', '$akad', '$status', '$doa', '$ket', '$jenis_barang', '$nominal', '$amanah')";

	if (mysqli_query($koneksi, $sql)) {
		header("location:trans_donasi_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>
