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
				<th>Id Tahun</th>
				<th>Tahun</th>
				<th></th>
			</tr>
			<?php data_tabel('t_tahun', 'id_tahun', 'tahun'); ?>
		</table>
	</div>
</div>