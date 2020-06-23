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
							<h1 class="m-0 text-dark">Data Transaksi Donasi</h1>
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
									<h3 class="card-title">Tabel Data Transaksi Donasi</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable" class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Tanggal</th>
													<th>Donatur</th>
													<th>Akad</th>
                                                    <th>Status</th>
                                                    <th>Do'a</th>
                                                    <th>Keterangan</th>
                                                    <th>Jenis Barang</th>
                                                    <th>Nominal</th>
                                                    <th>Amanah</th>
                                                    <?php if($_SESSION['level']=='admin'){ ?>
                                                        <th>Konfirmasi</th>
                                                        <th>Aksi</th>
                                                    <?php } ?>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql = "SELECT trans_donasi.*, donatur.nama FROM trans_donasi
                                                        INNER JOIN donatur ON trans_donasi.iddonatur=donatur.iddonatur";

												$result = mysqli_query($koneksi, $sql);
												if (!$result) { //gagal request data
													die('Error: '.mysqli_error($koneksi));
												}else{
													if (mysqli_num_rows($result) > 0) {
														$no=1;
														while($data = mysqli_fetch_assoc($result)){ ?>
															<tr>
																<td><?php echo $no; ?></td>
																<td><?php echo $data['tanggal'] ?></td>
																<td><?php echo $data['nama'] ?></td>
                                                                <td><?php echo $data['akad'] ?></td>
																<td><?php echo $data['status'] ?></td>
																<td><?php echo $data['doa'] ?></td>
																<td><?php echo $data['ket'] ?></td>
																<td><?php echo $data['jenis_barang'] ?></td>
																<td><?php echo $data['nominal'] ?></td>
																<td><?php echo $data['amanah'] ?></td>
                                                                <?php if($_SESSION['level']=='admin'){ ?>
    																<td><a href="konfirmasi_donasi_read.php?idtrans=<?php echo $data['idtrans'] ?>">Lihat</a></td>
    																<td>
    																	<a href="trans_donasi_update.php?id=<?php echo $data['idtrans']; ?>">
    																		<i class="fas fa-edit"></i>
    																	</a>
    																	&nbsp;&nbsp;&nbsp;
    																	<a href="trans_donasi_delete.php?id=<?php echo $data['idtrans']; ?>" onclick="return confirm('Apakah Anda yakin?')">
    																		<i class="fas fa-trash-alt"></i>
    																	</a>
                                                                    </td>
                                                                <?php } ?>
															</tr>
															<?php $no++;
														}
													}
												}
												?>
											</tbody>
										</table>


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

	</div>

	<?php include('adm_scripts.php') ?>

	<script>
	$(function () {
		$('#datatable').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
		});
	});
</script>
</body>
</html>
