<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Code Igniter</title>	
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Otak Atik code igniter</a>
		</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url().'index.php/crud' ?>">Home</a></li>
						<li><a href="<?php echo base_url().'index.php/crud/tampil' ?>">CRUD</a></li>
						<li><a href="<?php echo base_url().'index.php/crud/tampilmapel' ?>">Multidelete</a></li>
	
					</ul>
			</div>
			
	</div>
	</nav>
	
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar collapse in" >
			<ul class="nav menu">
				<li class="active">
					<a href="<?php echo base_url().'index.php/crud' ?> ">dasboard</a>
				</li>

				<li>
					<a href="<?php echo base_url().'index.php/crud/tampil' ?>">Crud</a>
				</li>

				<li>
					<a href="<?php echo base_url().'index.php/crud/tampilmapel' ?>">multidelete</a>
				</li>
				<li>
					<a href="<?php echo base_url().'index.php/crud/panelAjax' ?>">Panel Tab</a>
				</li>
				<li><a href="<?php echo base_url('login/logout'); ?>" class="btn btn-primary">Logout</a></li>
			</ul>
		</div>
