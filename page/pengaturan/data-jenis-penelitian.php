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
				<th>Id Jenis</th>
				<th>Jenis Penelitian</th>
				<th></th>
			</tr>
			<?php data_tabel('jenis_penelitian','id_jenis','nama_jenis_penelitian'); ?>
		</table>
	</div>
</div>