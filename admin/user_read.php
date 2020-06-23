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
							<h1 class="m-0 text-dark">Data Admin</h1>
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
									<h3 class="card-title">Tabel Data Admin</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable" class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>NIP</th>
													<th>Nama</th>
													<th>Username</th>
													<th>Level</th>
													<th>Status</th>
													<th>Asrama</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql = "SELECT * FROM admin";

												$result = mysqli_query($koneksi, $sql);
												if (!$result) { //gagal request data
													die('Error: '.mysqli_error($koneksi));
												}else{
													if (mysqli_num_rows($result) > 0) {
														$no=1;
														while($data = mysqli_fetch_assoc($result)){ ?>
															<tr>
																<td><?php echo $no; ?></td>
																<td><?php echo $data['nip'] ?></td>
																<td><?php echo $data['nama_lengkap'] ?></td>
																<td><?php echo $data['username'] ?></td>
																<td><?php echo $data['level'] ?></td>
																<td><?php echo $data['stat'] ?></td>
                                                                <td><a href="user_asrama_read.php?idadmin=<?php echo $data['idadmin'] ?>">Lihat</a></td>
                                                                <?php if($_SESSION['username'] != $data['username']){ ?>
    																<td>
    																	<a href="user_update.php?id=<?php echo $data['idadmin']; ?>">
    																		<i class="fas fa-edit"></i>
    																	</a>
    																	&nbsp;&nbsp;&nbsp;
    																	<a href="user_delete.php?id=<?php echo $data['idadmin']; ?>" onclick="return confirm('Apakah Anda yakin?')">
    																		<i class="fas fa-trash-alt"></i>
    																	</a>
    																</td>
                                                                <?php }else{ ?>
                                                                    <td></td>
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
