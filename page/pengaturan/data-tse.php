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
				<th>Id TSE</th>
				<th>Tujuan Sosial Ekonomi</th>
				<th></th>
			</tr>
			<?php data_tabel('tse','id_tse','nama_tse'); ?>
		</table>
	</div>
</div>