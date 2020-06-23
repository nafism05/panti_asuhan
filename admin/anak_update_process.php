<?php
include('../koneksi.php');

if(isset($_POST['submit'])){

	$id = $_GET['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
	$tmpt_lahir = $_POST['tmpt_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kelamin = $_POST['kelamin'];
	$alamat = $_POST['alamat'];

    $sql = "UPDATE anak SET nis= '$nis', nama='$nama', tempat_lahir='$tmpt_lahir',
            tgl_lahir='$tgl_lahir', jenis_kelamin='$kelamin', alamat='$alamat' WHERE idanak='$id'";

	if (mysqli_query($koneksi, $sql)) {
		header("location:anak_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
