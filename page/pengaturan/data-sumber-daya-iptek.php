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
				<th>Sumber Daya IPTEK</th>
				<th></th>
			</tr>
			<?php data_tabel('sumber_daya_iptek','id_sumber_daya','nama_sumber_daya'); ?>
		</table>
	</div>
</div>