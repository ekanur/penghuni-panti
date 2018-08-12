<div id="step-2-2" style="display: none;">
  <h3>Penelitian Non-Ditlitabmas</h3>
  <label> Jenis Penelitian <span>*</span> </label>
  <select name="penelitian-jenis">
    <option value=""> - Pilih Jenis Penelitian - </option>
    <?php get_jenis_penelitian() ?>
  </select>


  <label> Kategori Bidang Penelitian <span>*</span> </label>
  <select name="penelitian-bidang" id="bidang-2">
    <option value=""> - Pilih Kategori - </option>
    <?php get_kategori_bidang(); ?>
  </select>


  <label> Bidang Penelitian <span>*</span> </label>
  <select id="penelitian-2" name="penelitian">
    <option value=""> - Pilih Bidang Terlebih Dahulu - </option>
    <?php get_bidang_penelitian(); ?>
  </select>

  <label> Kategori Tujuan Sosial Ekonomi <span>*</span> </label>
  <select name="tse-kategori-2" id="tse-kat-2">
    <option value=""> - Pilih Kategori TSE - </option>
    <?php get_kategori_tse(); ?>
  </select>


  <label> Tujuan Sosial Ekonomi <span>*</span> </label>
  <select name="tse-2" id="tse-2">
    <option value=""> - Pilih TSE - </option>
    <?php get_tse(); ?>
  </select>



  <label> Institusi Sumber Dana <span>*</span> </label>
  <select name="sdi-2" id="sdi-2">
    <option value=""> -Pilih Institusi- </option>  
    <?php get_institusi(); ?>
  </select>


  <label> Sumber Dana <span>*</span> </label>
  <input type="text" name="sd-2">

	<label> Jumlah Dana <span>*</span></label>
	<input type="text" name="jd-2">

  <label> URL <span>*</span> </label>
  <input type="text" name="url">
  
<hr>
</div>