<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Smart Puskesmas | Puskesmas Pulau Temiang</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?=base_url('dashboard')?>" class="logo">
				<span class="logo-mini"><b>A</b>LT</span>
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">9</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<ul class="menu">
										<a href="#">
											<h3>
												Design some buttons
												<small class="pull-right">20%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%"
													role="progressbar" aria-valuenow="20" aria-valuemin="0"
													aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
								</li>
							</ul>
						</li>
						<li class="footer">
							<a href="#">View all tasks</a>
						</li>
					</ul>
					</li>
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?=base_url()?>assets//dist/img/user2-160x160.jpg" class="user-image"
								alt="User Image">
							<span class="hidden-xs"><?=$this->fungsi->user_login()->username ?></span>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<img src="<?=base_url()?>assets//dist/img/user2-160x160.jpg" class="img-circle"
									alt="User Image">

								<p>
									<?=$this->fungsi->user_login()->name ?>
									<small><?=$this->fungsi->user_login()->address ?></small>
								</p>
							</li>

							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?=site_url('auth/logut')?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>

					<li>

					</li>
					</ul>
				</div>
			</nav>
		</header>


		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?=base_url()?>assets//dist/img/user2-160x160.jpg" class="img-circle"
							alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?=$this->fungsi->user_login()->username ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
									class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>


					<?php if($this->fungsi->user_login()->level == 1 ) {?>
					<li
						<?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
						<a href="<?=base_url('dashboard')?>">
							<i class="fa fa-dashboard"></i> <span>Beranda</span>
						</a>
					</li>

					<li
						class="treeview <?=$this->uri->segment(1) == 'drugs' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
						<a href="">
							<i class="fa fa-medkit"></i>
							<span>Blog</span>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?=$this->uri->segment(1) == 'drug' ? 'class="active"' : '' ?>><a
									href="<?=site_url('article')?>"><i class="fa fa-circle-o"></i>Artikel</a></li>
							<li <?=$this->uri->segment(1) == 'unit' ?     'class="active"' : '' ?>><a
									href="<?=site_url('categoryarticle')?>"><i class="fa fa-circle-o"></i> Kategori Artikel</a></li>
						</ul>
					</li>

					<li <?=$this->uri->segment(1) == 'poli' ? 'class="active"' : '' ?>>
						<a href="<?=site_url('poli')?>">
							<i class="fa fa-truck"></i> <span>Poliklinik</span>
						</a>
					</li>

					<li <?=$this->uri->segment(1) == 'doctor' ? 'class="active"' : '' ?>>
						<a href="<?=site_url('doctor')?>">
							<i class="fa fa-user-md"></i> <span>Dokter</span>
						</a>  
					</li>

					<li
						<?=$this->uri->segment(1) == 'medicalrecord' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
						<a href="<?=base_url('medicalrecord')?>">
							<i class="fa fa-dashboard"></i> <span>Rekam Medis</span>
						</a>
					</li>
				
					<li
						class="treeview <?=$this->uri->segment(1) == 'drugs' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
						<a href="">
							<i class="fa fa-medkit"></i>
							<span>Obat</span>
							</span>
						</a>
						<ul class="treeview-menu">
							<li <?=$this->uri->segment(1) == 'drug' ? 'class="active"' : '' ?>><a
									href="<?=site_url('drug')?>"><i class="fa fa-circle-o"></i>Obat</a></li>
							<li <?=$this->uri->segment(1) == 'unit' ?     'class="active"' : '' ?>><a
									href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
						</ul>
					</li>
					<li class="header">MAIN NAVIGATION</li>
						<li><a href="<?=site_url('user')?>"><i class="fa fa-users"></i>Pengguna</a></li>
						<li><a href="<?=site_url('hospital')?>"><i class="fa fa-hospital-o"></i>Instansi</a></li>
						<li><a href="<?=site_url('/')?>"><i class="fa fa-hospital-o"></i>web</a></li>

					<?php } ?>
				

					<?php if($this->fungsi->user_login()->level == 2 ) {?>

					<li
						<?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
						<a href="<?=base_url('dashboard')?>">
							<i class="fa fa-dashboard"></i> <span>Beranda</span>
						</a>
					</li>
						
					<li><a href="<?=site_url('registration')?>"><i class="fa fa-pencil-square-o"></i> Pendaftaran</a></li>
					<li><a href="<?=site_url('patient')?>"><i class="fa fa-user-o"></i> Pasien</a></li>
					<li class="header">MAIN NAVIGATION</li>
					<li><a href="<?=site_url('queue/print')?>"><i class="fa fa-calendar-check-o"></i> Tampilan Antrian</a></li>
					<li><a href="<?=site_url('queue/show')?>"><i class="fa  fa-hourglass-2"></i> Antrian Pasien</a></li>

					<?php } ?>


					<?php if($this->fungsi->user_login()->level == 3 ) {?>

						<li
							<?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
							<a href="<?=base_url('dashboard')?>">
								<i class="fa fa-dashboard"></i> <span>Beranda</span>
							</a>
						</li>
							
						<li><a href="<?=site_url('registration')?>"><i class="fa fa-pencil-square-o"></i> Pendaftaran</a></li>
						<li><a href="<?=site_url('patient')?>"><i class="fa fa-user-o"></i> Pasien</a></li>
						<li class="header">MAIN NAVIGATION</li>
						<li><a href="<?=site_url('queue/print')?>"><i class="fa fa-calendar-check-o"></i> Tampilan Antrian</a></li>
						<li><a href="<?=site_url('queue/show')?>"><i class="fa fa-hourglass-2"></i> Antrian Pasien</a></li>

						<?php } ?>

			</section>
		</aside>

		<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

		<div class="content-wrapper">
			<?php echo $contents ?>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong> &copy; <a href="https://adminlte.io">Tou Studio</a>.</strong> 
		</footer>


	<div class="control-sidebar-bg"></div>

	<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script>
		$(document).ready(function () {
			$('#tabel1').dataTable()
		})

	</script>

	<script>
		$(document).ready(function () {
			$('.sidebar-menu').tree()
		})
	</script>


</body>

</html>
