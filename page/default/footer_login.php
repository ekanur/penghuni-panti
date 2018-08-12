<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap4.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Share Plugin -->
<script src="assets/js/jquery.sharrre.js"></script>
<!--  jVector Map  -->
<script src="assets/js/jquery-jvectormap.js" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>
<!--  DatetimePicker   -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<!--  Sweet Alert  -->
<script src="assets/js/sweetalert2.min.js" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="assets/js/bootstrap-tagsinput.js" type="text/javascript"></script>
<!--  Sliders  -->
<script src="assets/js/nouislider.js" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Bootstrap Table Plugin -->
<script src="assets/js/bootstrap-table.js"></script>
<!--  DataTable Plugin -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<!--  Full Calendar   -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script>
    $(document).ready(function() {
        checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)

        function checkFullPageBackgroundImage() {
            $page = $('.full-page');
            image_src = $page.data('image');

            if (image_src !== undefined) {
                image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>'
                $page.append(image_container);
            }
        }

    });
</script>
<!-- Facebook Pixel Code Don't Delete -->
<!-- End Facebook Pixel Code -->

</html>