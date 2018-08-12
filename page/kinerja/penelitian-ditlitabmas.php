<div id="step-2-1" style="display: none;">
    <h3>Penelitian Ditlitabmas</h3>      
    <label> Hibah <span>*</span> </label>
    <select name="hibah" id='hibah-1'>
      <option value=""> - Pilih Hibah - </option>
        <?php get_hibah(); ?>
    </select>

  
    <label> Skema <span>*</span> </label>
    <select id="skema-1">
      <option value=""> - Pilih Skema - </option>
      <?php get_skema_penelitian(); ?>
    </select>

    <label> Kategori Bidang Penelitian <span>*</span> </label>
    <select name="penelitian-bidang" id="bidang-1">
      <option> - Pilih Kategori Bidang Penelitian - </option>
      <?php get_kategori_bidang(); ?>
    </select>

  
    <label> Bidang Penelitian <span>*</span> </label>
    <select id="penelitian-1" name="penelitian">
      <option value=""> - Pilih Bidang Penelitian - </option>
      <?php get_bidang_penelitian(); ?>
    </select>

    <label> Kategori Tujuan Sosial Ekonomi <span>*</span> </label>
    <select name="tse-kategori-1" id="tse-kat-1">
      <option value=""> - Pilih Kategori TSE - </option>
      <?php get_kategori_tse(); ?>
    </select>


    <label> Tujuan Sosial Ekonomi <span>*</span> </label>
    <select name="tse-1" id="tse-1">
      <option value=""> - Pilih TSE - </option>
      <?php get_tse(); ?>
    </select>

 
    <label> Dana Ditlitabmas <span>*</span> </label>
    <input type="text" name="f1-dana">
     
    <label> Jumlah Dana <span>*</span></label>
    <input type="text" name="f1-dana">

    <label> URL <span>*</span> </label>
    <input type="text" name="url">
 
  <hr>
</div>