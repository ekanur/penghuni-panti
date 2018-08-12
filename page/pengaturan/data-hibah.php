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
				<th>Id Hibah</th>
				<th>Hibah</th>
				<th></th>
			</tr>
			<?php data_tabel('hibah','id_hibah','nama_hibah'); ?>
		</table>
	</div>
</div>