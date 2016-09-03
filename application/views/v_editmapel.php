<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
	<center>
		<h1>Membuat CRUD Edit</h1>
		
	</center>
	<?php foreach($mapel as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update_mapel'; ?>" method="post">
		
		<table style="margin:20px auto;">
			<tr>
				<td><label class="control-label col-sm-2">ID</label></td>
				<td>
					<input type="text" name="id_mapel" value="<?php echo $u->id_mapel ?>" class="form-control"><br>
				</td>
			</tr>
			<tr>
				<td><label class="control-label col-sm-2">nama</label></td>
				<td><input type="text" name="nm_mapel" value="<?php echo $u->nm_mapel ?>" class="form-control"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"></td>
				
			</tr>
		</table>
		
	</form>	
	
	<?php } ?>
</body>
</html>