<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM trans_donasi WHERE idtrans='$id'";

if (mysqli_query($koneksi, $sql)) {
	header("location:trans_donasi_read.php");
} else {
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}
?>
