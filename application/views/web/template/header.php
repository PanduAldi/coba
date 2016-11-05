<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> <?php echo $title ?></title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url() ?>assets/other-css/yeti.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" />

		<style>
			.judul_web{
			 font-weight:700px;
			 font-size:65px;
			 
			 color:#374CD5;
			 text-shadow:
			   1px 0px 0px #fff,
			   -1px 0px 0px #fff,
			   0px 1px 0px #fff,
			   0px -1px 0px #fff,
			   1px 1px 2px #000;				
			}
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div>
	<nav class="navbar navbar-default" role="navigation">
		<h4 class="navbar-text">Selamat Datang di NAMA WEB</h4>
		<ul class="nav navbar-nav pull-right">
			<li class="active">
				<a href="#"><?php echo $hari.", ".$tanggal ?></a>
			</li>
		</ul>
	</nav>
	</div>
	<div class="container">
		<!-- bagian header -->
		<div class="header">
			<h1 class="judul_web">NAMA WEB</h1>
		</div>
		<div class="menu">
			<nav class="navbar navbar-inverse" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo site_url('web/profil') ?>" >Profil</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Berita <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('web/teknologi') ?>">Teknologi</a></li>
								<li><a href="<?php echo site_url('web/tutorial') ?>">Tutorial</a></li>
								<li><a href="<?php echo site_url('web/agama') ?>">Agama</a></li>
							</ul>
						</li>	
						<li><a href="<?php echo site_url('web/produk') ?>"> Produk Penjualan</a></li>			
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	<div class="row">
		<div class="col-lg-9">
					<div class="panel panel-primary">
						<div class="panel-body">