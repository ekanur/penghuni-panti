<div id="step-2-4" style="display: none;">
  <h3>Pengabdian Non-Ditlitabmas</h3>

  <label> Sumber Daya IPTEK <span>*</span> </label>
  <select id="sd-iptek">
    <option value=""> - Pilih Sumber Daya IPTEK - </option>
    <?php get_sumber_daya_iptek(); ?>
  </select>

  <label> Tahun Kegiatan <span>*</span> </label>
  <input type="text" name="f1-dana" style="display: inline; width: 20%;">
  <label style="display: inline;">s/d</label>
  <input type="text" name="f1-dana" style="display: inline; width: 20%;">
  <br>

  <label> Urutan Tahun ke <span>*</span> </label>
  <select id="sdi-1">
    <option value="urutan-1">1</option>
    <option value="urutan-2">2</option>
    <option value="urutan-3">3</option>
    <option value="urutan-4">4</option>
    <option value="urutan-5">5</option>
  </select>

  <label> Personil <span>*</span> </label>
  <input type="text" name="f1-jml-mahasiswa" placeholder="Jumlah Mahasiswa *">
  <input type="text" name="f1-jml-alumni" placeholder="Jumlah Alumni *">
  <input type="text" name="f1-jml-staf" placeholder="Jumlah Staf Pendukung *">

  <label> Sumber Dana <span>*</span> </label>
  <select name="sumber-dana" id="sumber-dana">
    <option> - Pilih Sumber Dana - </option>  
    <?php get_sumber_dana(); ?>
  </select>
   
  <label> Jumlah Dana <span>*</span></label>
  <input type="text" name="f1-dana">

  <label> URL <span>*</span> </label>
  <input type="text" name="url">

<hr>
</div>