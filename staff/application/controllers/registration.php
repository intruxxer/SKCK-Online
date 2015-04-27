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
			
			$sex = ($row['applicant_sex']=='M')?'Laki-Laki':'Perempuan';
			$no = $i + 1 + $limit_end;
			$d->rows[$i]['cell'] = array($no.'.', $row['id'],$row['print_id'],$row['application_id'], $row['applicant_id'], $row['applicant_name'], 
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
		
		$id = $this->uri->segment(3);
		
		
		$d = $this->pendaftaran_model->get_pendaftaran_by_id($id);
		if(count($d) > 0)
		{
			if($d[0]['applicant_pidana'] == 'P' || $d[0]['applicant_pelanggaran'] == 'P')
			{
				
				$doc = $phpWord->loadTemplate(APPPATH.'/templates/SKCK_dengan_catatan.docx');
			}
			else
			{
				$doc = $phpWord->loadTemplate(APPPATH.'/templates/SKCK_tanpa_catatan.docx');
			}
				
		
			$doc->setValue('NAMA_LENGKAP', strtoupper($d[0]['applicant_name']));
			$doc->setValue('AGAMA', ucwords($d[0]['applicant_religion']));
			
			if($d[0]['applicant_sex']=='M')
				$doc->setValue('JENIS_KELAMIN', 'Laki-Laki');
			else
				$doc->setValue('JENIS_KELAMIN', 'Perempuan');
				
			$doc->setValue('BPLACE', ucwords($d[0]['applicant_birthplace']));
			
			$birthdate = explode("-",$d[0]['applicant_birthdate']);
			$doc->setValue('BDATE', $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0]);
			
			/*if($d[0]['applicant_address_now'] != null || $d[0]['applicant_address_now'] != '')
			{
				$doc->setValue('CURR_ADDRESS', strtoupper($d[0]['applicant_address_now']));
			}
			else
			{
				$doc->setValue('CURR_ADDRESS', strtoupper($d[0]['applicant_address_doc']));
			}*/
			$doc->setValue('CURR_ADDRESS', ucowrds($d[0]['applicant_address_doc']));
			
			$doc->setValue('OCCUPATION', ucwords($d[0]['applicant_occupation']));
			if($d[0]['applicant_passport'] == '' || $d[0]['applicant_passport'] == null)
			{
				$doc->setValue('PASSPOR', '-');
			}
			else
			{
				$doc->setValue('PASSPOR', $d[0]['applicant_passport']);
			}
			$doc->setValue('NOKTP', $d[0]['no_ktp']);
			//There is curr address limit, if curr address >50, split into CURRADDRESS and CURRADDRESS2
			if(strlen($d[0]['applicant_address_doc']) > 50)
			{
				$fiftyFirstSubString = substr($d[0]['applicant_address_doc'], 0, 49);
				$nearestWhitespaceFromIndexFifty = strripos($fiftyFirstSubString, " ");
				$doc->setValue( 'CURRADDRESS',  ucwords( substr($d[0]['applicant_address_doc'], 0, $nearestWhitespaceFromIndexFifty) ) );
				$doc->setValue( 'CURRADDRESS2', ucwords( substr($d[0]['applicant_address_doc'], $nearestWhitespaceFromIndexFifty, strlen(substr($d[0]['applicant_address_doc']))) ) );
			}
			else
			{
				$doc->setValue('CURRADDRESS', ucwords($d[0]['applicant_address_doc']));
				$doc->setValue('CURRADDRESS2', '');
			}
			$doc->setValue('ISSUINGDATE', date('d').' '.get_month_text(date('n')).' '.date('Y'));
			$doc->setValue('VALIDFROM', date('d').' '.get_month_text(date('n')).' '.date('Y'));
			$currDate = date('d').' '.get_month_text(date('n')).' '.date('Y');
			$effectiveDate = date('d-n-Y', strtotime("+6 months", strtotime($currDate)));
			$dt = explode("-", $effectiveDate);
			
			$doc->setValue('VALIDTO', $dt[0].' '.get_month_text($dt[1]).' '.$dt[2]);
			
			if($d[0]['applicant_citizenship'] == 'I')
			{
				$doc->setValue('NATIONALITY', 'WNI');
				$doc->setValue('STAYFROM', $birthdate[2].' '.get_month_text(intval($birthdate[1])).' '.$birthdate[0]);
				
			}
			else
			{
				$doc->setValue('NATIONALITY', 'WNA');
				$doc->setValue('STAYFROM','');
			}
			$doc->setValue('STAYTO',$currDate);	
			
			
			
			
			$sidik = explode("#", $d[0]['applicant_rumussidikjari']);
			if(count($sidik)>1)
			{
				$doc->setValue('FINGER', $sidik[0]);
				$doc->setValue('FINGER2', $sidik[1]);
			}
			else
			{
				$doc->setValue('FINGER', '');
				$doc->setValue('FINGER2', '');
			}
			$doc->setValue('PURPOSE', strtoupper($d[0]['purpose_desc']));
			$doc->setValue('NO', $id);
			$doc->setValue('BLN', get_romawi(date('n')));
			$doc->setValue('THN', date('Y'));
			
			$doc->saveAs('/tmp/'.$id.'temp.docx');
			
			$this->load->helper('download');
			$data = file_get_contents('/tmp/'.$id.'temp.docx');
			$name = 'SKCK'.'_'.$d[0]['application_id'].'_'.$d[0]['applicant_name'].'.docx';
			
			if($d[0]['status_type'] != 'P')
			{
				$print_id = $this->pendaftaran_model->get_print_id();
				$reg = array(
					'status_type' => 'P',
					'print_id' => $print_id
				);
			
				$ret = $this->pendaftaran_model->update_reg($id, $reg);
			}
			

			force_download($name, $data); 
			@unlink('/tmp/'.$id.'temp.docx'); 
		}
		
		
		
	}
	
	public function save_data()
	{
		$array = array('msg' => 'Data berhasil disimpan');
		
		$regNo = 'ND'.date("dm").rand(1000, 9999).rand(10, 99);
		
		//save table registration
		$reg = array(
			'applicant_id' => $this->input->post('applicant_id'),
			'status_type' => $this->input->post('status_type'),
			'purpose_desc' => $this->input->post('purpose_desc'),
			'applicant_name' => $this->input->post('applicant_name'),
			'applicant_email' => $this->input->post('applicant_email'),
			'unit_type' => 'JATIM001C',
			'reg_type' => '1',
			'staff_id' => $this->session->userdata('id'),
			'timestamps' => date('Y-m-d H:i:s'),
			'application_id' => $regNo
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
				'applicant_name' => ucword($this->input->post('applicant_name')),
				'applicant_birthplace' => $this->input->post('applicant_birthplace'),
				'applicant_birthdate' => $this->input->post('applicant_birthdate'),
				'applicant_religion' => $this->input->post('applicant_religion'),
				'applicant_citizenship' => $this->input->post('applicant_citizenship'),
				'applicant_sex' => $this->input->post('applicant_sex'),
				'applicant_occupation' => $this->input->post('applicant_occupation'),
				'applicant_address_doc' => ucwords($this->input->post('applicant_address_doc')),
				'applicant_address_now' => ucwords($this->input->post('applicant_address_now')),
				'applicant_passport' => $this->input->post('applicant_passport'),
				//'applicant_kitaps' => $this->input->post('applicant_kitaps'),
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
				'applicant_siblings_names' => $this->input->post('applicant_sibling1_name').'#'.$this->input->post('applicant_sibling2_name').'#'.$this->input->post('applicant_sibling3_name').'#'.$this->input->post('applicant_sibling4_name').'#'.$this->input->post('applicant_sibling5_name').'#'.$this->input->post('applicant_sibling6_name'),
				'applicant_siblings_ages' => $this->input->post('applicant_sibling1_age').'#'.$this->input->post('applicant_sibling2_age').'#'.$this->input->post('applicant_sibling3_age').'#'.$this->input->post('applicant_sibling4_age').'#'.$this->input->post('applicant_sibling5_age').'#'.$this->input->post('applicant_sibling6_age'),
				'applicant_siblings_addresses' => $this->input->post('applicant_sibling1_address').'#'.$this->input->post('applicant_sibling2_address').'#'.$this->input->post('applicant_sibling3_address').'#'.$this->input->post('applicant_sibling4_address').'#'.$this->input->post('applicant_sibling5_address').'#'.$this->input->post('applicant_sibling6_address'),
				
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
			'applicant_email' => $this->input->post('applicant_email'),
			'application_id' => $this->input->post('application_id')
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
			//'applicant_kitaps' => $this->input->post('applicant_kitaps'),
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
			'applicant_rumussidikjari' => $this->input->post('applicant_rumussidikjari').'#'.$this->input->post('applicant_rumussidikjari2')
			
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
		
		//update docs
		$docs = array(
			'applicant_id' => $this->input->post('applicant_id')
		);
		$ret = $this->pendaftaran_model->update_documents($id, $docs);
		if(!$ret)
			$array['msg'] = 'Data Dokumen gagal disimpan';			
		
		echo json_encode($array);
	}
	
	public function del_doc()
	{
		$ret = array();
		$ret['msg'] = 'Delete sukses';
		
		$id = $this->uri->segment(3);
		$filename = $this->uri->segment(4);
		
		$this->pendaftaran_model->update_documents($id, array('skck_ktp'=>''));
		@unlink('uploads/'.$id.'/'.$filename); 
		
		echo json_encode($ret);
	}
	
	public function download()
	{
		$id = $this->uri->segment(3);
		$filename = $this->uri->segment(4);
		
		$this->load->helper('download');
		$data = file_get_contents('uploads/'.$id.'/'.$filename);
		

		force_download($filename, $data); 
	}
	
	
	
	public function upload_file()
	{
		
		if(isset($_FILES["myfile"]))
		{
			$ret = array();
			$type = $this->input->post('file_type');
			$id = $this->input->post('id');

			$error =$_FILES["myfile"]["error"];
			
			if(!file_exists("uploads/".$id))
				@mkdir("uploads/".$id, 0777);
				
			$output_dir = "uploads/".$id."/";
			
			
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
				$fileName = $_FILES["myfile"]["name"];
				$fileName = str_replace(' ', '_', $fileName);
				
				if($type == '1')
				{
					$fileName = "KTP_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_ktp'=>$fileName));
				}		
				elseif($type == '2')
				{
					$fileName = "PASSPOR_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_passport'=>$fileName));
				}
				elseif($type == '3')
				{
					$fileName = "KK_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_familycard'=>$fileName));
				}
				elseif($type == '4')
				{
					$fileName = "AKTA_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_birthcert'=>$fileName));
				}
				elseif($type == '5')
				{
					$fileName = "FP_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_fingerprint'=>$fileName));
				}
				elseif($type == '6')
				{
					$fileName = "SPONSOR_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_corp_sponsor'=>$fileName));
				}
				elseif($type == '7')
				{
					$fileName = "MARITAL_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_marital_letter'=>$fileName));
				}
				elseif($type == '8')
				{
					$fileName = "REPORT_".$fileName;
					$this->pendaftaran_model->update_documents($id, array('skck_report_evidence'=>$fileName));
				}
								
				move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
				$ret[]= $fileName;
				
			}
			
			echo json_encode($ret);
		 }
	}
	
	
    
}