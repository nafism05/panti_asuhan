<!-- Sidebar Widgets Column -->
<div class="col-md-4">


    <div class="card my-4">
        <h5 class="card-header">Post Terbaru</h5>
        <div class="list-group list-group-flush">
            <?php
            $sql = "SELECT * FROM posts LIMIT 0, 5";
            $result = mysqli_query($koneksi, $sql);
            if (!$result) { //gagal request data
                die('Error: '.mysqli_error($koneksi));
            }else{
                if (mysqli_num_rows($result) > 0) {
                    while($data = mysqli_fetch_assoc($result)){ ?>
                        <a href="/doc-offline/" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="row">
                                <div class="col-12">
                                    <img class="rounded float-left mr-3" src="/panti_asuhan/admin/thumbnail_post/<?php echo $data['gbr']; ?>" width="70" height="70">
                                    <h6 class="mb-1">Tips: 9 Cara Membaca Dokumentasi Secara Offline</h6>

                                </div>
                            </div>
                        </a>
                        <?php
                    }
                }
            }
            ?>

        </div>
    </div>

</div>
