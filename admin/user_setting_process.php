<?php
include('../koneksi.php');

if(isset($_POST['submit'])){

	$id = $_GET['id'];

	if(!empty($_POST['password'])){
		$password = md5($_POST['password']);
        if($_SESSION['level']=='admin'){
    		$sql = "UPDATE admin SET password='$password' WHERE idadmin='$id'";
        }else{
            $sql = "UPDATE donatur SET password='$password' WHERE iddonatur='$id'";
        }
	}

	if (mysqli_query($koneksi, $sql)) {
		header("location:user_setting.php");
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
