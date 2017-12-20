<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<!DOCTYPE html>

<html class="no-js">
  <head>


	 <!-- Metas -->
    <meta charset="utf-8">
    <title><?php echo ucwords($title); ?></title>
    <meta name="description" content="">
  	<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link href="<?php echo base_url().'assets/css/owl-carousel/owl.carousel.css' ?>" rel="stylesheet"  media="all">
		<link href="<?php echo base_url().'assets/css/owl-carousel/owl.theme.css' ?>" rel="stylesheet"  media="all">
		<link href="<?php echo base_url().'assets/css/magnific-popup.css' ?>" type="text/css" rel="stylesheet" media="all" />
		<link href="<?php echo base_url().'assets/css/font.css' ?>" rel="stylesheet" type="text/css"  media="all">
		<link href="<?php echo base_url().'assets/css/fontello.css' ?>" rel="stylesheet" type="text/css"  media="all">
		<link href="<?php echo base_url().'assets/css/base.css' ?>" rel="stylesheet" type="text/css" media="all"/>
		<link href="<?php echo base_url().'assets/css/main.css' ?>"  rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.dataTables.min.css');?>">
    <script src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js' ?>" type="text/javascript"></script>

  </head>

  <body>
    <?php /*
    <!-- Preloader -->
    <div id="loader">
    		<!-- Preloader inner -->
      <div id="loaderInner">
    	<div class="spinner"></div>
      </div>
    <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    */?>

    <div id="wrapper" class="margLTop  margLBottom">
      <!--Container-->
    	<div class="container">
