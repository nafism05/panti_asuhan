<?php
	include('cek_login.php');
	include('../koneksi.php');

    $id = $_GET['idtrans'];

    $sql = "SELECT * FROM konfirmasi_donasi WHERE idtrans='$id'";
    $result = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($result) == 0){

    	echo '<script>window.history.back()</script>';

    }else{

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
							<h1 class="m-0 text-dark">Edit Konfirmasi Donasi</h1>
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
									<h3 class="card-title">Form Edit Konfirmasi Donasi</h3>
								</div>
								<!-- /.card-header -->

								<form role="form" method="post" action="konfirmasi_donasi_update_process.php?idtrans=<?php echo $id ?>">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Tanggal Transfer</label>
													<input type="text" name="tgl" class="form-control" value="<?php echo $data['tgl_transfer'] ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nama Bank</label>
													<input type="text" name="bank" class="form-control" value="<?php echo $data['nama_bank'] ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>No Rekening</label>
													<input type="text" name="no_rek" class="form-control" value="<?php echo $data['norek'] ?>">
												</div>
											</div>
										</div>



									</div>

									<div class="card-footer">
										<input type="submit" class="btn btn-info" name="submit" value="Submit">
										<a href="konfirmasi_donasi_read.php?idtrans=<?php echo $id; ?>" class="btn btn-primary">Batal</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php include('adm_footer.php') ?>

	</div>

	<?php include('adm_scripts.php') ?>

    <script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
        })
    </script>
</body>
</html>
