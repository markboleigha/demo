<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
      </div>
    </div>

    <!-- END JAVASCRIPTS -->
    <script type="text/javascript">
      $(function(){
        $('.datepicker').datepicker({
           format: 'yyyy-mm-dd',
           autoclose: true,
           title: 'Pick a value'
         });

         $('select').selectpicker();

      });



     </script>

     <script type="text/javascript">
       $(document).ready(function() {
                table = $('#example').DataTable( {
                   dom: 'Bfrtip',
                   lengthChange: false,
                   "ordering": true,
                   "aaSorting": [],
                   "scrollX": true,
                    buttons: [
                       {
                           extend: 'copy',
                           exportOptions: {
                               columns: "thead th:not(.noExport)"
                           }
                       },
                       {
                           extend: 'excel',
                           exportOptions: {
                               columns: "thead th:not(.noExport)"
                           }
                       },
                       {
                           extend: 'pdf',
                           exportOptions: {
                               columns: "thead th:not(.noExport)"
                           }
                       },

                    ]
               } );

               table.buttons().container()
                   .appendTo( '#example_wrapper .col-md-3:eq(0)' );
           } );

    </script>
    <!--Javascript-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-migrate-1.2.1.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.easytabs.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.validate.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/modernizr.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/placeholders.min.js' ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/Switcher/switcher.js' ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-select.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/script.js' ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.buttons.min.js');?>"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.bootstrap4.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
    <script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
  </body>
</html>
