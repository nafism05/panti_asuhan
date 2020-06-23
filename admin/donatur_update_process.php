<?php
include('../koneksi.php');

if(isset($_POST['submit'])){

	$id = $_GET['id'];
    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $sql = "UPDATE donatur SET nama='$nama', email='$email',
            alamat='$alamat', no_telp='$telp' WHERE iddonatur='$id'";

	if (mysqli_query($koneksi, $sql)) {
		header("location:donatur_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
