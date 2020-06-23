<?php

	if(isset($_POST['submit'])){

		include('../koneksi.php');

		$username = $_POST['username'];
		$password = md5($_POST['password']);
        $role = $_POST['login_as'];

        if($role == '1'){
            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        }else{
            $sql = "SELECT * FROM donatur WHERE email='$username' AND password='$password'";
        }


		$result = mysqli_query($koneksi, $sql);

		if ($result) {
			// menghitung jumlah data yang ditemukan
			$cek = mysqli_num_rows($result);

			if($cek > 0){
				session_start();

                $data = mysqli_fetch_assoc($result);

				$_SESSION['username'] = $username;
				$_SESSION['idadmin'] = $data['idadmin'];
				$_SESSION['status'] = "login";

                if($role == '1'){
                    $_SESSION['level'] = "admin";
                }else{
                    $_SESSION['level'] = "donatur";
                }
                
                header("location:trans_donasi_read.php");

			}else{
				header("location:login.php");
			}

		} else {
			die('Error: '.mysqli_error($koneksi));
		}

	}else{

		echo '<script>window.history.back()</script>';

	}

?>
