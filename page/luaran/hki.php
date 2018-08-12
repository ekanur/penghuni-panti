<div id="form-hki" class="form" style="display: none;">

    <div class="one_half first">
      <label>Tambah HKI</label>
      <button>+</button>
    </div>

    <div class="first"><h2> Hak Kekayaan Intelektual </h2></div>
    
    <div class="one_third" style="margin-left: 0px;">
      <label> Tahun <span>*</span> </label>
      <!-- <input type="text" name="f6-tahun" maxlength="4"> -->
      <select name="f1-tahun" >
        <option value=""> - Pilih Tahun - </option>
        <?php get_tahun(); ?>
      </select>
    </div>

    <div class="block clear">
      <label> Judul HKI<span>*</span> </label>
      <textarea name="f6-judul" form=""></textarea>
    </div>

    <div class="one_third" style="margin-left: 0px;">
      <label> Jenis <span>*</span> </label>
      <select name="f6-jenis">
        <option value="">-- Pilih --</option>
        <?php get_jenis_hki(); ?>
      </select>
    </div>

    <div class="one_third first">
      <label> Nomor Pendaftaran<span>*</span> </label>
      <input type="text" name="f6-nomor">
    </div>

    <div class="one_third">
      <label> Nomor Pencatatan<span>*</span> </label>
      <input type="text" name="f6-nomor">
    </div>

    <div class="one_third">
      <label> Status <span>*</span> </label>
      <select name="f6-status">
        <option value="">-- Pilih --</option>
        <option> Terdaftar </option>
        <option> Granted </option>
      </select>
    </div>

    <div class="one_half first">
      <label> Sumber Dana <span>*</span> </label>
      <input type="text" name="f1-dana">
    </div>

    <div class="one_half">
      <label> Jumlah Dana <span>*</span></label>
      <input type="text" name="f1-dana">
    </div>

    <div class="block first">
      <label> URL <span>*</span> </label>
      <input type="text" name="f3-url">
    </div>

    <br>
    <hr>
  </div>