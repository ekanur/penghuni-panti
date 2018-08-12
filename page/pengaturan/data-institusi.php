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
				<th>Id Institusi</th>
				<th>Institusi Sumber Dana</th>
				<th></th>
			</tr>
			<?php data_tabel('institusi','id_institusi','nama_institusi'); ?>
		</table>
	</div>
</div>