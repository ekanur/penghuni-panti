<div id="form-bukuajar" class="form" style="display: none;">

    <div class="one_half first">
      <label>Tambah Buku Ajar</label>
      <button>+</button>
    </div>

    <div class="first"><h2> Buku Ajar </h2></div>
    
    <div class="one_third" style="margin-left: 0px;">
      <label> Tahun <span>*</span> </label>
      <!-- <input type="text" name="f3-tahun" maxlength="4"> -->
      <select name="f1-tahun">
        <option value=""> - Pilih Tahun - </option>
        <?php get_tahun(); ?>
      </select>
    </div>

    <div class="block clear">
      <label> Judul <span>*</span> </label>
      <textarea name="f4-judul" form=""></textarea>
    </div>

    <div class="block clear" style="margin-left: 0px;">
      <label> Penerbit <span>*</span> </label>
      <input type="text" name="f4-penerbit">
    </div>

    <div class="one_half clear" style="margin-left: 0px;">
      <label> ISBN <span>*</span> </label>
      <input type="text" name="f4-isbn">
    </div>

    <div class="one_half">
      <label> Jumlah Halaman <span>*</span> </label>
      <input type="text" name="f4-halaman">
    </div>

    <div class="one_half first">
      <label> Sumber Dana <span>*</span> </label>
      <input type="text" name="f1-dana">
    </div>

    <div class="one_half">
      <label> Jumlah Dana <span>*</span></label>
      <input type="text" name="f1-dana">
    </div>

    <div class="block first" style="margin-left: 0px;">
      <label> URL <span>*</span> </label>
      <input type="text" name="f3-url">
    </div>

    <br>
    <hr>
  </div>