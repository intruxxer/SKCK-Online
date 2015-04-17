<div class="page-wrapper">
     <br />
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("home"); ?>">
            <?php echo ucfirst('home');?>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("pendaftaran"); ?>">		
			<?php echo ucfirst($this->uri->segment(1));?>
		  </a>
        </li>
        <li class="active">
          Detail
        </li>
      </ul>
      <div class="page-header">
        <h2>
          Detail
        </h2>
      </div>
	  
	  <?php
	  //print_r($p);
	  ?>
	  <div class="row">
		 <div class="col-lg-5">
		<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Personal Data</h3>
		</div>
		<div class="panel-body">
			
			<fieldset>
			<div class="control-group">
				<label>Nama Lengkap</label>
				<div class="controls readonly"><?php echo $p[0]['applicant_name']; ?></div>
			</div>
			<div class="control-group">
				<label>No KTP</label>
				<div class="controls readonly"><?php echo $p[0]['applicant_id']; ?></div>
			</div>
			 </fieldset>
			
		</div>
		</div>
	  </div>
	  </div>
</div>