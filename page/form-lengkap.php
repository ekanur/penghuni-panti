<style type="text/css">

	#myform {
		/*border-top: 3px solid rgb(0,85,150);*/
		background: white;
		color: rgb(100,100,100);
		padding: 5% 14%;
	}

	#myform input, #myform textarea, #myform select{
    display: block;
    width:100%;
    -ms-box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box; 
    box-sizing:border-box;
    outline: none;
    padding:8px 12px;
    margin: 4px 0;
    border:0.5px solid #969696;
  }

  .one_half > a {
  	color: rgb(0,85,150);
  }

  .one_half {
  	margin-bottom: 2%;
  }

</style>

<?php 
	include('db/getdata.php');
?>
<div>
<form id="myform" method="post">
	
	<h1>Kinerja</h1>

	<div id="step1">
		<label> Pilih Jenis Kinerja </label>
		<select onchange="showForm(this.value)">
			<option value=""> - Pilih Jenis Kinerja - </option>
			<option value="1">Penelitian - Ditlitabmas</option>
			<option value="2">Penelitian - Non-Ditlitabmas</option>
			<option value="3">Pengabdian - Ditlitabmas</option>
			<option value="4">Pengabdian - Non-Ditlitabmas</option>
		</select>
        </div>

	<div id="step-2" style="display: none;"> 
		<label> Tahun <span>*</span> </label>

		<select name="f1-tahun">
			<option value=""> - Pilih Tahun - </option>
			<?php get_tahun(); ?>
		</select>

		<label> Judul Penelitian <span>*</span> </label>

		<textarea name="f1-judul" form=""></textarea>

		<label> Ketua Penelitian <span>*</span> </label>
		<input type="text" name="f1-ketua">

		<div id="add_member">
			<label> Anggota <span>*</span> (maksimal 5)</label>
		</div>

		<div class="one_third anggota">
			<a href='javascript:void(0);' onclick='addInput(" + addid + ")' id='addlink_" + addid + "'>Tambah Anggota</a>
		</div>
		<br><br>
	</div>


	<?php
		include("page/kinerja/penelitian-ditlitabmas.php");
		include("page/kinerja/penelitian-non-ditlitabmas.php");
		include("page/kinerja/pengabdian-ditlitabmas.php");
		include("page/kinerja/pengabdian-non-ditlitabmas.php");
    include("page/luaran.php");
	?>

	<br>
	<div class="first">
		<input type="submit" name="submit" value="Tambahkan" style="width: 100px">
	</div>
</form>


<script type="text/javascript">

	function _(x){return document.getElementById(x);}
  
  function showForm(x){
    if(x != "") {
      _("step-2").style.display = "block";
    } else {
      _("step-2").style.display = "none"; 
      _("form-jurnal").style.display = "none";
      _("form-bukuajar").style.display = "none";
      _("form-pemakalah").style.display = "none";
      _("form-hki").style.display = "none";
      _("form-luaranlain").style.display = "none";
    }

    _("step-2-1").style.display = "none";
    _("step-2-2").style.display = "none";
    _("step-2-3").style.display = "none";
    _("step-2-4").style.display = "none";
    _("step-3").style.display = "none";

    if(x >= 1 && x <= 4) {
      if(x == 1) {
        _("step-2-1").style.display = "block";
      } else if(x == 2) {
        _("step-2-2").style.display = "block";
      } else if(x == 3) {
        _("step-2-3").style.display = "block";
      } else if(x == 4){
        _("step-2-4").style.display = "block";
      }
      _("step-3").style.display = "block";
    }
  }

  var addid = 0;
  function addInput(id) {
    var addList = document.getElementById('add_member');
    var docstyle = addList.style.display;
    if (docstyle == 'none') addList.style.display = '';
        addid++;

    if (addid <= 5) {
       var text = document.createElement('div');
       text.id = 'additem_' + addid;
       text.innerHTML = " <input type='text' name='f1-anggota'><a href='javascript:void(0);' onclick='removeInput()>X</a>";
       addList.appendChild(text);
    } else {
    	alert('Anggota maksimal 5 orang!');
    } 
  }

  function removeInput() {
    $(this).parents('.anggota').remove();
  }
</script>
</div>