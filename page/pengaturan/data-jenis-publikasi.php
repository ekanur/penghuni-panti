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
				<th>Id Publikasi</th>
				<th>Jenis Publikasi</th>
				<th></th>
			</tr>
			<?php data_tabel('jenis_publikasi','id_jenis_publikasi','nama_jenis_publikasi'); ?>
		</table>
	</div>
</div>