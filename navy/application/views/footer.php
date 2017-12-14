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
    <!--Javascript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url().'assets/js/jquery-migrate-1.2.1.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.easytabs.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery.validate.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/modernizr.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/placeholders.min.js' ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/Switcher/switcher.js' ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/script.js' ?>" type="text/javascript"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
  </body>
</html>
