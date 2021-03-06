<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sports App!</title>
      <link href="<?=base_url()?>Assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?=base_url()?>Assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>Assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>Assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>Assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url()?>Assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url()?>Assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url()?>Assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>Assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body>
       
                <?php $this->load->view('common/header');?>

                <?php echo $content;?>
                
                <?php $this->load->view('common/footer');?>

                
            


    <script src="<?=base_url()?>Assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>Assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>Assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>Assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url()?>Assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url()?>Assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url()?>Assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>Assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url()?>Assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url()?>Assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>Assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>Assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>Assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>Assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url()?>Assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url()?>Assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url()?>Assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url()?>Assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url()?>Assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url()?>Assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url()?>Assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>Assets/build/js/custom.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>Assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>


    </body>
</html>