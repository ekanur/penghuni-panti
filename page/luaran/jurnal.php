<div id="form-jurnal" class="form" style="display: none;">

  <div class="one_half first">
    <label>Tambah Jurnal</label>
    <button>+</button>
  </div>

  <div class="first"><h3> Jurnal </h3></div>
  
  <div class="one_third first" style="margin-left: 0px;">
    <label> Tahun <span>*</span> </label>
    <select name="f1-tahun">
      <option value=""> - Pilih Tahun - </option>
      <?php get_tahun(); ?>
    </select>
  </div>

  <div class="one_half first clear">
    <label> Publikasi <span>*</span> </label>
    <select name="f3-publikasi">
      <option value=""> - Pilih Publikasi - </option>
      <?php get_publikasi(); ?>
    </select>
  </div>

  <div class="block clear">
    <label> Judul <span>*</span> </label>
    <!-- <input type="text" name="f3-judul"> -->
    <textarea name="f3-judul" form=""></textarea>
  </div>

  <div class="block">
    <label> Penulis Publikasi <span>*</span> </label>
    <input type="text" name="f3-penulis">
  </div>

  <div class="block">
    <label> Nama Jurnal <span>*</span> </label>
    <input type="text" name="f3-jurnal">
  </div>

  <div class="one_quarter" style="margin-left: 0px;">
    <label> ISSN <span>*</span> </label>
    <input type="text" name="f3-issn">
  </div>

  <div class="one_quarter">
    <label> Volume <span>*</span> </label>
    <input type="text" name="f3-issn">
  </div>

  <div class="one_quarter">
    <label> Nomor <span>*</span> </label>
    <input type="text" name="f3-nomor">
  </div>

  <div class="one_quarter">
    <label> Halaman <span>*</span></label>
    <input type="text" name="f3-halaman" style="display: inline ; width: 30%; ">
    <label id="sd" style="display: inline;">s/d</label>
    <input type="text" name="f3-halaman" style="display: inline; width: 30%;">
  </div>

  <div class="one_half first">
    <label> Sumber Dana <span>*</span> </label>
    <input type="text" name="f1-dana">
  </div>

  <div class="one_half">
    <label> Jumlah Dana <span>*</span></label>
    <input type="text" name="f1-dana">
  </div>

  <div class="block">
    <label> URL <span>*</span> </label>
    <input type="text" name="f3-url">
  </div>

  <br>
  <hr>
</div>

<script type="text/javascript">
  
  function tambah_jurnal() {

  }

</script>