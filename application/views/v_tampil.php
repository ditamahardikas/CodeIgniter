<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><b>Tampil CRUD Mahasiswa</b></div>
	<br>
		<?php print 'input nama : ';?>
		<br>
		<form action="<?php print site_url();?>/crud/cari" method=POST>
		<input type=text name=cari> <input type=submit value="cari">
		</form>

	<div class="table-responsive">
	<center ><a href="<?php echo ('tambah'); ?>" class="btn btn-primary">Tambah Data</a> </center>
	<table style="margin:20px auto;" border="1" class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Mapel</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nis ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->mapel ?></td>
			<td>

			     <a href="<?php echo ('edit/'.$u->nis); ?>"><span class="glyphicon glyphicon-pencil">[edit] </span>
                  <a href="<?php echo ('hapus/'.$u->nis); ?>"><span class="glyphicon glyphicon-trash">[hapus]</span>         
			</td>
		</tr>
		<?php } ?>
	</table>
	 <div class="halaman">Halaman : <?php echo $halaman;?></div>
	</div>
 </div>    <!-- /panel -->

</div> <!-- /container -->
</body>
</html>