<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM donatur WHERE iddonatur='$id'";

if (mysqli_query($koneksi, $sql)) {
	header("location:donatur_read.php");
} else {
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}
?>
