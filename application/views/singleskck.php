<div class="row">
	<div class="col-md-12">
		<div class="panel panel-success">
	      <div class="panel-heading">
	        <h3 class="panel-title">SKCK Anda</h3>
	      </div>
	      <table class="table table-bordered">
		  	<thead>
			  	<tr>
			  		<th>No. Aplikasi</th>
			  		<th>Aplikan</th>
			  		<th>Tujuan Aplikasi</th>
			  		<th>Status Aplikasi</th>
			  		<th>Waktu Aplikasi</th>
		  		</tr>
		  	</thead>
		  	<tbody>
		  		<?php foreach($single_skck as $skck) { ?>
				<tr>
			  		<td><?= $skck->application_id; ?></td>
			  		<td><?= $skck->applicant_name; ?></td>
			  		<td><?= $skck->purpose_desc; ?></td>
			  		<td>
			  			<?php if($skck->status_type == 'D') echo 'Terdaftar'; ?>
			  			<?php if($skck->status_type == 'L') echo 'Lengkap'; ?>
			  			<?php if($skck->status_type == 'P') echo 'Sudah Diterbitkan'; ?>
			  		</td>
			  		<td><?= date('d F Y',strtotime($skck->timestamps)); ?></td>
		  		</tr>
		  		<?php } ?>
		  	</tbody>
		  </table>
	    </div>
	</div>
</div>