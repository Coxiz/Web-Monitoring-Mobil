    <footer class="footer">
        <div class="container">
            
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Developed by
                <a href="https://www.instagram.com/mahdiarief">Arief Mahdi</a>
            </div>
        </div>
    </footer>
    </div>
</div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('bootstrap/assets/js/core/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/assets/js/core/popper.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/assets/js/core/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-X32_gyzSz_oWdr7fNOpwUeunbOOOwB0"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('bootstrap/assets/js/plugins/chartjs.min.js')?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('bootstrap/assets/js/plugins/bootstrap-notify.js')?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('bootstrap/assets/js/now-ui-dashboard.min.js?v=1.2.0')?>" type="text/javascript"></script>
    <!-- ---JS--- -->
    <script src="<?php echo base_url('bootstrap/assets/js/datatables.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('bootstrap/assets/js/js/buttons.bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('bootstrap/assets/js/jszip.min.js')?>" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker({
                minDate: 0 // set the minDate to the today's date
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#example").DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'excel'
                ]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#examplebiasa").DataTable({
                //scrollX: true
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#examplescroll").DataTable({
                scrollX: true
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#history").DataTable({
                dom : 'Bfrtip',
                scrollX: true,
                buttons : [
                    'excel'
                ]
            });
        });
    </script>
</body>

</html>