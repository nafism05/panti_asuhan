<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE idadmin='$id'";

if (mysqli_query($koneksi, $sql)) {
	header("location:user_read.php");
} else {
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}
?>
