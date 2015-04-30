    <!--<div style="text-align: center;">
    &nbsp;
    </div>-->
    <br/>
    <div style="text-align: center;">
          <img style="text-align: center;" src="<?php echo base_url('assets/images/logo_polri.png'); ?>" width="75" height="75" >
          <h3>Panel Administrasi e-SKCK</h3>
    </div>
    <!--<div style="text-align: center;"><p class="text-center"></p></div>-->
    <div id="page-wrapper">
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("home"); ?>">
            <?php echo ucfirst('home');?>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url("registration"); ?>">		
			Data
		  </a>
        </li>
        <li class="active">
          Pendaftaran
        </li>
      </ul>
      <div class="page-header">
        <h4>
         Pendaftaran
        </h4>
      </div>
	  
	  <div id="dialog-form">
		
		<?php
		$attributes = array('class' => 'reg_form', 'id' => 'regForm');
		echo form_open_multipart('profile/edit', $attributes);
		?>
			<div class="row">
				<div id="tabs">
				  <ul>
					<li><a href="#tabs-1">Pendaftaran</a></li>
					<li><a href="#tabs-2">Data Pribadi</a></li>
					<li><a href="#tabs-3">Pendidikan</a></li>
					<li><a href="#tabs-4">Ciri Fisik</a></li>
					<li><a href="#tabs-5">Keluarga</a></li>
					<li><a href="#tabs-6">Pelanggaran</a></li>
					<li><a href="#tabs-7">Keterangan</a></li>
					<li><a href="#tabs-8">Dokumen</a></li>
				  </ul>
				  <div id="tabs-1">
					<div class="row">
					   <div class="col-xs-5">
						 
						  <div class="form-group">
							<label for="ktp">No. KTP:</label>
							<input type="text" class="form-control" id="applicant_id" name="applicant_id">
							<input type="hidden" id="id" name="id">
						  </div>
						  <div class="form-group">
							<label for="ktp">Application ID:</label>
							<input type="text" class="form-control" id="application_id" name="application_id">
							
						  </div>
						  
						  <div class="row">
								<div class="col-xs-3">
									<img id="photo" style="width:160px;height:160px" class="form-control" src=""/>
								</div>
						  </div>
					  </div>
					  <div class="col-xs-5">
						  <div class="form-group">
							<label for="ktp">Status:</label>
							<select class="form-control" id="status_type" name="status_type">
									<option value="D">D - Daftar</option>
									<option value="L">L - Lengkap</option>
									<option value="P">P - Print</option>
								</select>
						  </div>
						   <div class="form-group">
							<label for="applicant_name">Email:</label>
							<input type="text" class="form-control" id="applicant_email" name="applicant_email">
						  </div>
						  <div class="form-group">
								<label for="text">Tujuan:</label>
								<textarea class="form-control" rows="3" id="purpose_desc" name="purpose_desc"></textarea>
							  </div>
					  </div>
					  
					</div>
				  </div>
				  <div id="tabs-2">
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<label for="applicant_name">Nama Lengkap:</label>
								<input type="text" class="form-control" id="applicant_name" name="applicant_name">
							  </div>
							<div class="form-group">
								<label for="text">Tempat Lahir:</label>
								<input type="text" class="form-control" id="applicant_birthplace" name="applicant_birthplace">
							  </div>
							<div class="form-group">
								<label for="text">Tanggal Lahir:</label>
								<input type="text" class="form-control" id="applicant_birthdate" name="applicant_birthdate">
							  </div>
							 <div class="form-group">
								<label for="text">Jenis Kelamin:</label>
								
								<select class="form-control" id="applicant_sex" name="applicant_sex">
									<option value="M">Laki-Laki</option>
									<option value="F">Perempuan</option>
								</select>
							  </div>
							 <div class="form-group">
								<label for="text">Agama:</label>
								
								<select class="form-control" id="applicant_religion" name="applicant_religion">
									<option value="Islam">Islam</option>
									<option value="Katolik">Katolik</option>
									<option value="Protestan">Protestan</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Konghucu">Konghucu</option>
									<option value="-">Aliran Kepercayaan</option>
								</select>
							  </div>
						 </div>
						 <div class="col-xs-4">
							
							<div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								
								<select class="form-control" id="applicant_citizenship" name="applicant_citizenship">
									<option value="I">Warga Negara Indonesia</option>
									<option value="A">Warga Negara Asing</option>
								</select>
							  </div>
							<div class="form-group">
								<label for="text">Pekerjaan:</label>
								<input type="text" class="form-control" id="applicant_occupation" name="applicant_occupation">
							  </div>
							  <div class="form-group">
								<label for="text">Alamat Di Dokumen:</label>
								<textarea class="form-control" rows="3" id="applicant_address_doc" name="applicant_address_doc"></textarea>
							  </div>
							  <div class="form-group">
								<label for="text">Alamat Saat Ini:</label>
								<textarea class="form-control" rows="3" id="applicant_address_now" name="applicant_address_now"></textarea>
							  </div>
							
						 </div>
						
						 
						 <div class="col-xs-4">
							<div class="form-group">
								<label for="text">No. Telp:</label>
								<input type="text" class="form-control" id="applicant_phone" name="applicant_phone">
							  </div>
							<div class="form-group">
								<label for="text">No. Passport:</label>
								<input type="text" class="form-control" id="applicant_passport" name="applicant_passport">
							  </div>
							 <!--<div class="form-group">
								<label for="text">No. Kitaps:</label>
								<input type="text" class="form-control" id="applicant_kitaps" name="applicant_kitaps">
							  </div>-->
							
							
						 </div>
					 </div>
				  </div>
				  <div id="tabs-3">
					<div id="tabsEducation">
					  <ul>
						<li><a href="#te-1">SD</a></li>
						<li><a href="#te-2">SMP</a></li>
						<li><a href="#te-3">SMA</a></li>
						<li><a href="#te-5">S1</a></li>
						<li><a href="#te-6">S2</a></li>
						<li><a href="#te-7">S3</a></li>
					  </ul>
					  <div id="te-1">
						<div class="row">
							<div class="col-xs-7">
							<div class="form-group">
							    <label for="nama_lengkap">Nama SD:</label>
								<input type="text" class="form-control" id="applicant_edu_primary" name="applicant_edu_primary">
							</div>
							<div class="form-group">
								<label for="text">Kota:</label>
								<input type="text" class="form-control" id="applicant_edu_primary_city" name="applicant_edu_primary_city">
							  </div>
							<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_primary_year" name="applicant_edu_primary_year">
										</div>
									</div>
							</div>
						 </div>
						</div>
					  </div>
					  <div id="te-2">
						<div class="row">
							<div class="col-xs-7">
							
							<div class="form-group">
								<label for="text">Nama SMP:</label>
								<input type="text" class="form-control" id="applicant_edu_secondary" name="applicant_edu_secondary">
							  </div>
							<div class="form-group">
								<label for="text">Kota:</label>
								<input type="text" class="form-control" id="applicant_edu_secondary_city" name="applicant_edu_secondary_city">
							  </div>
							<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_secondary_year" name="applicant_edu_secondary_year">
										</div>
									</div>
							</div>
							
						 </div>
						</div>
					  </div>
					  <div id="te-3">
						<div class="row">
							<div class="col-xs-7">
								<div class="form-group">
								<label for="text">Nama SMA:</label>
								<input type="text" class="form-control" id="applicant_edu_tertiary" name="applicant_edu_tertiary">
							  </div>
								<div class="form-group">
									<label for="text">Kota:</label>
									<input type="text" class="form-control" id="applicant_edu_tertiary_city" name="applicant_edu_tertiary_city">
								  </div>
								<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_tertiary_year" name="applicant_edu_tertiary_year">
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div id="te-5">
						<div class="row">
							<div class="col-xs-7">
								<div class="form-group">
								<label for="text">Nama Perguruan Tinggi S1:</label>
								<input type="text" class="form-control" id="applicant_edu_bachelor" name="applicant_edu_bachelor">
							  </div>
								<div class="form-group">
									<label for="text">Kota:</label>
									<input type="text" class="form-control" id="applicant_edu_bachelor_city" name="applicant_edu_bachelor_city">
								  </div>
								<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_bachelor_year" name="applicant_edu_bachelor_year">
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div id="te-6">
						<div class="row">
							<div class="col-xs-7">
								<div class="form-group">
								<label for="text">Nama Perguruan Tinggi S2:</label>
								<input type="text" class="form-control" id="applicant_edu_master" name="applicant_edu_master">
							  </div>
								<div class="form-group">
									<label for="text">Kota:</label>
									<input type="text" class="form-control" id="applicant_edu_master_city" name="applicant_edu_master_city">
								  </div>
								<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_master_year" name="applicant_edu_master_year">
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div id="te-7">
						<div class="row">
							<div class="col-xs-7">
								<div class="form-group">
								<label for="text">Nama Perguruan Tinggi S3:</label>
								<input type="text" class="form-control" id="applicant_edu_doctoral" name="applicant_edu_doctoral">
							  </div>
								<div class="form-group">
									<label for="text">Kota:</label>
									<input type="text" class="form-control" id="applicant_edu_doctoral_city" name="applicant_edu_doctoral_city">
								  </div>
								<div class="row">
									<div class="col-xs-3">
										<div class="form-group">
											<label for="text">Tahun Lulus:</label>
											<input type="text" class="form-control" id="applicant_edu_doctoral_year" name="applicant_edu_doctoral_year">
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					</div>  
				  </div>
				
				  <div id="tabs-4">
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="nama_lengkap">Rambut:</label>
								<input type="text" class="form-control" id="applicant_rambut" name="applicant_rambut">
							  </div>
							<div class="form-group">
								<label for="text">Wajah:</label>
								<input type="text" class="form-control" id="applicant_wajah" name="applicant_wajah" >
							  </div>
							<div class="form-group">
								<label for="text">Kulit:</label>
								<input type="text" class="form-control" id="applicant_kulit" name="applicant_kulit" >
							  </div>
							  <div class="row">
								  <div class="col-xs-5">
									  <div class="form-group">
										<label for="nama_lengkap">Tinggi Badan (cm):</label>
										<input type="text" class="form-control" id="applicant_tinggibadan" name="applicant_tinggibadan">
									  </div>
								  </div>
								  <div class="col-xs-5">
									<div class="form-group">
										<label for="text">Berat Badan (kg):</label>
										<input type="text" class="form-control" id="applicant_beratbadan" name="applicant_beratbadan">
										
									  </div>
									</div>
							  </div>
							  
						 </div>
						 <div class="col-xs-5">
							<div class="form-group">
								<label for="text">Tanda Khusus:</label>
								<input type="text" class="form-control" id="applicant_tandakhusus" name="applicant_tandakhusus">
							  </div>
							<div class="form-group">
								<label for="text">Rumus Sidik Jari 1:</label>
								<input type="text" class="form-control" id="applicant_rumussidikjari" name="applicant_rumussidikjari">
							  </div>
							<div class="form-group">
								<label for="text">Rumus Sidik Jari 2:</label>
								<input type="text" class="form-control" id="applicant_rumussidikjari2" name="applicant_rumussidikjari2">
							  </div>
						 </div>
					 </div>
				  </div>
				  <div id="tabs-5">
					  <div id="tabsFamily">
					  <ul>
						<li><a href="#tb-1">Pasangan</a></li>
						<li><a href="#tb-2">Ayah</a></li>
						<li><a href="#tb-3">Ibu</a></li>
						<li><a href="#tb-4">Saudara 1</a></li>
						<li><a href="#tb-5">Saudara 2</a></li>
						<li><a href="#tb-6">Saudara 3</a></li>
						<li><a href="#tb-7">Saudara 4</a></li>
						<li><a href="#tb-8">Saudara 5</a></li>
						<li><a href="#tb-9">Saudara 6</a></li>
					  </ul>
					  <div id="tb-1">
						<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Pasangan:</label>
								<select class="form-control" id="applicant_spouse_type" name="applicant_spouse_type">
									<option value="S">Suami</option>
									<option value="I">Istri</option>
								</select>
							  </div>
							<div class="form-group">
								<label for="text">Nama Pasangan:</label>
								<input type="text" class="form-control" id="applicant_spouse_name" name="applicant_spouse_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_spouse_age" name="applicant_spouse_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  <div class="form-group">
										<label for="text">Agama:</label>
										
										<select class="form-control" id="applicant_spouse_religion" name="applicant_spouse_religion">
											<option value="Islam">Islam</option>
											<option value="Katolik">Katolik</option>
											<option value="Protestan">Protestan</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
											<option value="Konghucu">Konghucu</option>
											<option value="-">Aliran Kepercayaan</option>
										</select>
									  </div>
								  </div>
							  </div>
							  
						 </div>
						 <div class="col-xs-5">
							<div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								
								<select class="form-control" id="applicant_spouse_citizenship" name="applicant_spouse_citizenship">
									<option value="I">Warga Negara Indonesia</option>
									<option value="A">Warga Negara Asing</option>
								</select>
							  </div>
							   <div class="form-group">
								<label for="text">Pekerjaan:</label>
								<input type="text" class="form-control" id="applicant_spouse_occupation" name="applicant_spouse_occupation">
							  </div>
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_spouse_address" name="applicant_spouse_address"></textarea>
							  </div>
						 </div>
						
						</div>
					  
					  </div>
					   <div id="tb-2">
					   <div class="row">
						<div class="col-xs-5">
							
							<div class="form-group">
								<label for="text">Nama Ayah:</label>
								<input type="text" class="form-control" id="applicant_father_name" name="applicant_father_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_father_age" name="applicant_father_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  <div class="form-group">
										<label for="text">Agama:</label>
										
										<select class="form-control" id="applicant_father_religion" name="applicant_father_religion">
											<option value="Islam">Islam</option>
											<option value="Katolik">Katolik</option>
											<option value="Protestan">Protestan</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
											<option value="Konghucu">Konghucu</option>
											<option value="-">Aliran Kepercayaan</option>
										</select>
									  </div>
								  </div>
							  </div>
							  <div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								
								<select class="form-control" id="applicant_father_citizenship" name="applicant_father_citizenship">
									<option value="I">Warga Negara Indonesia</option>
									<option value="A">Warga Negara Asing</option>
								</select>
							  </div>
						</div>
						<div class="col-xs-5">
							  <div class="form-group">
								<label for="text">Pekerjaan:</label>
								<input type="text" class="form-control" id="applicant_father_occupation" name="applicant_father_occupation">
							  </div>
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_father_address" name="applicant_father_address"></textarea>
							  </div>
						 </div>
						
					 </div>
					  </div>
					   <div id="tb-3">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Ibu:</label>
								<input type="text" class="form-control" id="applicant_mother_name" name="applicant_mother_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_mother_age" name="applicant_mother_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  <div class="form-group">
										<label for="text">Agama:</label>
										
										<select class="form-control" id="applicant_mother_religion" name="applicant_mother_religion">
											<option value="Islam">Islam</option>
											<option value="Katolik">Katolik</option>
											<option value="Protestan">Protestan</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
											<option value="Konghucu">Konghucu</option>
											<option value="-">Aliran Kepercayaan</option>
										</select>
									  </div>
								  </div>
							  </div>
							  <div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								
								<select class="form-control" id="applicant_mother_citizenship" name="applicant_mother_citizenship">
									<option value="I">Warga Negara Indonesia</option>
									<option value="A">Warga Negara Asing</option>
								</select>
							  </div>
						  </div>
						  <div class="col-xs-5">
							  <div class="form-group">
								<label for="text">Pekerjaan:</label>
								<input type="text" class="form-control" id="applicant_mother_occupation" name="applicant_mother_occupation">
							  </div>
							   <div class="form-group">
								<label for="text">Alamat:</label>
								
								<textarea class="form-control" rows="3" id="applicant_mother_address" name="applicant_mother_address"></textarea>
							  </div>
						 </div>
						 
					 </div>
					  </div>
					   <div id="tb-4">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Saudara 1:</label>
								<input type="text" class="form-control" id="applicant_sibling1_name" name="applicant_sibling1_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling1_age" name="applicant_sibling1_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							 
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_sibling1_address" name="applicant_sibling1_address"></textarea>
							  </div>
						 </div>
						 <div class="col-xs-5">
							
						 </div>
					 </div>
					  </div>
					  <div id="tb-5">
					   <div class="row">
						<div class="col-xs-5">
							
							<div class="form-group">
								<label for="text">Nama Saudara 2:</label>
								<input type="text" class="form-control" id="applicant_sibling2_name" name="applicant_sibling2_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling2_age" name="applicant_sibling2_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							  
							   <div class="form-group">
								<label for="text">Alamat:</label>
								
								<textarea class="form-control" rows="3" id="applicant_sibling2_address" name="applicant_sibling2_address"></textarea>
							  </div>
						 </div>
						 <div class="col-xs-5">
							
						 </div>
					 </div>
					  </div>
					  <div id="tb-6">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Saudara 3:</label>
								<input type="text" class="form-control" id="applicant_sibling3_name" name="applicant_sibling3_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling3_age"  name="applicant_sibling3_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							  
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_sibling3_address" name="applicant_sibling3_address"></textarea>
							  </div>
						 </div>
						 
					 </div>
					 </div>
					 <div id="tb-7">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Saudara 4:</label>
								<input type="text" class="form-control" id="applicant_sibling4_name" name="applicant_sibling4_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling4_age"  name="applicant_sibling4_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							  
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_sibling4_address" name="applicant_sibling4_address"></textarea>
							  </div>
						 </div>
						 
					 </div>
					 </div>
					 <div id="tb-8">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Saudara 5:</label>
								<input type="text" class="form-control" id="applicant_sibling5_name" name="applicant_sibling5_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling5_age"  name="applicant_sibling5_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							  
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_sibling5_address" name="applicant_sibling5_address"></textarea>
							  </div>
						 </div>
						 
					 </div>
					 </div>
					 <div id="tb-9">
					   <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="text">Nama Saudara 6:</label>
								<input type="text" class="form-control" id="applicant_sibling6_name" name="applicant_sibling6_name">
							  </div>
							  <div class="row">
								  <div class="col-xs-4">
									<div class="form-group">
									<label for="text">Umur:</label>
									<input type="text" class="form-control" id="applicant_sibling6_age"  name="applicant_sibling6_age">
									</div>
								</div>
							  
								  <div class="col-xs-6">
									  
								  </div>
							  </div>
							  
							   <div class="form-group">
								<label for="text">Alamat:</label>
								<textarea class="form-control" rows="3" id="applicant_sibling6_address" name="applicant_sibling6_address"></textarea>
							  </div>
						 </div>
						 
					 </div>
					 </div>
					</div>
					</div>
					
					<div id="tabs-6">
					 <div id="tabsPidana">
					  <ul>
						<li><a href="#tp-1">Pidana</a></li>
						<li><a href="#tp-2">Pelanggaran</a></li>
					  </ul>
					   <div id="tp-1">
						<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="nama_lengkap">Pidana:</label>
								<select class="form-control" id="applicant_pidana" name="applicant_pidana">
									<option value="TP">Tidak Pernah</option>
									<option value="P">Pernah</option>
								</select>
							  </div>
							   <div class="form-group">
								<label for="text">Nama Pidana:</label>
								<input type="text" class="form-control" id="applicant_pidana_apa" name="applicant_pidana_apa">
							  </div>
							  <div class="form-group">
								<label for="text">Proses Pidana:</label>
								<input type="text" class="form-control" id="applicant_pidana_proses" name="applicant_pidana_proses">
							  </div>
							  <div class="form-group">
								<label for="text">Kasus Pidana:</label>
								<input type="text" class="form-control" id="applicant_pidana_kasus" name="applicant_pidana_kasus">
							  </div>
							</div>
							<div class="col-xs-5">
							   <div class="form-group">
								<label for="text">Pidana Sampai Mana:</label>
								<input type="text" class="form-control" id="applicant_pidana_sampaimana" name="applicant_pidana_sampaimana">
							  </div>
							   <div class="form-group">
								<label for="text">Putusan Sementara:</label>
								<input type="text" class="form-control" id="applicant_pidana_putusansementara" name="applicant_pidana_putusansementara">
							  </div>
							   <div class="form-group">
								<label for="text">Putusan Akhir:</label>
								<input type="text" class="form-control" id="applicant_pidana_putusanakhir" name="applicant_pidana_putusanakhir">
							  </div>
						  </div>
						  </div>
					   </div>
					   <div id="tp-2">
					     <div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="nama_lengkap">Pelanggaran:</label>
								<select class="form-control" id="applicant_pelanggaran" name="applicant_pelanggaran">
									<option value="TP">Tidak Pernah</option>
									<option value="P">Pernah</option>
								</select>
							  </div>
							   <div class="form-group">
								<label for="text">Nama Pelanggaran:</label>
								<input type="text" class="form-control" id="applicant_pelanggaran_apa" name="applicant_pelanggaran_apa">
							  </div>
							  <div class="form-group">
								<label for="text">Proses Pelanggaran:</label>
								<input type="text" class="form-control" id="applicant_pelanggaran_proses" name="applicant_pelanggaran_proses">
							  </div>
							  <div class="form-group">
								<label for="text">Pelanggaran Sampai Mana:</label>
								<input type="text" class="form-control" id="applicant_pelanggaran_sampaimana" name="applicant_pelanggaran_sampaimana">
							  </div>
							</div>
							
						  </div>
					   </div>
					  </div>
					  
					</div>
					<div id="tabs-7">
						<div class="row">
							<div class="col-xs-5">
								<div class="form-group">
									<label for="nama_lengkap">History Luar Negeri:</label>
									<textarea class="form-control" rows="2" id="applicant_hist_oversea" name="applicant_hist_oversea"></textarea>
								</div>
								<div class="form-group">
									<label for="nama_lengkap">History Pekerjaan:</label>
									<textarea class="form-control" rows="2" id="applicant_hist_occupation"  name="applicant_hist_occupation"></textarea>
								</div>
								<div class="form-group">
									<label for="nama_lengkap">History Hobi:</label>
									<textarea class="form-control" rows="2" id="applicant_hist_hobby" name="applicant_hist_hobby"></textarea>
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Alamat Saat Ini:</label>
									<textarea class="form-control" rows="2" id="applicant_curr_address" name="applicant_curr_address"></textarea>
								</div>
							  </div>
							  <div class="col-xs-5">
								<div class="form-group">
									<label for="nama_lengkap">WNA Sponsor:</label>
									<input type="text" class="form-control" id="applicant_wna_sponsor" name="applicant_wna_sponsor">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">Pekerjaan WNA Sponsor:</label>
									<input type="text" class="form-control" id="applicant_wna_sponsor_occupation" name="applicant_wna_sponsor_occupation">
								</div>
								<div class="form-group">
									<label for="nama_lengkap">No. Telepon WNA Sponsor:</label>
									<input type="text" class="form-control" id="applicant_wna_sponsor_phone" name="applicant_wna_sponsor_phone">
								</div>
							  </div>
						  </div>
					 </div>
					 <div id="tabs-8">
						<div class="row">
						<div class="col-xs-8">
							<table class="mytable">
								<thead>
									<tr>
										<th class="mytable">Dokumen</th>
										<th class="mytable">Nama File</th>
										<th class="mytable"></th>
									</tr>
								</thead>
								<tbody>
								  <tr>
									<td class="mytable">KTP</td>
									<td class="mytable"><div id="ktp_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_ktp">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_ktp">Hapus</button></td>
								  </tr>
								   <tr>
									<td class="mytable">Paspor</td>
									<td class="mytable"><div id="passport_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_passport">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_passport">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Kartu Keluarga</td>
									<td class="mytable"><div id="familycard_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_kk">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_kk">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Akta Kelahiran</td>
									<td class="mytable"><div id="birthcert_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_akta">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_akta">Hapus</button></td>
								  </tr>
								   <tr>
									<td class="mytable">Sidik Jari</td>
									<td class="mytable"><div id="fingerprint_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_finger">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_finger">Hapus</button></td>
								  </tr>
								 
								  <tr>
									<td class="mytable">Surat Polsek</td>
									<td class="mytable"><div id="polsek_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_polsek">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_polsek">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Surat Desa</td>
									<td class="mytable"><div id="desa_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_desa">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_desa">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Surat Kecamatan</td>
									<td class="mytable"><div id="kecamatan_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_kecamatan">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_kecamatan">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Pas Foto</td>
									<td class="mytable"><div id="foto_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs" id="btn_download_foto">Download</button>&nbsp;<button class="btn btn-danger btn-xs" id="btn_del_foto">Hapus</button></td>
								  </tr>
								 </tbody>
							</table>
						</div>
						  
						</div>
						<div class="row">
							<div class="col-xs-5">
								<br />
								
								<div class="form-group form-inline">
									<label>Upload</label>
									<select id="file_type" name="file_type">
										<option value="1">KTP</option>
										<option value="2">Paspor</option>
										<option value="3">Kartu Keluarga</option>
										<option value="4">Akta Kelahiran</option>
										<option value="5">Sidik Jari</option>
										<option value="6">Surat Polsek</option>
										<option value="7">Surat Desa</option>
										<option value="8">Surat Kecamatan</option>
										<option value="9">Pas Foto</option>
									</select>
									<input type="file" class="form-control form-inline" id="myfile" name="myfile" title=" ">
									<div id="progress" class="progress">
										<div class="progress-bar progress-bar-success"></div>
									</div>
								</div>	
							</div>
						</div>
					 </div>	
				
				  
				  
					
				  </div>
				
				 
			</div>
			</form>
		</div>
      
      <div class="row">
        <div class="col-xs-4">
			<form class="form-inline role="form">
				<div class="form-group myhead">
					<!--<label>Pencarian</label>&nbsp;<select name="search_col" id="search_col" class="form-control" style="height:30px;font-size:97%;"><option value="1">Nama</option>			<option value="2">KTP</option><option value="3">Application ID</option></select> <input type="text" id="keyword" name="keyword" class="form-control" />&nbsp;<button type="button" class="btn btn-info btn-sm" id="btn_cari">Cari</button>-->
				</div>
			</form>
			
		</div>
		<div class="col-xs-8">
			<div class="myhead">
				<button type="button" class="btn btn-info btn-sm" id="btn_add">Add</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_edit">Edit</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_delete">Hapus</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_print">Print SKCK</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_print2">Print Pertanyaan</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_print3">Print Kartu Tik</button>
				<!--<button type="button" class="btn btn-info btn-sm" id="btn_refresh">Refresh</button>-->
			</div>
		</div>	
		 
    </div>
	  
	<div class="row">
		
		<table id="list1"></table> <!--Grid table-->
		<div id="pager1"></div>  <!--pagination div-->
	</div>
</div>
<script src="<?php echo HTTP_JS_PATH; ?>jquery.limit-1.2.source.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#applicant_address_doc').limit('100');
		$('#applicant_address_now').limit('100');
	});
</script>