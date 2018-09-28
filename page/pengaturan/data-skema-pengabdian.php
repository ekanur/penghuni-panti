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
				<th>Skema Pengabdian</th>
				<th></th>
			</tr>
			<?php data_tabel('skema_pengabdian','id_skema_pengabdian','nama_skema_pengabdian'); ?>
		</table>
	</div>
</div>