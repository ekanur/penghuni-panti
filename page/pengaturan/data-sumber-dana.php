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
				<th>Id Sumber</th>
				<th>Sumber Dana</th>
				<th></th>
			</tr>
			<?php data_tabel('sumber_dana','id_sumber_dana','nama_sumber_dana'); ?>
		</table>
	</div>
</div>