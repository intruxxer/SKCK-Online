<?php


class Registration extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
        
        if(!$this->session->userdata('is_user_login')){
            redirect('home');
        }
		
		//$this->output->enable_profiler(TRUE);
    }
	
	public function index()
	{
		redirect('registration/data_reg');
	}
	
	public function loadData()
	{
		$searchString = $this->input->post('searchString');
		$searchField = $this->input->post('searchField');        
		$searchOper = $this->input->post('searchOper');        
		$search = $this->input->post('_search');      
        $status_type = 'D';
		
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$config['per_page'] = 20;
		
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        }
		
		if($search !== false){ 
		
			$pCount = $this->pendaftaran_model->count_pendaftaran($status_type, $searchString, $searchField, $searchOper);
			$pData = $this->pendaftaran_model->get_pendaftaran($status_type,  $searchString, $searchField, $searchOper, $config['per_page'],$limit_end);  
		}
		else
		{
			$pCount = $this->pendaftaran_model->count_pendaftaran($status_type,  $searchString, $searchField, $searchOper);
			$pData = $this->pendaftaran_model->get_pendaftaran($status_type, null, null,null, $config['per_page'],$limit_end);  
			//print_r($pData);
		}
		
		$d = new StdClass;
		$d->total = $pCount/$config['per_page']; //total pages
		$d->records = $pCount;
		
		
		
		
		$i = 0;
		foreach($pData as $row)
		{
			$d->rows[$i]['id'] = $row['id'];
			
			$sex = ($row['applicant_sex']=='M')?'Laki-laki':'Perempuan';
			$no = $i + 1 + $limit_end;
			$d->rows[$i]['cell'] = array($no, $row['id'], $row['applicant_id'], $row['applicant_name'], 
				$row['applicant_birthdate'], $sex, $row['applicant_address_doc']);	
			$i++;
		}
		
		
		echo json_encode($d);
	}
	
	public function get_applicant()
	{
		$id = $this->uri->segment(3);
		$d = $this->pendaftaran_model->get_pendaftaran_by_id($id);
		echo json_encode($d);
	}
	
	public function data_reg()
	{
		//load the view
		$data['page'] = 'Data Masuk';
        $data['main_content'] = 'registration/list_grid';
        $this->load->view('template', $data); 
	}
	
	public function print_word()
	{
		$this->load->library('word');
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$section = $phpWord->addSection();
		
		$id = $this->uri->segment(3);
		$d = $this->pendaftaran_model->get_pendaftaran_by_id($id);
		
		$section->addText(
			htmlspecialchars($d[0]['applicant_name'])
		);

		
		$filename = "print".$id.".doc";
		$phpWord->save($filename, 'Word2007', true);
		
	}
	
	public function save_data()
	{
		$array = array('msg' => 'Data berhasil disimpan');
		
		//save table registration
		$reg = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'status_type' => $this->input->post('status_type'),
			'purpose_desc' => $this->input->post('purpose_desc'),
			'unit_type' => 'JATIM001C',
			'reg_type' => '1',
			'staff_id' => $this->session->userdata('id'),
			'timestamps' => date('Y-m-d H:i:s')
		);
		
		$reg_id = $this->pendaftaran_model->store_registration($reg);
		if($reg_id < 0)
			$array['msg'] = 'Data Registration gagal disimpan';
		else
		{
			//save table personal data
			$personaldata = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_name' => $this->input->post('applicant_name'),
				'applicant_birthplace' => $this->input->post('applicant_birthplace'),
				'applicant_birthdate' => $this->input->post('applicant_birthdate'),
				'applicant_religion' => $this->input->post('applicant_religion'),
				'applicant_citizenship' => $this->input->post('applicant_citizenship'),
				'applicant_sex' => $this->input->post('applicant_sex'),
				'applicant_occupation' => $this->input->post('applicant_occupation'),
				'applicant_address_doc' => $this->input->post('applicant_address_doc'),
				'applicant_address_now' => $this->input->post('applicant_address_now'),
				'applicant_passport' => $this->input->post('applicant_passport'),
				'applicant_kitaps' => $this->input->post('applicant_kitaps'),
				'applicant_phone' => $this->input->post('applicant_phone')
			);
			$ret = $this->pendaftaran_model->store_personaldata($personaldata);
			if(!$ret)
				$array['msg'] = 'Data Personal gagal disimpan';
				
			//save table ciri fisik
			$cirifisik = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_rambut' => $this->input->post('applicant_rambut'),
				'applicant_wajah' => $this->input->post('applicant_wajah'),
				'applicant_kulit' => $this->input->post('applicant_kulit'),
				'applicant_tinggibadan' => $this->input->post('applicant_tinggibadan'),
				'applicant_beratbadan' => $this->input->post('applicant_beratbadan'),
				'applicant_tandakhusus' => $this->input->post('applicant_tandakhusus'),
				'applicant_rumussidikjari' => $this->input->post('applicant_rumussidikjari')
				
			);
			$ret = $this->pendaftaran_model->store_cirifisik($cirifisik);
			if(!$ret)
				$array['msg'] = 'Data Ciri Fisik gagal disimpan';
			
			//update table education
			$edu = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_edu_primary' => $this->input->post('applicant_edu_primary'),
				'applicant_edu_primary_city' => $this->input->post('applicant_edu_primary_city'),
				'applicant_edu_primary_year' => $this->input->post('applicant_edu_primary_year'),
				'applicant_edu_secondary' => $this->input->post('applicant_edu_secondary'),
				'applicant_edu_secondary_city' => $this->input->post('applicant_edu_secondary_city'),
				'applicant_edu_secondary_year' => $this->input->post('applicant_edu_secondary_year'),
				'applicant_edu_tertiary' => $this->input->post('applicant_edu_tertiary'),
				'applicant_edu_tertiary_city' => $this->input->post('applicant_edu_tertiary_city'),
				'applicant_edu_tertiary_year' => $this->input->post('applicant_edu_tertiary_year'),
				'applicant_edu_bachelor' => $this->input->post('applicant_edu_bachelor'),
				'applicant_edu_bachelor_city' => $this->input->post('applicant_edu_bachelor_city'),
				'applicant_edu_bachelor_year' => $this->input->post('applicant_edu_bachelor_year'),
				'applicant_edu_master' => $this->input->post('applicant_edu_master'),
				'applicant_edu_master_city' => $this->input->post('applicant_edu_master_city'),
				'applicant_edu_master_year' => $this->input->post('applicant_edu_master_year'),
				'applicant_edu_doctoral' => $this->input->post('applicant_edu_doctoral'),
				'applicant_edu_doctoral_city' => $this->input->post('applicant_edu_doctoral_city'),
				'applicant_edu_doctoral_year' => $this->input->post('applicant_edu_doctoral_year')
				
			);
			$ret = $this->pendaftaran_model->store_education($edu);
			if(!$ret)
				$array['msg'] = 'Data Pendidikan gagal disimpan';
			
			//update data pelanggaran
			$pelanggaran = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_pidana' => $this->input->post('applicant_pidana'),
				'applicant_pidana_apa' => $this->input->post('applicant_pidana_apa'),
				'applicant_pidana_proses' => $this->input->post('applicant_pidana_proses'),
				'applicant_pidana_kasus' => $this->input->post('applicant_pidana_kasus'),
				'applicant_pidana_sampaimana' => $this->input->post('applicant_pidana_sampaimana'),
				'applicant_pidana_putusansementara' => $this->input->post('applicant_pidana_putusansementara'),
				'applicant_pidana_putusanakhir' => $this->input->post('applicant_pidana_putusanakhir'),
				'applicant_pelanggaran' => $this->input->post('applicant_pelanggaran'),
				'applicant_pelanggaran_proses' => $this->input->post('applicant_pelanggaran_proses'),
				'applicant_pelanggaran_sampaimana' => $this->input->post('applicant_pelanggaran_sampaimana')
				
			);
			$ret = $this->pendaftaran_model->store_pelanggaran($pelanggaran);
			if(!$ret)
				$array['msg'] = 'Data Pelanggaran gagal disimpan';
				
				
			//update keterangan	
			$keterangan = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_hist_oversea' => $this->input->post('applicant_hist_oversea'),
				'applicant_hist_occupation' => $this->input->post('applicant_hist_occupation'),
				'applicant_hist_hobby' => $this->input->post('applicant_hist_hobby'),
				'applicant_curr_address' => $this->input->post('applicant_curr_address'),
				'applicant_wna_sponsor' => $this->input->post('applicant_wna_sponsor'),
				'applicant_wna_sponsor_address' => $this->input->post('applicant_wna_sponsor_address'),
				'applicant_wna_sponsor_occupation' => $this->input->post('applicant_wna_sponsor_occupation'),
				'applicant_wna_sponsor_phone' => $this->input->post('applicant_wna_sponsor_phone')
				
			);
			$ret = $this->pendaftaran_model->store_keterangan($keterangan);
			if(!$ret)
				$array['msg'] = 'Data Keterangan gagal disimpan';	
				
			//update family
			$family = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
				'applicant_spouse_type' => $this->input->post('applicant_spouse_type'),
				'applicant_spouse_name' => $this->input->post('applicant_spouse_name'),
				'applicant_spouse_age' => $this->input->post('applicant_spouse_age'),
				'applicant_spouse_religion' => $this->input->post('applicant_spouse_religion'),
				'applicant_spouse_citizenship' => $this->input->post('applicant_spouse_citizenship'),
				'applicant_spouse_occupation' => $this->input->post('applicant_spouse_occupation'),
				'applicant_spouse_address' => $this->input->post('applicant_spouse_address'),
				'applicant_father_name' => $this->input->post('applicant_father_name'),
				'applicant_father_age' => $this->input->post('applicant_father_age'),
				'applicant_father_religion' => $this->input->post('applicant_father_religion'),
				'applicant_father_citizenship' => $this->input->post('applicant_father_citizenship'),
				'applicant_father_occupation' => $this->input->post('applicant_father_occupation'),
				'applicant_father_address' => $this->input->post('applicant_father_address'),
				'applicant_mother_name' => $this->input->post('applicant_mother_name'),
				'applicant_mother_age' => $this->input->post('applicant_mother_age'),
				'applicant_mother_religion' => $this->input->post('applicant_mother_religion'),
				'applicant_mother_citizenship' => $this->input->post('applicant_mother_citizenship'),
				'applicant_mother_occupation' => $this->input->post('applicant_mother_occupation'),
				'applicant_mother_address' => $this->input->post('applicant_mother_address'),
				'applicant_siblings_names' => $this->input->post('applicant_sibling1_name').','.$this->input->post('applicant_sibling2_name').','.$this->input->post('applicant_sibling3_name'),
				'applicant_siblings_ages' => $this->input->post('applicant_sibling1_age').','.$this->input->post('applicant_sibling2_age').','.$this->input->post('applicant_sibling3_age'),
				'applicant_siblings_addresses' => $this->input->post('applicant_sibling1_address').','.$this->input->post('applicant_sibling2_address').','.$this->input->post('applicant_sibling3_address'),
				
			);
			$ret = $this->pendaftaran_model->store_family($family);
			if(!$ret)
				$array['msg'] = 'Data Keluarga gagal disimpan';		
				
			//save docs
			$docs = array(
				'id' => $reg_id,
				'applicant_id' => $this->input->post('applicant_id'),
			);
			$ret = $this->pendaftaran_model->store_documents($docs);
			if(!$ret)
				$array['msg'] = 'Data Dokumen gagal disimpan';	
		}
	
		
		
			
		
			
		
		echo json_encode($array);
	}
	
	public function update()
	{
		$id = $this->input->post('id');
		$array = array(/*'id' => $id*/  'msg' => 'Data berhasil disimpan');
		
		//update table registration
		$reg = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'status_type' => $this->input->post('status_type'),
			'purpose_desc' => $this->input->post('purpose_desc'),
		);
		
		$ret = $this->pendaftaran_model->update_reg($id, $reg);
		if(!$ret)
			$array['msg'] = 'Data Registration gagal disimpan';
	
	
		//update table personal data
		$personaldata = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_name' => $this->input->post('applicant_name'),
			'applicant_birthplace' => $this->input->post('applicant_birthplace'),
			'applicant_birthdate' => $this->input->post('applicant_birthdate'),
			'applicant_religion' => $this->input->post('applicant_religion'),
			'applicant_citizenship' => $this->input->post('applicant_citizenship'),
			'applicant_sex' => $this->input->post('applicant_sex'),
			'applicant_occupation' => $this->input->post('applicant_occupation'),
			'applicant_address_doc' => $this->input->post('applicant_address_doc'),
			'applicant_address_now' => $this->input->post('applicant_address_now'),
			'applicant_passport' => $this->input->post('applicant_passport'),
			'applicant_kitaps' => $this->input->post('applicant_kitaps'),
			'applicant_phone' => $this->input->post('applicant_phone')
		);
		$ret = $this->pendaftaran_model->update_personaldata($id, $personaldata);
		if(!$ret)
			$array['msg'] = 'Data Personal gagal disimpan';
			
		//update table ciri fisik
		$cirifisik = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_rambut' => $this->input->post('applicant_rambut'),
			'applicant_wajah' => $this->input->post('applicant_wajah'),
			'applicant_kulit' => $this->input->post('applicant_kulit'),
			'applicant_tinggibadan' => $this->input->post('applicant_tinggibadan'),
			'applicant_beratbadan' => $this->input->post('applicant_beratbadan'),
			'applicant_tandakhusus' => $this->input->post('applicant_tandakhusus'),
			'applicant_rumussidikjari' => $this->input->post('applicant_rumussidikjari')
			
		);
		$ret = $this->pendaftaran_model->update_cirifisik($id, $cirifisik);
		if(!$ret)
			$array['msg'] = 'Data Ciri Fisik gagal disimpan';
		
		//update table education
		$edu = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_edu_primary' => $this->input->post('applicant_edu_primary'),
			'applicant_edu_primary_city' => $this->input->post('applicant_edu_primary_city'),
			'applicant_edu_primary_year' => $this->input->post('applicant_edu_primary_year'),
			'applicant_edu_secondary' => $this->input->post('applicant_edu_secondary'),
			'applicant_edu_secondary_city' => $this->input->post('applicant_edu_secondary_city'),
			'applicant_edu_secondary_year' => $this->input->post('applicant_edu_secondary_year'),
			'applicant_edu_tertiary' => $this->input->post('applicant_edu_tertiary'),
			'applicant_edu_tertiary_city' => $this->input->post('applicant_edu_tertiary_city'),
			'applicant_edu_tertiary_year' => $this->input->post('applicant_edu_tertiary_year'),
			'applicant_edu_bachelor' => $this->input->post('applicant_edu_bachelor'),
			'applicant_edu_bachelor_city' => $this->input->post('applicant_edu_bachelor_city'),
			'applicant_edu_bachelor_year' => $this->input->post('applicant_edu_bachelor_year'),
			'applicant_edu_master' => $this->input->post('applicant_edu_master'),
			'applicant_edu_master_city' => $this->input->post('applicant_edu_master_city'),
			'applicant_edu_master_year' => $this->input->post('applicant_edu_master_year'),
			'applicant_edu_doctoral' => $this->input->post('applicant_edu_doctoral'),
			'applicant_edu_doctoral_city' => $this->input->post('applicant_edu_doctoral_city'),
			'applicant_edu_doctoral_year' => $this->input->post('applicant_edu_doctoral_year')
			
		);
		$ret = $this->pendaftaran_model->update_education($id, $edu);
		if(!$ret)
			$array['msg'] = 'Data Pendidikan gagal disimpan';
		
		//update data pelanggaran
		$pelanggaran = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_pidana' => $this->input->post('applicant_pidana'),
			'applicant_pidana_apa' => $this->input->post('applicant_pidana_apa'),
			'applicant_pidana_proses' => $this->input->post('applicant_pidana_proses'),
			'applicant_pidana_kasus' => $this->input->post('applicant_pidana_kasus'),
			'applicant_pidana_sampaimana' => $this->input->post('applicant_pidana_sampaimana'),
			'applicant_pidana_putusansementara' => $this->input->post('applicant_pidana_putusansementara'),
			'applicant_pidana_putusanakhir' => $this->input->post('applicant_pidana_putusanakhir'),
			'applicant_pelanggaran' => $this->input->post('applicant_pelanggaran'),
			'applicant_pelanggaran_proses' => $this->input->post('applicant_pelanggaran_proses'),
			'applicant_pelanggaran_sampaimana' => $this->input->post('applicant_pelanggaran_sampaimana')
			
		);
		$ret = $this->pendaftaran_model->update_pelanggaran($id, $pelanggaran);
		if(!$ret)
			$array['msg'] = 'Data Pelanggaran gagal disimpan';
			
			
		//update keterangan	
		$keterangan = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_hist_oversea' => $this->input->post('applicant_hist_oversea'),
			'applicant_hist_occupation' => $this->input->post('applicant_hist_occupation'),
			'applicant_hist_hobby' => $this->input->post('applicant_hist_hobby'),
			'applicant_curr_address' => $this->input->post('applicant_curr_address'),
			'applicant_wna_sponsor' => $this->input->post('applicant_wna_sponsor'),
			'applicant_wna_sponsor_address' => $this->input->post('applicant_wna_sponsor_address'),
			'applicant_wna_sponsor_occupation' => $this->input->post('applicant_wna_sponsor_occupation'),
			'applicant_wna_sponsor_phone' => $this->input->post('applicant_wna_sponsor_phone')
			
		);
		$ret = $this->pendaftaran_model->update_keterangan($id, $keterangan);
		if(!$ret)
			$array['msg'] = 'Data Keterangan gagal disimpan';	
			
		//update family
		$family = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'applicant_spouse_type' => $this->input->post('applicant_spouse_type'),
			'applicant_spouse_name' => $this->input->post('applicant_spouse_name'),
			'applicant_spouse_age' => $this->input->post('applicant_spouse_age'),
			'applicant_spouse_religion' => $this->input->post('applicant_spouse_religion'),
			'applicant_spouse_citizenship' => $this->input->post('applicant_spouse_citizenship'),
			'applicant_spouse_occupation' => $this->input->post('applicant_spouse_occupation'),
			'applicant_spouse_address' => $this->input->post('applicant_spouse_address'),
			'applicant_father_name' => $this->input->post('applicant_father_name'),
			'applicant_father_age' => $this->input->post('applicant_father_age'),
			'applicant_father_religion' => $this->input->post('applicant_father_religion'),
			'applicant_father_citizenship' => $this->input->post('applicant_father_citizenship'),
			'applicant_father_occupation' => $this->input->post('applicant_father_occupation'),
			'applicant_father_address' => $this->input->post('applicant_father_address'),
			'applicant_mother_name' => $this->input->post('applicant_mother_name'),
			'applicant_mother_age' => $this->input->post('applicant_mother_age'),
			'applicant_mother_religion' => $this->input->post('applicant_mother_religion'),
			'applicant_mother_citizenship' => $this->input->post('applicant_mother_citizenship'),
			'applicant_mother_occupation' => $this->input->post('applicant_mother_occupation'),
			'applicant_mother_address' => $this->input->post('applicant_mother_address'),
			'applicant_siblings_names' => $this->input->post('applicant_sibling1_name').','.$this->input->post('applicant_sibling2_name').','.$this->input->post('applicant_sibling3_name'),
			'applicant_siblings_ages' => $this->input->post('applicant_sibling1_age').','.$this->input->post('applicant_sibling2_age').','.$this->input->post('applicant_sibling3_age'),
			'applicant_siblings_addresses' => $this->input->post('applicant_sibling1_address').','.$this->input->post('applicant_sibling2_address').','.$this->input->post('applicant_sibling3_address'),
			
		);
		$ret = $this->pendaftaran_model->update_family($id, $family);
		if(!$ret)
			$array['msg'] = 'Data Keluarga gagal disimpan';	
			
		
		echo json_encode($array);
	}
	
	public function upload_file()
	{
		$output_dir = "uploads/";
		if(isset($_FILES["skck_ktp"]))
		{
			$ret = array();

			$error =$_FILES["skck_ktp"]["error"];
			
			if(!is_array($_FILES["skck_ktp"]["name"])) //single file
			{
				$fileName = $_FILES["skck_ktp"]["name"];
				move_uploaded_file($_FILES["skck_ktp"]["tmp_name"],$output_dir.$fileName);
				$ret[]= $fileName;
				
				
				
			}
			
			echo json_encode($ret);
		 }
	}
	
	
    
}