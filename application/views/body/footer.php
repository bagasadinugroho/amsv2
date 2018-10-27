            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <footer class="footer">
                &copy; 2018 Monster Admin Customized by BANS
            </footer> -->
            <footer class="footer">
                Copyright &copy; 2018 Bagas Adi Nugroho Sugiharto | All Right Reserved
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()."assets/";?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()."assets/";?>plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()."assets/";?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()."assets/";?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()."assets/";?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()."assets/";?>plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()."assets/";?>js/custom.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url()."assets/";?>js/toastr.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url()."assets/";?>plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url()."assets/";?>plugins/Chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>js/dashboard2.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url()."assets/";?>plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url()."assets/";?>js/morris-data.js"></script>
    <!-- This is data table -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url()."assets/";?>plugins/datatables-button/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables-button/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables-button/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>plugins/datatables-button/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()."assets/";?>plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script>
    $(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>
</body>
</html>