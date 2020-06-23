<?php
include('cek_login.php');
include('../koneksi.php');

$id = $_GET['id'];

$sql = "SELECT * FROM admin WHERE idadmin='$id'";
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
							<h1 class="m-0 text-dark">Edit Admin</h1>
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
									<h3 class="card-title">Form Edit Admin</h3>
								</div>
								<!-- /.card-header -->

								<form role="form" method="post" action="user_update_process.php?id=<?php echo $id ?>">
									<div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIP</label>
                                                    <input type="text" name="nip" class="form-control" value="<?php echo $data['nip'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_lengkap'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <input type="text" name="level" class="form-control" value="<?php echo $data['level'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input type="text" name="stat" class="form-control" value="<?php echo $data['stat'] ?>">
                                                </div>
                                            </div>
                                        </div>

									</div>

									<div class="card-footer">
										<input type="submit" class="btn btn-info" name="submit" value="Submit">
										<a href="user_read.php" class="btn btn-primary">Batal</a>
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
