<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("input[name='checkAll']").click(function() {
				var checked = $(this).attr("checked");
				$("#myTable tr td input:checkbox").attr("checked", checked);
			});
		});
	</script>
</head>
<body>
<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><b>Tampil  mapel</b></div>

	<form action="<?php echo site_url('crud/delete_multiple'); ?>" method="post">
		<select name="action">
			<option value="null">Bulk Action</option>
			<option value="delete">Delete</option>
		</select>
		<input type="submit" name="submit" value="Action">

	<div class="table-responsive">
	
	<table style="margin:20px auto;" border="1" class="table table-bordered table-striped">
		<tr>
			<th><input type="checkbox" id="checkAll" name="checkAll"></th>
			<th>No</th>
			<th>ID mapel</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><input type="checkbox" name="msg[]" value="<?php echo $u->id_mapel; ?>"></td>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_mapel ?></td>
			<td><?php echo $u->nm_mapel ?></td>
			<td>

			     <a href="<?php echo ('editmapel/'.$u->id_mapel); ?>"><span class="glyphicon glyphicon-pencil">[edit] </span>
                 
			</td>
		</tr>
		<?php } ?>
	</table>
	</form>
	</div>
 </div>    <!-- /panel -->
</div> <!-- /container -->
</body>
</html>