<?php
	include('cek_login.php');
	include('../koneksi.php');

    $id = $_GET['idtrans'];

    $sql = "SELECT * FROM konfirmasi_donasi WHERE idtrans='$id'";
    $result = mysqli_query($koneksi, $sql);
    $status = FALSE;

    if(mysqli_num_rows($result) != 0){
        $status = true;

        $data = mysqli_fetch_assoc($result);
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('adm_head.php') ?>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<?php include('adm_navbar.php') ?>

		<?php include('adm_sidebar.php') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Konfirmasi Donasi</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Data Konfirmasi Donasi</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">

                                    <form class="form-horizontal">
                                        <div class="card-body">

                                            <?php if($status){ ?>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal Transfer</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: <?php echo $data['tgl_transfer']; ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Bank</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: <?php echo $data['nama_bank']; ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Rekening</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: <?php echo $data['norek']; ?></label>
                                                    </div>
                                                </div>

                                            <?php }else{ ?>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal Transfer</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: -</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Bank</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: -</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Rekening</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-form-label" style="font-weight:500;">: -</label>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                        </div>
                                    </form>


                                </div>

                                <div class="card-footer">
                                    <?php if($status){ ?>
                                        <a href="konfirmasi_donasi_update.php?idtrans=<?php echo $id ?>" class="btn btn-primary">Edit</a>
                                    <?php }else{ ?>
                                        <a href="konfirmasi_donasi_create.php?idtrans=<?php echo $id ?>" class="btn btn-primary">Konfirmasi</a>
                                    <?php } ?>
                                    <a href="trans_donasi_read.php" class="btn btn-primary">Kembali</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php include('adm_footer.php') ?>


	<?php include('adm_scripts.php') ?>

	<script>
	$(function () {
		$('#datatable').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": false,
			"info": true,
			"autoWidth": false,
		});
	});
</script>
</body>
</html>
