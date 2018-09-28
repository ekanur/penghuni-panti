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
				<th>Id Jenis HKI</th>
				<th>Jenis HKI</th>
				<th></th>
			</tr>
			<?php data_tabel('jenis_hki','id_jenis_hki','nama_jenis_hki'); ?>
		</table>
	</div>
</div>