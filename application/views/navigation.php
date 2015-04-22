<nav class="navbar navbar-default">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <span class="glyphicon glyphicon-list-alt"></span> &nbsp;
              Aplikasi SKCK<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="<?php echo base_url('apply') ?>">
                  <span class="glyphicon glyphicon-import"></span> &nbsp;Aplikasi SKCK Baru</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="<?php echo base_url('apply/perpanjangan') ?>">
                  <span class="glyphicon glyphicon-export"></span> &nbsp;Aplikasi Perpanjangan SKCK</a>
              </li>
            </ul>
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
       <?php  $attributes = array('class' => 'navbar-form navbar-right', 'role' => 'search');
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
