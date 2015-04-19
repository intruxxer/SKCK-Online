<nav class="navbar navbar-default"  id="step1">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-home"></span>&nbsp;e-SKCK </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo base_url('apply') ?>">
              <span class="glyphicon glyphicon-list-alt"></span> &nbsp;
              Aplikasi SKCK Baru<!--<span class="caret"></span>-->
            </a>
            <!--<ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url('apply') ?>">Ajukan Aplikasi SKCK Baru</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('apply/perpanjangan') ?>">Ajukan Aplikasi Perpanjangan SKCK</a></li>
            </ul>-->
        </li>
         <li>
           <a href="<?php echo base_url('beranda/tentangskck') ?>">
             <span class="glyphicon glyphicon-bullhorn"></span> &nbsp;
             Tentang SKCK
           </a>
         </li>
         <li>
           <a href="<?php echo base_url('beranda/penggunaansitus') ?>">
              <span class="glyphicon glyphicon-sort-by-alphabet"></span> &nbsp;
              Panduan SKCK Online
           </a>
         </li>
      </ul>
       <?php  $attributes = array('class' => 'navbar-form navbar-right', 'role' => 'search', 'id' => 'step2');
          echo form_open('apply/cariskck', $attributes);
        ?>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Masukkan No. e-SKCK" name="app_id">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> &nbsp;Cari e-SKCK</button>
         </form>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
        <h1 id="step1">Panduan SKCK Online</h1>
        <p id="step4" class="lead">Melalui petunjuk dari kami, anda akan semakin memahami fitur dan cara penggunaan sistem SKCK Online.</p>
        <a class="btn btn-large btn-primary" href="javascript:void(0);" onclick="startIntro();">Pelajari SKCK Online</a>
</div>
<hr>
