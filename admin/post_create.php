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
							<h1 class="m-0 text-dark">Input Data Post</h1>
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
									<h3 class="card-title">Form Input Data Post</h3>
								</div>
								<!-- /.card-header -->

                                <form role="form" method="post" action="post_create_process.php" enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="col-md-10 offset-md-1">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control" name="judul">
                                                </div>

                                                <div class="form-group">
                                                    <label>Thumbnail</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="gbr" class="custom-file-input" id="customFile" required>
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px;">

                                                <div class="form-group">
                                                    <label>Isi</label>
                                                    <textarea name="isi" class="form-control my-editor" rows="15"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input type="text" class="form-control" name="tgl">
                                                </div>

                                            </div>
                                            <!-- /.card-body -->

                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-info" name="submit" value="Submit">
                                        <a href="post_read.php" class="btn btn-primary">Batal</a>
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

        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
</body>
</html>
