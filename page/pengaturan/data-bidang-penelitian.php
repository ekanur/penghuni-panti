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
				<th>Id Bidang</th>
				<th>Bidang Penelitian</th>
				<th></th>
			</tr>
			<?php data_tabel('bidang_penelitian','id_bidang','nama_bidang'); ?>
		</table>
	</div>
</div>