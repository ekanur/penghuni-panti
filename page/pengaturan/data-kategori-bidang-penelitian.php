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
				<th>Kategori Bidang Penelitian</th>
				<th></th>
			</tr>
			<?php data_tabel('kategori_bidang','id_kategori_bidang','nama_kategori_bidang'); ?>
		</table>
	</div>
</div>