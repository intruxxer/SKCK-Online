<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SKCK Administration</title>
	
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
	
	<script type="text/javascript">
		var BASE_URL = '<?=base_url()?>';
	</script>
	
	<script src="<?php echo HTTP_JS_PATH; ?>backend.js"  type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
	
	<link href="<?php echo HTTP_CSS_PATH; ?>jquery-ui.min.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>jquery-ui.theme.min.css" rel="stylesheet">
	
	
	<link href="<?php echo HTTP_CSS_PATH; ?>ui.jqgrid.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>ui.jqgrid-bootstarp.css" rel="stylesheet">
	<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">
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
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><!--<img src="<?=base_url()?>assets/images/logo_polri_ori.png" style="max-width:35px;margin-top: -10px;"/>--></a>
        </div>
 <?php 
// Define a default Page
  $pg = isset($page) && $page != '' ?  $page :'dash'  ;    
?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left navbar-user">
				<li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Data <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>registration/data_reg"><span class="glyphicon glyphicon-import"></span>&nbsp; Pendaftaran</a></li>
                
              </ul>
            </li>
			</ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Selamat Datang, <?php echo ucfirst($this->session->userdata('staff_username')); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>-->
                <li><a href="<?php echo base_url(); ?>home/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
