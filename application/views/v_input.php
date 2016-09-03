<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
	<?php echo validation_errors('<div style="color:red">','</div>') ?>
	
	<div class="container">
		<div class="panel panel-default">
				<div class="panel-heading"><b>Tambah</b></div>
	
					<?php echo form_open('index.php/crud/tambah_aksi') ?>
						<table style="margin:20px auto;">
							<tr>
								<td>nis</td>
								<td><input type="text" name="nis" class="form-control" ></td>
								<br>
							</tr>
							<tr>
								<td>nama</td>
								<td><input type="text" name="nama" class="form-control"></td>
							</tr>
							<tr><center><?php
								echo "<p><label for='mapel'>mapel: </label>";
										echo "<select name='mapel' id='mapel' class='form-control'>";
										if (count($mapel)) {
										    foreach ($mapel as $list) {
										        echo "<option value='". $list['nm_mapel'] . "'>" . $list['nm_mapel'] . "</option>";
										    }
										}
										echo "</select><br/>";
								?>
								</center>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Tambah" class="btn btn-primary"></td>
							</tr>
						</table>
					</form>	
		</div>
	</div>
</body>
</html>