<br>
<div id="step-3" style="display: none;" class="block clear">
  <label> <b>Luaran</b> </label>

  <div class="block" style="float: left">
    <input class="one_third" type="checkbox" name="lampiran[]" id="cb-jurnal" onclick="jurnal()" style="width: 30px; margin-left: 0px; margin-top: 5px;" value='jurnal'>
    Publikasi Jurnal
    <br>
  </div>

  <div class="block" style="float: left">
    <input class="one_third" type="checkbox" name="lampiran[]" id="cb-buku" onclick="buku()" style="width: 30px; margin-left: 0px; margin-top: 5px;" value='buku'/>
    Buku Ajar/Teks
    <br>
  </div>

  <div class="block" style="float: left">
    <input class="one_third" type="checkbox" name="lampiran[]" id="cb-pemakalah" onclick="pemakalah()" style="width: 30px; margin-left: 15px; margin-top: 5px;" value='pemakalah' />
    Pemakalah Forum Ilmiah
    <br>
  </div>

  <div class="block" style="float: left">
    <input class="one_third" type="checkbox" name="lampiran[]" id="cb-hki" onclick="hki()" style="width: 30px; margin-left: 15px; margin-top: 5px;" value='hki'/>
    Hak Kekayaan Intelektual (HKI)
    <br>
  </div>

  <div class="block" style="float: left">
    <input class="one_third" type="checkbox" name="lampiran[]" id="cb-luaranlain" onclick="luaranlain()" style="width: 30px; margin-left: 15px; margin-top: 5px;" value='luaranlain'/>
    Luaran Lain
    <br>
  </div>
  <br><br>
  <hr>
</div>

<script type="text/javascript">
  function checkLampiran(){
    var tc = document.getElementsByClassName("mychecked");
      for(var i=0; i< tc.length; i++){
        if(tc[i].checked == true){
          _("form-"+tc[i].value).style.display = "block";
        }else{
          _("form-"+tc[i].value).style.display = "none";
        }
      }
  }
</script>


<?php 
  include("page/luaran/jurnal.php");
  include("page/luaran/bukuajar.php");
  include("page/luaran/pemakalah.php");
  include("page/luaran/hki.php");
  include("page/luaran/luaran-lain.php");
?>