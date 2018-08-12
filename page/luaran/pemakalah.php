<div id="form-pemakalah" class="form" style="display: none;">
    
    <div class="one_half first">
      <label>Tambah Pemakalah</label>
      <button>+</button>
    </div>

    <div class="first"><h2> Pemakalah Forum Ilmiah </h2></div>
    
    <div class="one_third" style="margin-left: 0px;">
      <label> Tahun <span>*</span> </label>
      <!-- <input type="text" name="f5-tahun" maxlength="4"> -->
      <select name="f1-tahun">
        <option value=""> - Pilih Tahun - </option>
        <?php get_tahun(); ?>
      </select>
    </div>

    <div class="one_third clear" style="margin-left: 0px;">
      <label> Forum Ilmiah <span>*</span> </label>
      <select name="f5-forum">
        <option value="">-- Pilih --</option>
        <option> Tingkat Internasional </option>
        <option> Tingkat Nasional </option>
        <option> Regional </option>
      </select>
    </div>

    <div class="one_third">
      <label> Status <span>*</span> </label>
      <select name="f5-status">
        <option value="">-- Pilih --</option>
        <option> Pemakalah Biasa </option>
        <option> Invited / Keynote Speaker </option>
      </select>
    </div>

    <div class="block clear">
      <label> Judul Makalah <span>*</span> </label>
      <!-- <input type="text" name="f5-judul"> -->
      <textarea name="f5-judul" form=""></textarea>
    </div>

    <div class="block clear">
      <label> Nama Forum <span>*</span> </label> 
      <input type="text" name="f5-nama">
    </div>

    <div class="block">
      <label> Institusi Penyelenggara <span>*</span> </label>
      <input type="text" name="f5-penyelenggara">
    </div>

    <div class="one_quarter" style="margin-left: 0px;">
      <label> Waktu Acara <span>*</span> </label>
      <input type="date" name="f5-waktu1">
    </div>

    <div class="one_quarter">
      <label> s/d <span>*</span> </label> 
      <input type="date" name="f5-waktu2">
    </div>

    <div class="one_half">
      <label> Tempat Pelaksanaan <span>*</span> </label>
      <input type="text" name="f5-tempat">
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

    <br>
    <hr>
  </div>