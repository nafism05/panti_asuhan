
<?php
include('koneksi.php');
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) == 0){

    echo '<script>window.history.back()</script>';

}else{

    $data = mysqli_fetch_assoc($result);

}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('h_head.php'); ?>

<body>

    <?php include('h_navbar.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4"><?php echo $data['title']; ?></h1>


                <hr>

                <!-- Date/Time -->
                <p>Posted on <?php echo $data['title']; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="admin/thumbnail_post/<?php echo $data['gbr'] ?>" alt="">

                <hr>

                <!-- Post Content -->
                <?php echo $data['content']; ?>

                <hr>




            </div>



            <?php include('h_sidebar.php'); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include('h_footer.php'); ?>

    <?php include('h_scripts.php'); ?>

</body>

</html>
