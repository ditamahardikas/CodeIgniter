<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
				<div class="panel-heading"><b>Membuat CRUD Edit</b></div>
				<?php foreach($mahasiswa as $u){ ?>
				<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
					<table style="margin:20px auto;">
						<tr>
							<td><label class="control-label col-sm-2">nis</label></td>
							<td>
								<input type="text" name="nis" value="<?php echo $u->nis ?>" class="form-control"><br>
							</td>
						</tr>
						<tr>
							<td><label class="control-label col-sm-2">nama</label></td>
							<td><input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control"></td>
						</tr>
						<tr>
							<?php
							echo "<p><label for='mapel'>mapel: </label>";
									echo "<select name='mapel' id='mapel'  class='form-control'>";
									if (count($mapel)) {
									    foreach ($mapel as $list) {
									        echo "<option value='". $list['nm_mapel'] . "'>" . $list['nm_mapel'] . "</option>";
									    }
									}
									echo "</select><br/>";
							?>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Simpan" class="btn btn-primary"></td>
						</tr>
					</table>
				</form>	
				<?php } ?>
		</div>
	</div>
</body>
</html>