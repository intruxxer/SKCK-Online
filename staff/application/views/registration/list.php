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
          Data Masuk
        </li>
      </ul>
      <div class="page-header">
        <h2>
          Data Masuk
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
           
			
			$options_order = array('id'=>'Id', 'nama'=>'Nama');
			
			$options_pk = array('0'=>'');
			for($i=1; $i<=50; $i++)
				$options_pk[$i] = $i;
				
				

            echo form_open('pendaftaran/data_masuk', $attributes);
     
              echo form_label('Cari Nama: &nbsp;', 'search_string');
              echo form_input('search_string', $search_string_selected, 'style="width: 170px;height: 22px;"');
			  
			  echo form_label('&nbsp;No. KTP: &nbsp;', 'search_string2');
              echo form_input('search_string2', $search_string_selected, 'style="width: 170px;height: 22px;"');

              //echo form_label('Filter by PK:', 'pk_id');
              //echo form_dropdown('pk_id', $options_pk, $pk_selected, 'class="span1"');

              //echo form_label('Order by:', 'order');
			  //echo form_dropdown('order', $options_order, $order, 'class="span2"');
              //echo form_dropdown('order', $options_products, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Cari');

              //options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              //echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');
			  echo "&nbsp;";
              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Nama</th>
                <th class="green header">NO KTP</th>
                
                <th class="red header">Tempat Lahir</th>
                <th class="red header">Tanggal Lahir</th>
				<!--<th class="red header">Telp</th>-->
                <th class="red header">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
			  $no;
              foreach($pendaftaran as $row)
              {
                echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$row['applicant_name'].'</td>';
                echo '<td>'.$row['applicant_id'].'</td>';
                echo '<td>'.$row['applicant_birthplace'].'</td>';
                echo '<td>'.$row['applicant_birthdate'].'</td>';
                //echo '<td>'.$row[''].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("pendaftaran").'/view/'.$row['id'].'" class="btn btn-info btn-xs">view</a>  
                  <a href="'.site_url("pendaftaran").'/update/'.$row['id'].'" class="btn btn-info btn-xs">edit</a>  
                </td>';
                echo '</tr>';
				$no++;
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>