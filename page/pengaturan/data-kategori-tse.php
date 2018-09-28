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
				<th>Id Kategori</th>
				<th>Kategori Tujuan Sosial Ekonomi</th>
				<th></th>
			</tr>
			<?php data_tabel('kategori_tse','id_kategori_tse','nama_kategori_tse'); ?>
		</table>
	</div>
</div>