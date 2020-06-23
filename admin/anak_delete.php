<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM anak WHERE idanak='$id'";

if (mysqli_query($koneksi, $sql)) {
	header("location:anak_read.php");
} else {
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}
?>
