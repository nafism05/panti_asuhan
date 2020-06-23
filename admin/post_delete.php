<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id='$id'";

if (mysqli_query($koneksi, $sql)) {
	header("location:post_read.php");
} else {
	echo "Error: ".$sql.". ".mysqli_error($koneksi);
}
?>
