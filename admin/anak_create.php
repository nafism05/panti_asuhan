<?php
	include('cek_login.php');
	include('../koneksi.php');

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
							<h1 class="m-0 text-dark">Input Data Anak</h1>
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
									<h3 class="card-title">Form Input Data Anak</h3>
								</div>
								<!-- /.card-header -->

								<form role="form" method="post" action="anak_create_process.php">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>NIS</label>
													<input type="text" name="nis" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tmpt_lahir" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="text" name="tgl_lahir" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Jenis Kelamin</label>
													<input type="text" name="kelamin" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Alamat</label>
													<textarea class="form-control" name="alamat" rows="3"></textarea>
												</div>
											</div>
										</div>


									</div>

									<div class="card-footer">
										<input type="submit" class="btn btn-info" name="submit" value="Submit">
										<a href="anak_read.php" class="btn btn-primary">Batal</a>
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
</body>
</html>
