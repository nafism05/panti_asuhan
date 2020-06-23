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
							<h1 class="m-0 text-dark">Data Post</h1>
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
									<h3 class="card-title">Tabel Data Post</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable" class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Judul</th>
													<th>Gambar</th>
													<th>Isi</th>
													<th>Tanggal</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
												$sql = "SELECT * FROM posts";

												$result = mysqli_query($koneksi, $sql);
												if (!$result) { //gagal request data
													die('Error: '.mysqli_error($koneksi));
												}else{
													if (mysqli_num_rows($result) > 0) {
														$no=1;
														while($data = mysqli_fetch_assoc($result)){
                                                            $isi = strip_tags(html_entity_decode($data['content']));
                                                            $isi_cut = substr($isi, 0, 50);
                                                            ?>
															<tr>
																<td><?php echo $no; ?></td>
																<td><?php echo $data['title'] ?></td>
																<td><img src="thumbnail_post/<?php echo $data['gbr'] ?>" alt="" width="200"></td>
																<td><?php echo $isi_cut ?></td>
																<td><?php echo $data['date'] ?></td>
																<td>
																	<a href="post_update.php?id=<?php echo $data['id']; ?>">
																		<i class="fas fa-edit"></i>
																	</a>
																	&nbsp;&nbsp;&nbsp;
																	<a href="post_delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin?')">
																		<i class="fas fa-trash-alt"></i>
																	</a>
																</td>
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
