<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APP</title>
	
    <script src="<?php echo HTTP_JS_PATH; ?>jquery-1.11.0.min.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery-ui.min.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.validate.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.form.min.js"></script>
	
	<script src="<?php echo HTTP_JS_PATH; ?>bootstrap.min.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>i18n/grid.locale-en.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.jqGrid.min.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.iframe-transport.js"></script>
	<script src="<?php echo HTTP_JS_PATH; ?>jquery.fileupload.js"></script>
    
    <script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
	
	<link href="<?php echo HTTP_CSS_PATH; ?>jquery-ui.min.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>jquery-ui.theme.min.css" rel="stylesheet">
	
	
	<link href="<?php echo HTTP_CSS_PATH; ?>ui.jqgrid.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>ui.jqgrid-bootstarp.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo HTTP_CSS_PATH; ?>arkadmin.css" rel="stylesheet">
	
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-custom  navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">TEST</a>
        </div>
 <?php 
// Define a default Page
  $pg = isset($page) && $page != '' ?  $page :'dash'  ;    
?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left navbar-user">
				<li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Data <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>registration/data_reg"><i class="fa fa-user"></i> Pendaftaran</a></li>
                
              </ul>
            </li>
			</ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('staff_username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="<?php echo base_url(); ?>home/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
