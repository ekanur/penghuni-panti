<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">

                </nav>
                <p class="copyright pull-right">
                    &copy; 2018 <a href="http://www.google.com">Panti ABCD</a>
                </p>
            </div>
        </footer>

    </div>

</div>

<div id="hapusTerampil" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                Anda yakin akan menghapus data keterampilan atasnama <strong id="nama"></strong> ?

            </div>
            <div class="modal-footer">
                <a href=""  class="btn btn-secondary waves-effect" data-dismiss="modal">Tidak</a>
                <form action="page/terampil/hapus.php" method="post">
                    <input type="hidden" name="id" >
                    <button class="btn btn-success waves-effect waves-light">Ya</button>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="hapusIrp" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                Anda yakin akan menghapus data IRP atasnama <strong id="nama"></strong> ?

            </div>
            <div class="modal-footer">
                <a href=""  class="btn btn-secondary waves-effect" data-dismiss="modal">Tidak</a>
                <form action="page/terampil/hapus.php" method="post">
                    <input type="hidden" name="id" >
                    <button class="btn btn-success waves-effect waves-light">Ya</button>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="hapusAlatBantu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Alat Bantu</h4>
            </div>
            <div class="modal-body">
                Anda yakin akan menghapus data alat bantu ?

            </div>
            <div class="modal-footer">
                <a href=""  class="btn btn-secondary waves-effect" data-dismiss="modal">Tidak</a>
                <form action="page/alat_bantu/hapus.php" method="post">
                    <input type="hidden" name="id" >
                    <button class="btn btn-success waves-effect waves-light">Ya</button>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div id="hapusIntervensi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Intervensi Penghuni Panti</h4>
            </div>
            <div class="modal-body">
                Anda yakin akan menghapus data Intervensi ?

            </div>
            <div class="modal-footer">
                <a href=""  class="btn btn-secondary waves-effect" data-dismiss="modal">Tidak</a>
                <form action="page/intervensi/hapus.php" method="post">
                    <input type="hidden" name="id" >
                    <button class="btn btn-success waves-effect waves-light">Ya</button>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
    <!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/popper.min.js" type="text/javascript"></script>

<!-- Highchart -->

<script type="text/javascript" src="assets/js/highchart/highcharts.js"></script>
<script type="text/javascript" src="assets/js/highchart/modules/data.js"></script>
<script type="text/javascript" src="assets/js/highchart/modules/exporting.js"></script>
<script type="text/javascript" src="assets/js/highchart/modules/export-data.js"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>


<script src="assets/js/demo.js"></script>

<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#tamu_internasionalTable").DataTable();
    });
</script>

<script type="text/javascript">
        var hash = document.location.hash;
        var prefix = "tab_";
        if (hash) {
          $('#myTab a[href="'+hash.replace(prefix,"")+'"]').tab('show');
          $('#myTabDashboard a[href="'+hash.replace(prefix,"")+'"]').tab('show');
        }else{
          $("#myTab a[href='#biodata']").tab("show");
          $("#myTabDashboard a[href='#klien']").tab("show");
        }

// Change hash for page-reload
$('#myTab a').on('shown.bs.tab', function (e) {
  window.location.hash = e.target.hash.replace("#", "#" + prefix);
});

$(document).ready(function(){
$("#hapusTerampil").on("show.bs.modal", function (event) {
                const biodata = $(event.relatedTarget);

                var id = biodata.data("id");
                var nama = biodata.data("name");


                $("strong#nama").html(nama);
                $("input[name='id']").val(id);

});
});
</script>

<script type="text/javascript">
    Highcharts.chart('chart_klien', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Klien'
    },
    subtitle: {
        text: 'Berdasarkan Kecamatan'
    },
    xAxis: {
        categories: [
            'Lowokwaru',
            'Klojen',
            'Sukun'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} responden</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.02,
            borderWidth: 1
        }
    },
    data: {
      table: 'tabel_klien'
    },
    series: [{
      name: 'Jumlah Klien'
    }]
});
</script>


</html>
