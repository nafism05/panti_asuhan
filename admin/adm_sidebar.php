
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="/panti_asuhan/admin" class="brand-link">
		<span class="brand-text font-weight-light">Admin <b>Al Huda</b></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-child"></i>
						<p>
							Data Anak
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="anak_read.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Semua Data</p>
							</a>
						</li>
                        <?php if($_SESSION['level']=='admin'){ ?>
    						<li class="nav-item">
    							<a href="anak_create.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>Tambah Data Anak</p>
    							</a>
    						</li>
                        <?php } ?>
					</ul>
				</li>

                <?php if($_SESSION['level']=='admin'){ ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-male"></i>
                            <p>
                                Data Donatur
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="donatur_read.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semua Data</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="donatur_create.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Data Donatur</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-donate"></i>
						<p>
							Transaksi Donasi
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="trans_donasi_read.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Semua Data</p>
							</a>
						</li>
                        <?php if($_SESSION['level']=='admin'){ ?>
    						<li class="nav-item">
    							<a href="trans_donasi_create.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>Tambah Data Transaksi</p>
    							</a>
    						</li>
                        <?php } ?>
					</ul>
				</li>

                <?php if($_SESSION['level']=='admin'){ ?>
    				<li class="nav-item has-treeview">
    					<a href="#" class="nav-link">
    						<i class="nav-icon fas fa-align-justify"></i>
    						<p>
    							Posts
    							<i class="right fas fa-angle-left"></i>
    						</p>
    					</a>
    					<ul class="nav nav-treeview">
    						<li class="nav-item">
    							<a href="post_read.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>All Posts</p>
    							</a>
    						</li>
    						<li class="nav-item">
    							<a href="post_create.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>Add Post</p>
    							</a>
    						</li>
    					</ul>
    				</li>
                <?php } ?>

                <?php if($_SESSION['level']=='admin'){ ?>
    				<li class="nav-item has-treeview">
    					<a href="#" class="nav-link">
    						<i class="nav-icon fas fa-users"></i>
    						<p>
    							Admin
    							<i class="right fas fa-angle-left"></i>
    						</p>
    					</a>
    					<ul class="nav nav-treeview">
    						<li class="nav-item">
    							<a href="user_read.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>Data Admin</p>
    							</a>
    						</li>
    						<li class="nav-item">
    							<a href="user_create.php" class="nav-link">
    								<i class="far fa-circle nav-icon"></i>
    								<p>Tambah Admin</p>
    							</a>
    						</li>
    					</ul>
    				</li>
                <?php } ?>


				<li class="nav-header">Account</li>

				<li class="nav-item">
					<a href="user_setting.php" class="nav-link">
						<i class="nav-icon fas fa-cog"></i>
						<p>
							Setting
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="logout.php" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt fa-flip-horizontal"></i>
						<p>
							Logout
						</p>
					</a>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
