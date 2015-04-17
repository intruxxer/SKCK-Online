    <div id="page-wrapper">
     <br />
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
        <h3>
         Pendaftaran
        </h3>
      </div>
	  
	  <div id="dialog-form">
		<form class="reg_form" id="regForm" method="post" enctype="multipart/form-data">
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
								<label for="text">Tujuan:</label>
								<textarea class="form-control" rows="3" id="purpose_desc" name="purpose_desc"></textarea>
							  </div>
					  </div>
					  <div class="col-xs-5">
						  <div class="form-group">
							<label for="ktp">Status:</label>
							<select class="form-control" id="status_type" name="status_type">
									<option value="D">D</option>
									<!--<option value="F"></option>-->
								</select>
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
									<option value="M">Laki-laki</option>
									<option value="F">Perempuan</option>
								</select>
							  </div>
							 <div class="form-group">
								<label for="text">Agama:</label>
								<input type="text" class="form-control" id="applicant_religion" name="applicant_religion">
							  </div>
						 </div>
						 <div class="col-xs-4">
							
							<div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								<input type="text" class="form-control" id="applicant_citizenship" name="applicant_citizenship">
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
							 <div class="form-group">
								<label for="text">No. Kitaps:</label>
								<input type="text" class="form-control" id="applicant_kitaps" name="applicant_kitaps">
							  </div>
							
							
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
								<label for="text">Rumus Sidik Jari:</label>
								<input type="text" class="form-control" id="applicant_rumussidikjari" name="applicant_rumussidikjari">
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
										<input type="text" class="form-control" id="applicant_spouse_religion" name="applicant_spouse_religion">
									  </div>
								  </div>
							  </div>
							  
						 </div>
						 <div class="col-xs-5">
							<div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								<input type="text" class="form-control" id="applicant_spouse_citizenship" name="applicant_spouse_citizenship">
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
										<input type="text" class="form-control" id="applicant_father_religion" name="applicant_father_religion">
									  </div>
								  </div>
							  </div>
							  <div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								<input type="text" class="form-control" id="applicant_father_citizenship" name="applicant_father_citizenship">
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
										<input type="text" class="form-control" id="applicant_mother_religion" name="applicant_mother_religion">
									  </div>
								  </div>
							  </div>
							  <div class="form-group">
								<label for="text">Kewarganegaraan:</label>
								<input type="text" class="form-control" id="applicant_mother_citizenship" name="applicant_mother_citizenship">
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
									<option value="Tidak Pernah">Tidak Pernah</option>
									<option value="Pernah">Pernah</option>
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
								<select class="form-control" id="applicant_pelanggran" name="applicant_pelanggran">
									<option value="Tidak Pernah">Tidak Pernah</option>
									<option value="Pernah">Pernah</option>
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
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								   <tr>
									<td class="mytable">Paspor</td>
									<td class="mytable"><div id="passport_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Kartu Keluarga</td>
									<td class="mytable"><div id="familycard_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Akta Kelahiran</td>
									<td class="mytable"><div id="birthcert_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								   <tr>
									<td class="mytable">Sidik Jari</td>
									<td class="mytable"><div id="fingerprint_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Surat Sponsor</td>
									<td class="mytable"><div id="corp_sponsor_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Surat Nikah</td>
									<td class="mytable"><div id="marital_letter_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
								  </tr>
								  <tr>
									<td class="mytable">Report Evidence</td>
									<td class="mytable"><div id="report_evidence_file"></div></td>
									<td class="mytable"><button class="btn btn-info btn-xs">Download</button>&nbsp;<button class="btn btn-danger btn-xs">Hapus</button></td>
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
										<option value="6">Surat Sponsor</option>
										<option value="7">Surat Nikah</option>
										<option value="8">Report Evidence</option>
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
        <div class="col-xs-7">
			<!--<form class="form-inline role="form">
				<div class="form-group myhead">
					<label>Pencarian:</label> &nbsp;<input type="text" id="keyword" name="keyword" class="form-control" />
					<button type="button" class="btn btn-info btn-sm" id="btn_cari">Cari</button>
				</div>
			</form>-->
		</div>
		<div class="col-xs-5">
			<div class="myhead">
				<button type="button" class="btn btn-info btn-sm" id="btn_add">Add</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_edit">Edit</button>
				<button type="button" class="btn btn-info btn-sm" id="btn_print">Print</button>
			</div>
		</div>	
		 
		  
		  
		  <script type="text/javascript">
			  var mode = 0;
			  $(function() {
				
				$("#tabs").tabs();
				$("#tabsFamily").tabs();
				$("#tabsPidana").tabs();
				$("#tabsEducation").tabs();
				$("#applicant_birthdate").datepicker({ dateFormat: 'yy-mm-dd' });
                $("#list1").jqGrid({
                    url:'<?=site_url('registration/loadData')?>',
                    mtype : "post",             
                    datatype: "json",            
                    colNames:['No.', 'ID', 'No. KTP','Nama Lengkap','Tgl. Lahir','Jenis Kelamin','Alamat'],
                    colModel:[
                        {name:'no',index:'no', width:2, align:"center"},
						{name:'id',index:'id', hidden:true},
                        {name:'applicant_id',index:'applicant_id', width:5, align:"center"},
                        {name:'applicant_name',index:'applicant_name', width:7, align:"left"},
                        {name:'applicant_birthdate',index:'applicant_birthdate', width:7, align:"center"},
						{name:'applicant_sex',index:'applicant_sex', width:5, align:"center"},
						{name:'applicant_address_doc',index:'applicant_address_doc', width:7, align:"left"},
                    ],
                    rowNum:20,
                    width: 850,
                    height: 250,
                    rowList:[10,20,30],
                    pager: '#pager1',
                    sortname: 'applicant_name',
                    viewrecords: true,
                    caption:"Pendaftaran",
					
					
                }).navGrid('#pager1',{edit:false,add:false,del:false, view:false}
					
				);
				
			$("#regForm").validate({
				rules: {
					applicant_id : "required"
				},
				messages : {
					applicant_id: "Silakan isi No. KTP",
				},
				errorClass: "my-error-class",
				validClass: "my-valid-class",
				highlight: function (element) {
					$(element).closest('.form-group').addClass('has-error');
					$(element).addClass('select-class');                      

				},
				unhighlight: function (element) {
					$(element).closest('.form-group').removeClass('has-error');
					$(element).removeClass('select-class');   
				},
			});	
			
			$('#skck_ktp').fileupload({
				 url:'<?=site_url('registration/upload_file')?>',
				dataType: 'json',
				done: function (e, data) {
					alert('Upload berhasil');
				},
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#progress .progress-bar').css(
						'width',
						progress + '%'
					);
				}
			});
		
			
			$("#btn_print").click(function(){
				var rowdata = $("#list1").jqGrid('getGridParam','selrow');
				if(rowdata){
					var data = $("#list1").jqGrid('getRowData',rowdata);
					if(data)
					{
						window.location.href = '<?=site_url("registration/print_word")?>/' + data.id;
					}
				}
			});
			
			$("#btn_add").click(function(){
				//clear fields
				
				 $('#dialog-form').find("input[type=text], textarea").val("");
				 
				$("#ktp_file").html('');
				$("#passport_file").html('');
				$("#familycard_file").html('');
				$("#birthcert_file").html('');
				$("#fingerprint_file").html('');
				$("#corp_sponsor_file").html('');
				$("#marital_letter_file").html('');
				$("#report_evidence_file").html('');
				
				
				$("#dialog-form").dialog('option','title', 'Add Data');
				$("#dialog-form").dialog('open');
				mode = 1;
			});
			
			
			$("#btn_edit").click(function(){
				var rowdata = $("#list1").jqGrid('getGridParam','selrow');
				if(rowdata){
					
					
					var data = $("#list1").jqGrid('getRowData',rowdata);
					
					if(data)
					{
						//alert(data.id);
						$( "#dialog-form" ).dialog('option','title', 'Edit Data');
						$("#dialog-form").dialog('open');
						mode = 0;
						$.ajax({url: "<?=site_url('registration/get_applicant')?>/" + data.id, dataType: "JSON", success: function(json){
							if(json)
							{
								//alert(json[0].applicant_name);
								$("#applicant_id").val(json[0].applicant_id);
								$("#id").val(json[0].id);
								$("#applicant_name").val(json[0].applicant_name);
								$("#purpose_desc").val(json[0].purpose_desc);
								$("#status_type").val(json[0].status_type);
								$("#applicant_birthplace").val(json[0].applicant_birthplace);
								$("#applicant_birthdate").val(json[0].applicant_birthdate);
								$("#applicant_religion").val(json[0].applicant_religion);
								$("#applicant_sex").val(json[0].applicant_sex);
								$("#applicant_citizenship").val(json[0].applicant_citizenship);
								$("#applicant_address_now").val(json[0].applicant_address_now);
								$("#applicant_address_doc").val(json[0].applicant_address_doc);
								$("#applicant_occupation").val(json[0].applicant_occupation);
								$("#applicant_passport").val(json[0].applicant_passport);
								$("#applicant_kitaps").val(json[0].applicant_kitaps);
								$("#applicant_phone").val(json[0].applicant_phone);
								$("#applicant_edu_primary").val(json[0].applicant_edu_primary);
								$("#applicant_edu_primary_city").val(json[0].applicant_edu_primary_city);
								$("#applicant_edu_primary_year").val(json[0].applicant_edu_primary_year);
								$("#applicant_edu_secondary").val(json[0].applicant_edu_secondary);
								$("#applicant_edu_secondary_city").val(json[0].applicant_edu_secondary_city);
								$("#applicant_edu_secondary_year").val(json[0].applicant_edu_secondary_year);
								$("#applicant_edu_tertiary").val(json[0].applicant_edu_tertiary);
								$("#applicant_edu_tertiary_city").val(json[0].applicant_edu_tertiary_city);
								$("#applicant_edu_tertiary_year").val(json[0].applicant_edu_tertiary_year);
								$("#applicant_edu_bachelor").val(json[0].applicant_edu_bachelor);
								$("#applicant_edu_bachelor_city").val(json[0].applicant_edu_bachelor_city);
								$("#applicant_edu_bachelor_year").val(json[0].applicant_edu_bachelor_year);
								$("#applicant_edu_master").val(json[0].applicant_edu_master);
								$("#applicant_edu_master_city").val(json[0].applicant_edu_master_city);
								$("#applicant_edu_master_year").val(json[0].applicant_edu_master_year);
								$("#applicant_edu_doctoral").val(json[0].applicant_edu_doctoral);
								$("#applicant_edu_doctoral_city").val(json[0].applicant_edu_doctoral_city);
								$("#applicant_edu_doctoral_year").val(json[0].applicant_edu_doctoral_year);
								$("#applicant_rambut").val(json[0].applicant_rambut);
								$("#applicant_kulit").val(json[0].applicant_kulit);
								$("#applicant_wajah").val(json[0].applicant_wajah);
								$("#applicant_tinggibadan").val(json[0].applicant_tinggibadan);
								$("#applicant_beratbadan").val(json[0].applicant_beratbadan);
								$("#applicant_tandakhusus").val(json[0].applicant_tandakhusus);
								$("#applicant_rumussidikjari").val(json[0].applicant_rumussidikjari);
								$("#applicant_spouse_type").val(json[0].applicant_spouse_type);
								$("#applicant_spouse_name").val(json[0].applicant_spouse_name);
								$("#applicant_spouse_age").val(json[0].applicant_spouse_age);
								$("#applicant_spouse_religion").val(json[0].applicant_spouse_religion);
								$("#applicant_spouse_citizenship").val(json[0].applicant_spouse_citizenship);
								$("#applicant_spouse_occupation").val(json[0].applicant_spouse_occupation);
								$("#applicant_spouse_address").val(json[0].applicant_spouse_address);
								$("#applicant_father_name").val(json[0].applicant_father_name);
								$("#applicant_father_age").val(json[0].applicant_father_age);
								$("#applicant_father_citizenship").val(json[0].applicant_father_citizenship);
								$("#applicant_father_religion").val(json[0].applicant_father_religion);
								$("#applicant_father_occupation").val(json[0].applicant_father_occupation);
								$("#applicant_father_address").val(json[0].applicant_father_address);
								$("#applicant_mother_name").val(json[0].applicant_mother_name);
								$("#applicant_mother_age").val(json[0].applicant_mother_age);
								$("#applicant_mother_citizenship").val(json[0].applicant_mother_citizenship);
								$("#applicant_mother_religion").val(json[0].applicant_mother_religion);
								$("#applicant_mother_occupation").val(json[0].applicant_mother_occupation);
								$("#applicant_mother_address").val(json[0].applicant_mother_address);
								
								var name = json[0].applicant_siblings_names;
								var names = name.split(",");
								if(names.length  == 3)
								{
									$("#applicant_sibling1_name").val(names[0]);
									$("#applicant_sibling2_name").val(names[1]);
									$("#applicant_sibling3_name").val(names[2]);
								}
								
								var age = json[0].applicant_siblings_ages;
								var ages = age.split(",");
								if(ages.length  == 3)
								{
									$("#applicant_sibling1_age").val(ages[0]);
									$("#applicant_sibling2_age").val(ages[1]);
									$("#applicant_sibling3_age").val(ages[2]);
								}
								
								var address = json[0].applicant_siblings_addresses;
								var addresses = address.split(",");
								if(addresses.length  == 3)
								{
									$("#applicant_sibling1_address").val(addresses[0]);
									$("#applicant_sibling2_address").val(addresses[1]);
									$("#applicant_sibling3_address").val(addresses[2]);
								}
								
								$("#applicant_pidana").val(json[0].applicant_pidana);
								$("#applicant_pidana_apa").val(json[0].applicant_pidana_apa);
								$("#applicant_pidana_proses").val(json[0].applicant_pidana_proses);
								$("#applicant_pidana_kasus").val(json[0].applicant_pidana_kasus);
								$("#applicant_pidana_sampaimana").val(json[0].applicant_pidana_sampaimana);
								$("#applicant_pidana_putusansementara").val(json[0].applicant_pidana_putusansementara);
								$("#applicant_pidana_putusanakhir").val(json[0].applicant_pidana_putusanakhir);
								$("#applicant_pelanggaran").val(json[0].applicant_pelanggaran);
								$("#applicant_pelanggaran_apa").val(json[0].applicant_pelanggaran_apa);
								$("#applicant_pelanggaran_proses").val(json[0].applicant_pelanggaran_proses);
								$("#applicant_pelanggaran_sampaimana").val(json[0].applicant_pelanggaran_sampaimana);
								
								$("#ktp_file").html(json[0].skck_ktp);
								$("#passport_file").html(json[0].skck_passport);
								$("#familycard_file").html(json[0].skck_familycard);
								$("#birthcert_file").html(json[0].skck_birthcert);
								$("#fingerprint_file").html(json[0].skck_fingerprint);
								$("#corp_sponsor_file").html(json[0].skck_corp_sponsor);
								$("#marital_letter_file").html(json[0].skck_marital_letter);
								$("#report_evidence_file").html(json[0].skck_report_evidence);
							}
						 }});
					}
				}
			});
			
			
			});//end
			
			$("#dialog-form").dialog({
				modal: true,
				draggable: true,
				resizable: true,
				position: { my: 'top', at: 'top+51' },
				show: 'blind',
				hide: 'blind',
				width: 800,
				dialogClass: 'ui-dialog-osx',
				autoOpen: false,
				
				buttons: 
					{
						"Simpan" : function(){
							if($("#regForm").valid())
							{
								if(mode == 0)
								{
									$.ajax({
										url: "<?=site_url('registration/update')?>",
										data: $("#regForm").serialize(),
										dataType: 'JSON',
										method: "POST",
										beforeSend:function(){
											
										},
										error: function(){
											alert('Data gagal disimpan');
										},
										success: function(data){
											if(data){
												alert(data.msg);
											}
											$(this).dialog("close");
										}
									});
								}
								else
								{
									$.ajax({
										url: "<?=site_url('registration/save_data')?>",
										data: $("#regForm").serialize(),
										dataType: 'JSON',
										method: "POST",
										beforeSend:function(){
											
										},
										error: function(){
											alert('Data gagal disimpan');
										},
										success: function(data){
											if(data){
												alert(data.msg);
											}
											
											$(this).dialog("close");
										}
									});
								}
							}
							
							
						},
						"Tutup": function() {
							$(this).dialog("close");
						}
						
					},
				open: function(){
					$('.ui-dialog-titlebar-close').addClass('ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only');
					$('.ui-dialog-titlebar-close').append('<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">close</span>');
					$('.my-error-class').text('');
					$('.form-group').removeClass('has-error');
					$('.form-control').removeClass('select-class');  
					$('#progress .progress-bar').css('width', '0%');
				}
				
			});
        </script>
        
    </div>
	  
	<div class="row">
		<table id="list1"></table> <!--Grid table-->
		<div id="pager1"></div>  <!--pagination div-->
	</div>
      </div>