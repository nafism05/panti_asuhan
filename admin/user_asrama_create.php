<?php
	include('cek_login.php');
	include('../koneksi.php');

    $id = $_GET['idadmin'];

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
							<h1 class="m-0 text-dark">Input Asrama Admin</h1>
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
									<h3 class="card-title">Form Input Asrama Admin</h3>
								</div>
								<!-- /.card-header -->

								<form role="form" method="post" action="user_asrama_create_process.php?idadmin=<?php echo $id ?>">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nama Asrama</label>
													<input type="text" name="nama_asrama" class="form-control" >
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
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>No Telepon</label>
													<input type="number" name="no_telp" class="form-control" >
												</div>
											</div>
										</div>



									</div>

									<div class="card-footer">
										<input type="submit" class="btn btn-info" name="submit" value="Submit">
										<a href="user_asrama_read.php?idadmin=<?php echo $id; ?>" class="btn btn-primary">Batal</a>
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
