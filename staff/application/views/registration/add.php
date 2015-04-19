<?php
$this->load->view('scp/vwHeader');
?>
<div id="page-wrapper">

	<div class="row">
          <div class="col-lg-12">
            <h1>Suppliers <small>Add Supplier</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('scp/supplier'); ?>"><i class="icon-dashboard"></i> Suppliers</a></li>
              <li class="active"><i class="icon-file-alt"></i> Add Supplier</li>
              
              
             
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
		
		<?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new supplier created with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
	  
		<?php
			$attributes = array('class' => 'form-horizontal', 'id' => '');
			echo validation_errors();
			echo form_open('scp/supplier/add', $attributes);
		?>
		
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">Name</label>
				<div class="col-xs-4">
					<input type="name" class="form-control" id="name" placeholder="Supplier Name" name="name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress" class="control-label col-xs-2">Address</label>
				<div class="col-xs-7">
					<input type="address" class="form-control" id="address" placeholder="Address" name="address">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPhone" class="control-label col-xs-2">Phone</label>
				<div class="col-xs-4">
					<input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone">
				</div>
			</div>
			<div class="form-group">
				<label for="inputContact" class="control-label col-xs-2">Contact Person</label>
				<div class="col-xs-4">
					<input type="contact" class="form-control" id="contact" placeholder="Contact Person" name="contact">
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputCPPhone" class="control-label col-xs-2">Contact Person Number</label>
				<div class="col-xs-4">
					<input type="contact_person_phone" class="form-control" id="contact_person_phone" placeholder="Contact Person Phone" name="contact_person_phone">
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-xs-offset-2 col-xs-10">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		
		
		<?php echo form_close(); ?>

	
</div>
<?php
$this->load->view('scp/vwFooter');
?>