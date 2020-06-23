<?php

if(isset($_POST['submit'])){

	include('../koneksi.php');

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tgl = $_POST['tgl'];

    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = time()."_".$_FILES['gbr']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['gbr']['size'];
    $file_tmp = $_FILES['gbr']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 10440700){
            move_uploaded_file($file_tmp, 'thumbnail_post/'.$nama);
            $sql = "INSERT INTO posts (title, content, date, gbr)
                    VALUES('$judul', '$isi', '$tgl', '$nama')";
            if(mysqli_query($koneksi, $sql)){
                header("location:post_read.php");
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }


}else{

	echo '<script>window.history.back()</script>';

}

?>
