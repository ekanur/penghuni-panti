<div id="form-luaranlain" class="form" style="display: none;">
    
    <div class="one_half first">
      <label>Tambah Luaran Lain</label>
      <button>+</button>
    </div>

    <div class="first"><h2> Luaran Lain </h2></div>
    
    <div class="one_third" style="margin-left: 0px;">
      <label> Tahun <span>*</span> </label>
      <select name="f1-tahun">
        <option value=""> - Pilih Tahun - </option>
        <?php get_tahun(); ?>
      </select>
    </div>

    <div class="one_third">
      <label> Jenis <span>*</span> </label>
      <select name="f7-jenis">
        <option value="">-- Pilih --</option>
        <?php get_jenis_luaran_lain(); ?>
      </select>
    </div>

    <div class="block clear">
      <label> Judul Luaran <span>*</span> </label>
      <textarea name="f7-luaran" form=""></textarea>
    </div>

    <div class="block">
      <label> Deskripsi Singkat <span>*</span> </label>
      <textarea name="f7-deskripsi" style="height: 100px"></textarea>
    </div>

    <div class="one_half first">
      <label> Sumber Dana <span>*</span> </label>
      <input type="text" name="f1-dana">
    </div>

    <div class="one_half">
      <label> Jumlah Dana <span>*</span></label>
      <input type="text" name="f1-dana">
    </div>

    <div class="block" style="margin-left: 0px;">
      <label> URL <span>*</span> </label>
      <input type="text" name="f3-url">
    </div>
    <hr>
  </div>