<?php 
	include('db/getdata.php');
?>

<div class="mytable">
	<div>
		<a href="#">Tambah</a>
	</div>
	<div>
		<table>
			<tr>
				<th>Id Skema</th>
				<th>Skema Penelitian</th>
				<th></th>
			</tr>
			<?php data_tabel('skema_penelitian','id_skema_penelitian','nama_skema'); ?>
		</table>
	</div>
</div>