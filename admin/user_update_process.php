<?php
include('../koneksi.php');

if(isset($_POST['submit'])){

	$id = $_GET['id'];
    $nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
    // if($_POST['password']){
    //     $password = md5($_POST['password']);
    // }else{
    //     $password = '';
    // }
	$level = $_POST['level'];
	$status = $_POST['stat'];

	if(!empty($_POST['password'])){
		$password = md5($_POST['password']);
		$sql = "UPDATE admin SET nip='$nip', nama_lengkap='$nama',
            username='$username', password='$password', level='$level', stat='$status' WHERE idadmin='$id'";
	}else{
        $sql = "UPDATE admin SET nip='$nip', nama_lengkap='$nama',
            username='$username', level='$level', stat='$status' WHERE idadmin='$id'";
	}

	if (mysqli_query($koneksi, $sql)) {
		header("location:user_read.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
