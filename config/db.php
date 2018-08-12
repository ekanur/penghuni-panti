<?php
$h = "localhost";
$u = "pma";
$p = "123";
$db = "penghuni-panti";

$conx = mysqli_connect($h,$u,$p);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


mysqli_select_db($conx,$db) or die("Database tidak ditemukan");

$targetFolder = "file/member";
function winloc($x){
	?>
	<script type='text/javascript'>
		window.location = "<?php echo $x;?>";
	</script>
	<?php 
}

function _esc($x){
	global $conx;
	return mysqli_escape_string($conx,$x);
}
