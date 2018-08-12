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
				<th>Jenis Luaran Lain</th>
				<th></th>
			</tr>
			<?php data_tabel('jenis_luaran_lain','id_jenis_luaran_lain','nama_jenis_luaran_lain'); ?>
		</table>
	</div>
</div>