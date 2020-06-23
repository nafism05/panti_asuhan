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
							<h1 class="m-0 text-dark">Input Transaksi Donasi</h1>
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
									<h3 class="card-title">Form Input Transaksi Donasi</h3>
								</div>
								<!-- /.card-header -->

								<form role="form" method="post" action="trans_donasi_create_process.php">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Tanggal</label>
													<input type="text" name="tgl" class="form-control" >
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Donatur</label>
                                                    <select class="form-control" name="donatur">
                                                        <option></option>
                                                        <?php
        												$sql = "SELECT * FROM donatur";

        												$result = mysqli_query($koneksi, $sql);
        												if (!$result) { //gagal request data
        													die('Error: '.mysqli_error($koneksi));
        												}else{
        													if (mysqli_num_rows($result) > 0) {
        														while($data = mysqli_fetch_assoc($result)){ ?>
                                                                    <option value="<?php echo $data['iddonatur'] ?>"><?php echo $data['nama'] ?></option>
                                                                <?php }
                                                            }
                                                        }
                                                        ?>
                                                      </select>
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Akad</label>
													<input type="text" name="akad" class="form-control" >
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Status</label>
													<input type="text" name="status" class="form-control" >
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Do'a</label>
													<input type="text" name="doa" class="form-control" >
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Keterangan</label>
													<input type="text" name="ket" class="form-control" >
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Jenis Barang</label>
													<input type="text" name="jenis_barang" class="form-control" >
												</div>
											</div>
										</div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input type="number" name="nominal" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Amanah</label>
													<input type="text" name="amanah" class="form-control" >
												</div>
											</div>
										</div>


									</div>

									<div class="card-footer">
										<input type="submit" class="btn btn-info" name="submit" value="Submit">
										<a href="trans_donasi_read.php" class="btn btn-primary">Batal</a>
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
