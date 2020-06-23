<?php
include('../koneksi.php');

if(isset($_POST['submit'])){

    $id = $_GET['id'];
    $tgl = $_POST['tgl'];
	$donatur = $_POST['donatur'];
	$akad = $_POST['akad'];
    $status = $_POST['status'];
    $doa = $_POST['doa'];
    $ket = $_POST['ket'];
    $jenis_barang = $_POST['jenis_barang'];
    $nominal = $_POST['nominal'];
    $amanah = $_POST['amanah'];

    $sql = "UPDATE trans_donasi SET tanggal='$tgl', iddonatur='$donatur', akad='$akad', status='$status',
            doa='$doa', ket='$ket', jenis_barang='$jenis_barang', nominal='$nominal', amanah='$amanah' WHERE idtrans='$id'";

	if (mysqli_query($koneksi, $sql)) {
		header("location:trans_donasi_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
