<?php
	
	function ambil_data($nama_tabel, $id, $nama) {
		global $conx;
		$sql = "SELECT * from $nama_tabel";
		$q = mysqli_query($conx,$sql);
		while ($rows = mysqli_fetch_array($q)){
			
			?>
			<option value="<?php echo $rows[$id];?>">
				<?php echo $rows[$nama];?>
			</option>
			<?php
		}
	}

	function data_tabel($nama_tabel, $id, $nama) {
		global $conx;
		$sql = "SELECT * from $nama_tabel";
		$q = mysqli_query($conx,$sql);
		while ($rows = mysqli_fetch_array($q)){
			?>
			<tr>
				<td width="12%"><?php echo $rows[$id];?></td>
				<td><?php echo $rows[$nama];?></td>
				<td width="18%">
					<center><a href="">Edit</a> | <a href="">Hapus</a></center>
				</td>
			</tr>
			<?php
		}
	}

	function get_kinerja() {
		ambil_data('kinerja','id_kinerja','nama_kinerja');
	}

	function get_tahun() {
		ambil_data('t_tahun', 'id_tahun', 'tahun');
	}

	function get_hibah() {
		ambil_data('hibah','id_hibah','nama_hibah');
	}

	function get_skema_penelitian() {
		ambil_data('skema_penelitian','id_skema_penelitian','nama_skema');
	}

	function get_kategori_bidang() {
		ambil_data('kategori_bidang','id_kategori_bidang','nama_kategori_bidang');
	}

	function get_bidang_penelitian() {
		ambil_data('bidang_penelitian','id_kategori_bidang','nama_bidang');
	}

	function get_kategori_tse() {
		ambil_data('kategori_tse','id_kategori_tse','nama_kategori_tse');
	}

	function get_tse() {
		ambil_data('tse','id_tse','nama_tse');
	}

	function get_jenis_penelitian() {
		ambil_data('jenis_penelitian','id_jenis','nama_jenis_penelitian');
	}

	function get_institusi() {
		ambil_data('institusi','id_institusi','nama_institusi');
	}

	function get_skema_pengabdian() {
		ambil_data('skema_pengabdian','id_skema_pengabdian','nama_skema_pengabdian');
	}

	function get_sumber_daya_iptek() {
		ambil_data('sumber_daya_iptek','id_sumber_daya','nama_sumber_daya');
	}

	function get_sumber_dana() {
		ambil_data('sumber_dana','id_sumber_dana','nama_sumber_dana');
	}

	

	// luaran

	function get_publikasi() {
		ambil_data('jenis_publikasi','id_jenis_publikasi','nama_jenis_publikasi');
	}

	function get_forum_ilmiah() {

	}

	function get_status_pemakalah() {

	}

	function get_jenis_hki() {
		ambil_data('jenis_hki','id_jenis_hki','nama_jenis_hki');
	}

	function get_jenis_luaran_lain() {
		ambil_data('jenis_luaran_lain','id_jenis_luaran_lain','nama_jenis_luaran_lain');
	}


?>