<!DOCTYPE html>
<html>
<head>
	<title>Tambah com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD Tambah com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nis</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr><center><?php
				echo "<p><label for='mapel'>mapel: </label>";
						echo "<select name='mapel' id='mapel'>";
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
				<td><input type="submit" value="Tambah" class="tombol"></td>
			</tr>
		</table>
	</form>	
</body>
</html>