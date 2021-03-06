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
							<h1 class="m-0 text-dark">Data Anak</h1>
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
									<h3 class="card-title">Tabel Data Anak</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable" class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>NIS</th>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tanggal Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Alamat</th>
                                                    <?php if($_SESSION['level']=='admin'){ ?>
                                                        <th>Aksi</th>
                                                    <?php } ?>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql = "SELECT * FROM anak";

												$result = mysqli_query($koneksi, $sql);
												if (!$result) { //gagal request data
													die('Error: '.mysqli_error($koneksi));
												}else{
													if (mysqli_num_rows($result) > 0) {
														$no=1;
														while($data = mysqli_fetch_assoc($result)){ ?>
															<tr>
																<td><?php echo $no; ?></td>
																<td><?php echo $data['nis'] ?></td>
																<td><?php echo $data['nama'] ?></td>
																<td><?php echo $data['tempat_lahir'] ?></td>
																<td><?php echo $data['tgl_lahir'] ?></td>
																<td><?php echo $data['jenis_kelamin'] ?></td>
																<td><?php echo $data['alamat'] ?></td>
																<?php if($_SESSION['level']=='admin'){ ?><td>
																	<a href="anak_update.php?id=<?php echo $data['idanak']; ?>">
																		<i class="fas fa-edit"></i>
																	</a>
																	&nbsp;&nbsp;&nbsp;
																	<a href="anak_delete.php?id=<?php echo $data['idanak']; ?>" onclick="return confirm('Apakah Anda yakin?')">
																		<i class="fas fa-trash-alt"></i>
																	</a>
																<?php } ?></td>
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
