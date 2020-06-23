<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php include('h_head.php'); ?>

<body>

    <?php include('h_navbar.php'); ?>

  <!-- Page Content -->
  <div class="container">

      <br>
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">


        <?php

        $halaman = 10;
        $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

        $sql1 = "SELECT * FROM posts";
        $result1 = mysqli_query($koneksi, $sql1);
        $total = mysqli_num_rows($result1);

        $pages = ceil($total/$halaman);
        $sql2 = "SELECT * FROM posts LIMIT $mulai, $halaman";
        $result2 = mysqli_query($koneksi, $sql2);



        // $sql = "SELECT * FROM posts";
        //
        // $result = mysqli_query($koneksi, $sql);
        if (!$result2) { //gagal request data
            die('Error: '.mysqli_error($koneksi));
        }else{
            if (mysqli_num_rows($result2) > 0) {
                while($data = mysqli_fetch_assoc($result2)){
                    $isi = strip_tags(html_entity_decode($data['content']));
                    $isi_cut = substr($isi, 0, 150);
                    ?>

                    <!-- Blog Post -->
                    <div class="card mb-4">
                      <img class="card-img-top img-fluid" src="admin/thumbnail_post/<?php echo $data['gbr'] ?>" alt="Card image cap">
                      <div class="card-body">
                        <h2 class="card-title"><?php echo $data['title'] ?></h2>
                        <p class="card-text"><?php echo $isi_cut ?></p>
                        <a href="post_single.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
                      </div>
                      <div class="card-footer text-muted">
                        Posted on <?php echo $data['date'] ?>
                      </div>
                    </div>
                <?php }
            }
        }
        ?>



        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <!-- <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li> -->
          <?php for ($i=1; $i<=$pages ; $i++){ ?>
          <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>

          <?php } ?>
        </ul>

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
