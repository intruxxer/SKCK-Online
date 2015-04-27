<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
		$this->load->model('skckmodel', 'skck');
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('skckform');
		$this->load->view('footer');
	}

	public function perpanjangan()
	{
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('skckformperpanjangansearch');
		$this->load->view('footer');
	}

	public function cariskckperpanjangan()
	{
		//TO DO:
		//Get Data for A Single e-SKCK -> Check Model. Functions ready?
		//Then ,populated the form
		//if($this->input->post('submitSKCKextendingSearch'))
		if(true)
		{
			$ktp = $this->input->post('applicantid');
			$noReg = $this->input->post('applicationid');
			$skck_id = $this->skck->get_skck_registration_id_by_applicant_or_application_id($ktp, $noReg);
			//var_dump($skck_id);
				if($skck_id == null)
							$data['success'] = 'false';
				else
				{
							$data['success'] = 'true';
							$data['skck_id'] = $skck_id->id;
							$data['skck_registration'] = $this->skck->get_skck_registration($skck_id->id);
							$data['skck_personaldata'] = $this->skck->get_skck_personaldata($skck_id->id);
							$data['skck_family'] = $this->skck->get_skck_family($skck_id->id);
							$data['skck_education'] = $this->skck->get_skck_education($skck_id->id);
							$data['skck_pelanggaran'] = $this->skck->get_skck_pelanggaran($skck_id->id);
							$data['skck_cirifisik'] = $this->skck->get_skck_cirifisik($skck_id->id);
							$data['skck_documents'] = $this->skck->get_skck_documents($skck_id->id);
							$data['skck_keterangan'] = $this->skck->get_skck_keterangan($skck_id->id);
				}
				$this->load->view('header');
				$this->load->view('headertitle');
				$this->load->view('navigation');
				$this->load->view('skckformperpanjangan', $data);
				$this->load->view('footer');
		}
		else
		{
				$this->load->view('header');
				$this->load->view('headertitle');
				$this->load->view('navigation');
				$this->load->view('skckformperpanjangansearch');
				$this->load->view('footer');
		}
	}

	public function cariskck()
	{
		$skck_app_id = $this->input->post('app_id');
		$data['single_skck'] = $this->skck->search_skck_registration($skck_app_id);
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('singleskck', $data);
		$this->load->view('footer');
	}

	private function rearrange( $arr ){
	    foreach( $arr as $key => $all ){
	        foreach( $all as $i => $val ){
	            $new[$i][$key] = $val;
	        }
	    }
	    return $new;
	}

	private function indonesian_date($timestamp = '', $date_format = 'j F Y', $suffix = '')
	{
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);

    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );

    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );

    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
	}

	private function upload_multiple_files($field='userfiles'){
	    $files = array();
	    foreach( $_FILES[$field] as $key => $all )
	    	if($key == 'name')
	    	{
	    		//print_r($all);
		        foreach( $all as $i => $val )
		        {
		        	switch ($i) {
				    case 0:
				    	$filename = "ktp_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 1:
				        $filename = "akte_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 2:
				        $filename = "kk_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 3:
				    	$filename = "sidikjari_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 4:
				        $filename = "paspor_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 5:
				        $filename = "surat_polsek_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 6:
				        $filename = "surat_desa_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    case 7:
				        $filename = "surat_kecamatan_".$val;
				        $files[$i][$key] = $filename;
				        break;
				    default:
				    	break;
					}
		        }
		    }
		    else{
		    	foreach( $all as $i => $val )
		        {
		    		$files[$i][$key] = $val;
		    	}
		    }

	    $files_uploaded = array();
	    for ($i=0; $i < count($files); $i++) {
	        $_FILES[$field] = $files[$i];
	        if ($this->upload->do_upload($field))
	            $files_uploaded[$i] = $this->upload->data($files);
	        else
	            $files_uploaded[$i] = null;
	    }
	    return $files_uploaded;
	}

	private function docs_upload($files, $skck_id=0)
	{
		$docs_uploaded_path = array();
		$config = array();
		//$files = $_FILES['userfiles'];
		if($skck_id == 0)
			$skck_id = 'ND'.date("dm").rand(1000, 9999).rand(10, 99);
		$path = './staff/uploads/'.$skck_id;
		//Configure upload.
		if(!is_dir($path))
		{
		    mkdir($path, 0777, true);
		}
        $config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '5120';
        $config['max_height'] = '3840';
        $config['max_filename'] = '100';
        $config['overwrite'] = 1;

        $this->load->library('upload', $config);

        if ($files) {
        	$docs_uploaded_path = $this->upload_multiple_files('userfiles');
        	return $docs_uploaded_path;
    	}
    	else {	return $docs_uploaded_path;	}
	}

	public function register()
	{
		if($this->input->post('submitSKCK'))
		{
			$regNo = 'ND'.date("dm").rand(1000, 9999).rand(10, 99);
			$success = true;
			$data['skck_registration'] = array(
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => ucwords($this->input->post('name')),
				'applicant_email' => $this->input->post('email'),
				'unit_type' => 'JATIM001C',
				'reg_type' => 'N',
				'status_type' => 'D',
				'purpose_desc' => ucwords($this->input->post('purpose_desc')),
				'staff_id' => NULL,
				'application_id' => $regNo,
				'print_id' => NULL
			);
			$skck_id = $this->skck->create_skck_registration($data['skck_registration']);

			$mysql_bdate = explode("-", $this->input->post('birthdate'));
			$mysql_bdate = $mysql_bdate[2].'-'.$mysql_bdate[1].'-'.$mysql_bdate[0];
			$data['skck_personaldata'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => ucwords($this->input->post('name')),
				'applicant_birthplace' => ucwords($this->input->post('birthplace')),
				'applicant_birthdate' => $mysql_bdate,
				'applicant_religion' => $this->input->post('religion'),
				'applicant_citizenship' => $this->input->post('citizenship'),
				'applicant_sex' => $this->input->post('sex'),
				'applicant_marital_status' => $this->input->post('marital_status'),
				'applicant_occupation' => ucwords($this->input->post('occupation')),
				'applicant_address_doc' => ucwords( $this->input->post('address_doc_1')." "
												   .$this->input->post('address_doc_2')." "
												   .$this->input->post('address_doc_3') ),
				'applicant_address_now' => ucwords( $this->input->post('address_now_1')." "
												   .$this->input->post('address_now_2')." "
												   .$this->input->post('address_now_3') ),
				'applicant_passport' => strtoupper($this->input->post('passport')),
				'applicant_phone' => $this->input->post('phone')
			);
			$personaldata = $this->skck->add_skck_personaldata($data['skck_personaldata']);


			$data['skck_family'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_spouse_type' => $this->input->post('spouse_type'),
				'applicant_spouse_name' => ucwords($this->input->post('spouse_name')),
				'applicant_spouse_age' => $this->input->post('spouse_age'),
				'applicant_spouse_religion' => $this->input->post('spouse_religion'),
				'applicant_spouse_citizenship' => $this->input->post('spouse_citizenship'),
				'applicant_spouse_occupation' => ucwords($this->input->post('spouse_occupation')),
				'applicant_spouse_address' => ucwords($this->input->post('spouse_address')),
				'applicant_father_name' => ucwords($this->input->post('father_name')),
				'applicant_father_age' => $this->input->post('father_age'),
				'applicant_father_religion' => $this->input->post('father_religion'),
				'applicant_father_citizenship' => $this->input->post('father_citizenship'),
				'applicant_father_occupation' => ucwords($this->input->post('father_occupation')),
				'applicant_father_address' => ucwords($this->input->post('father_address')),
				'applicant_mother_name' => ucwords($this->input->post('mother_name')),
				'applicant_mother_age' => $this->input->post('mother_age'),
				'applicant_mother_religion' => $this->input->post('mother_religion'),
				'applicant_mother_citizenship' => $this->input->post('mother_citizenship'),
				'applicant_mother_occupation' => ucwords($this->input->post('mother_occupation')),
				'applicant_mother_address' => ucwords($this->input->post('mother_address')),
				'applicant_siblings_names' => ucwords($this->input->post('siblings_names_1'))."#"
																			.ucwords($this->input->post('siblings_names_2'))."#"
																			.ucwords($this->input->post('siblings_names_3'))."#"
																			.ucwords($this->input->post('siblings_names_4'))."#"
																			.ucwords($this->input->post('siblings_names_5'))."#"
																			.ucwords($this->input->post('siblings_names_6')),
				'applicant_siblings_ages' => $this->input->post('siblings_ages_1')."#"
																		 .$this->input->post('siblings_ages_2')."#"
																		 .$this->input->post('siblings_ages_3')."#"
																		 .$this->input->post('siblings_ages_4')."#"
																		 .$this->input->post('siblings_ages_5')."#"
																		 .$this->input->post('siblings_ages_6'),
				'applicant_siblings_addresses' => ucwords($this->input->post('siblings_addresses_1'))."#"
																					.ucwords($this->input->post('siblings_addresses_2'))."#"
																					.ucwords($this->input->post('siblings_addresses_3'))."#"
																					.ucwords($this->input->post('siblings_addresses_4'))."#"
																					.ucwords($this->input->post('siblings_addresses_5'))."#"
																					.ucwords($this->input->post('siblings_addresses_6'))
			);
			$family = $this->skck->add_skck_family($data['skck_family']);

			$data['skck_education'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_hist_school' => $this->input->post('hist_school'),
				'applicant_edu_primary' => strtoupper($this->input->post('edu_primary')),
				'applicant_edu_primary_city' => ucwords($this->input->post('edu_primary_city')),
				'applicant_edu_primary_year' => $this->input->post('edu_primary_year'),
				'applicant_edu_secondary' => strtoupper($this->input->post('edu_secondary')),
				'applicant_edu_secondary_city' => ucwords($this->input->post('edu_secondary_city')),
				'applicant_edu_secondary_year' => $this->input->post('edu_secondary_year'),
				'applicant_edu_tertiary' => strtoupper($this->input->post('edu_tertiary')),
				'applicant_edu_tertiary_city' => ucwords($this->input->post('edu_tertiary_city')),
				'applicant_edu_tertiary_year' => $this->input->post('edu_tertiary_year'),
				'applicant_edu_bachelor' => strtoupper($this->input->post('edu_bachelor')),
				'applicant_edu_bachelor_city' => ucwords($this->input->post('edu_bachelor_city')),
				'applicant_edu_bachelor_year' => $this->input->post('edu_bachelor_year'),
				'applicant_edu_master' => strtoupper($this->input->post('edu_master')),
				'applicant_edu_master_city' => ucwords($this->input->post('edu_master_city')),
				'applicant_edu_master_year' => $this->input->post('edu_master_year'),
				'applicant_edu_doctoral' => strtoupper($this->input->post('edu_doctoral')),
				'applicant_edu_doctoral_city' => ucwords($this->input->post('edu_doctoral_city')),
				'applicant_edu_doctoral_year' => $this->input->post('edu_doctoral_year')
			);
			$education = $this->skck->add_skck_education($data['skck_education']);

			$data['skck_pelanggaran'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_pidana' => $this->input->post('pidana'),
				'applicant_pidana_apa' => $this->input->post('pidana_apa'),
				'applicant_pidana_proses' => $this->input->post('pidana_proses'),
				'applicant_pidana_kasus' => $this->input->post('pidana_kasus'),
				'applicant_pidana_sampaimana' => $this->input->post('pidana_sampaimana'),
				'applicant_pidana_putusansementara' => $this->input->post('pidana_putusansementara'),
				'applicant_pidana_putusanakhir' => $this->input->post('pidana_putusanakhir'),
				'applicant_pelanggaran' => $this->input->post('pelanggaran'),
				'applicant_pelanggaran_apa' => $this->input->post('pelanggaran_apa'),
				'applicant_pelanggaran_proses' => $this->input->post('pelanggaran_proses'),
				'applicant_pelanggaran_sampaimana' => $this->input->post('pelanggaran_sampaimana')
			);
			$pelanggaran = $this->skck->add_skck_pelanggaran($data['skck_pelanggaran']);

			$fingerprintsatu = $this->input->post('rumussidikjari1-1')." ".$this->input->post('rumussidikjari1-2')." ".
							   $this->input->post('rumussidikjari1-3')." ".$this->input->post('rumussidikjari1-4')." ".
							   $this->input->post('rumussidikjari1-5')." ".$this->input->post('rumussidikjari1-6');
			$fingerprintdua =  $this->input->post('rumussidikjari2-1')." ".$this->input->post('rumussidikjari2-2')." ".
							   $this->input->post('rumussidikjari2-3')." ".$this->input->post('rumussidikjari2-4')." ".
							   $this->input->post('rumussidikjari2-5')." ".$this->input->post('rumussidikjari2-6');

			$data['skck_cirifisik'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_rambut' => ucwords($this->input->post('rambut')),
				'applicant_wajah' => ucwords($this->input->post('wajah')),
				'applicant_kulit' => ucwords($this->input->post('kulit')),
				'applicant_tinggibadan' => $this->input->post('tinggibadan'),
				'applicant_beratbadan' => $this->input->post('beratbadan'),
				'applicant_tandakhusus' => ucwords($this->input->post('tandakhusus')),
				'applicant_rumussidikjari' => ucwords($fingerprintsatu)."#".ucwords($fingerprintdua)
			);
			$cirifisik = $this->skck->add_skck_cirifisik($data['skck_cirifisik']);


			if(!empty($_FILES['userfiles']))
			{
				//$files = $_FILES['userfiles'];
				$docs_uploaded_path = $this->docs_upload($_FILES['userfiles'], $skck_id);
				$data['skck_documents'] = array(
					'id' => $skck_id,
					'applicant_id' => $this->input->post('id'),
					'applicant_docs_exist' => $this->input->post('docs_exist'),
					'skck_ktp' => $docs_uploaded_path[0]['file_name'],
					'skck_passport' => $docs_uploaded_path[4]['file_name'],
					'skck_familycard' => $docs_uploaded_path[2]['file_name'],
					'skck_birthcert' => $docs_uploaded_path[1]['file_name'],
					'skck_fingerprint' => $docs_uploaded_path[3]['file_name'],
					'skck_polsek' => $docs_uploaded_path[5]['file_name'],
					'skck_desa' => $docs_uploaded_path[6]['file_name'],
					'skck_kecamatan' => $docs_uploaded_path[7]['file_name']
				);
			}
			$documents = $this->skck->add_skck_documents($data['skck_documents']);


			$data['skck_keterangan'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_hist_oversea' => ucfirst($this->input->post('hist_oversea')),
				'applicant_hist_occupation' => ucfirst($this->input->post('hist_occupation')),
				'applicant_hist_hobby' => ucwords($this->input->post('hist_hobby')),
				'applicant_curr_address' => ucwords($this->input->post('curr_address')),
				'applicant_wna_sponsor' => ucwords($this->input->post('wna_sponsor')),
				'applicant_wna_sponsor_address' => ucwords($this->input->post('wna_sponsor_address')),
				'applicant_wna_sponsor_occupation' => ucwords($this->input->post('wna_sponsor_occupation')),
				'applicant_wna_sponsor_phone' => $this->input->post('wna_sponsor_phone')
			);
			$keterangan = $this->skck->add_skck_keterangan($data['skck_keterangan']);


			//JSON Method as RESTful Style
			/*
				$this->output->set_content_type('application/json')
						 ->set_output(json_encode(array(
						 	'response' => 'success',
						 	'data' => $data
					)));

			*/
			$data['skck_registration_no'] = $regNo;
			$data['skck_registration_name'] = ucwords($this->input->post('name'));
			$data['success'] = 'true';
			$this->load->view('header');
			$this->load->view('headertitle');
			$this->load->view('navigation');
			$this->load->view('registrationresult', $data);
			$this->load->view('footer');
		}
		else
		{
			$data['success'] = 'false';
			$this->load->view('header');
			$this->load->view('headertitle');
			$this->load->view('navigation');
			$this->load->view('registrationresult', $data);
			$this->load->view('footer');
		}
	}

	public function extend()
	{
		if($this->input->post('submitSKCKextend'))
		{
			$regNo = 'ED'.date("dm").rand(1000, 9999).rand(10, 99);
			$skck_id = $this->input->post('serialNumber');
			$data['skck_registration'] = array(
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => ucwords($this->input->post('name')),
				'applicant_email' => $this->input->post('email'),
				'unit_type' => 'JATIM001C',
				'reg_type' => 'E',
				'status_type' => 'D',
				'purpose_desc' => ucwords($this->input->post('purpose_desc')),
				'staff_id' => NULL,
				'application_id' => $regNo,
				'print_id' => NULL
			);
			$registration = $this->skck->update_skck_registration($skck_id, $data['skck_registration']);

			$data['skck_personaldata'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => ucwords($this->input->post('name')),
				'applicant_birthplace' => ucwords($this->input->post('birthplace')),
				'applicant_birthdate' => $this->indonesian_date($this->input->post('birthdate')),
				'applicant_religion' => $this->input->post('religion'),
				'applicant_citizenship' => $this->input->post('citizenship'),
				'applicant_sex' => $this->input->post('sex'),
				'applicant_marital_status' => $this->input->post('marital_status'),
				'applicant_occupation' => ucwords($this->input->post('occupation')),
				'applicant_address_doc' => ucwords( $this->input->post('address_doc_1')." "
												   .$this->input->post('address_doc_2')." "
												   .$this->input->post('address_doc_3') ),
				'applicant_address_now' => ucwords( $this->input->post('address_now_1')." "
												   .$this->input->post('address_now_2')." "
												   .$this->input->post('address_now_3') ),
				'applicant_passport' => $this->input->post('passport'),
				'applicant_phone' => $this->input->post('phone')
			);
			$personaldata = $this->skck->update_skck_personaldata($skck_id, $data['skck_personaldata']);


			$data['skck_family'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_spouse_type' => $this->input->post('spouse_type'),
				'applicant_spouse_name' => ucwords($this->input->post('spouse_name')),
				'applicant_spouse_age' => $this->input->post('spouse_age'),
				'applicant_spouse_religion' => $this->input->post('spouse_religion'),
				'applicant_spouse_citizenship' => $this->input->post('spouse_citizenship'),
				'applicant_spouse_occupation' => ucwords($this->input->post('spouse_occupation')),
				'applicant_spouse_address' => ucwords($this->input->post('spouse_address')),
				'applicant_father_name' => ucwords($this->input->post('father_name')),
				'applicant_father_age' => $this->input->post('father_ages'),
				'applicant_father_religion' => $this->input->post('father_religion'),
				'applicant_father_citizenship' => $this->input->post('father_citizenship'),
				'applicant_father_occupation' => ucwords($this->input->post('father_occupation')),
				'applicant_father_address' => ucwords($this->input->post('father_address')),
				'applicant_mother_name' => ucwords($this->input->post('mother_name')),
				'applicant_mother_age' => $this->input->post('mother_ages'),
				'applicant_mother_religion' => $this->input->post('mother_religion'),
				'applicant_mother_citizenship' => $this->input->post('mother_citizenship'),
				'applicant_mother_occupation' => ucwords($this->input->post('mother_occupation')),
				'applicant_mother_address' => ucwords($this->input->post('mother_address')),
				'applicant_siblings_names' => ucwords($this->input->post('siblings_names_1'))."#"
																			.ucwords($this->input->post('siblings_names_2'))."#"
																			.ucwords($this->input->post('siblings_names_3'))."#"
																			.ucwords($this->input->post('siblings_names_4'))."#"
																			.ucwords($this->input->post('siblings_names_5'))."#"
																			.ucwords($this->input->post('siblings_names_6')),
				'applicant_siblings_ages' => $this->input->post('siblings_ages_1')."#"
																		 .$this->input->post('siblings_ages_2')."#"
																		 .$this->input->post('siblings_ages_3')."#"
																		 .$this->input->post('siblings_ages_4')."#"
																		 .$this->input->post('siblings_ages_5')."#"
																		 .$this->input->post('siblings_ages_6'),
				'applicant_siblings_addresses' => ucwords($this->input->post('siblings_addresses_1'))."#"
																					.ucwords($this->input->post('siblings_addresses_2'))."#"
																					.ucwords($this->input->post('siblings_addresses_3'))."#"
																					.ucwords($this->input->post('siblings_addresses_4'))."#"
																					.ucwords($this->input->post('siblings_addresses_5'))."#"
																					.ucwords($this->input->post('siblings_addresses_6'))
			);
			$family = $this->skck->update_skck_family($skck_id, $data['skck_family']);

			$data['skck_education'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_hist_school' => $this->input->post('hist_school'),
				'applicant_edu_primary' => strtoupper($this->input->post('edu_primary')),
				'applicant_edu_primary_city' => ucwords($this->input->post('edu_primary_city')),
				'applicant_edu_primary_year' => $this->input->post('edu_primary_year'),
				'applicant_edu_secondary' => strtoupper($this->input->post('edu_secondary')),
				'applicant_edu_secondary_city' => ucwords($this->input->post('edu_secondary_city')),
				'applicant_edu_secondary_year' => $this->input->post('edu_secondary_year'),
				'applicant_edu_tertiary' => strtoupper($this->input->post('edu_tertiary')),
				'applicant_edu_tertiary_city' => ucwords($this->input->post('edu_tertiary_city')),
				'applicant_edu_tertiary_year' => $this->input->post('edu_tertiary_year'),
				'applicant_edu_bachelor' => strtoupper($this->input->post('edu_bachelor')),
				'applicant_edu_bachelor_city' => ucwords($this->input->post('edu_bachelor_city')),
				'applicant_edu_bachelor_year' => $this->input->post('edu_bachelor_year'),
				'applicant_edu_master' => strtoupper($this->input->post('edu_master')),
				'applicant_edu_master_city' => ucwords($this->input->post('edu_master_city')),
				'applicant_edu_master_year' => $this->input->post('edu_master_year'),
				'applicant_edu_doctoral' => strtoupper($this->input->post('edu_doctoral')),
				'applicant_edu_doctoral_city' => ucwords($this->input->post('edu_doctoral_city')),
				'applicant_edu_doctoral_year' => $this->input->post('edu_doctoral_year')
			);
			$education = $this->skck->update_skck_education($skck_id, $data['skck_education']);

			$data['skck_pelanggaran'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_pidana' => $this->input->post('pidana'),
				'applicant_pidana_apa' => $this->input->post('pidana_apa'),
				'applicant_pidana_proses' => $this->input->post('pidana_proses'),
				'applicant_pidana_kasus' => $this->input->post('pidana_kasus'),
				'applicant_pidana_sampaimana' => $this->input->post('pidana_sampaimana'),
				'applicant_pidana_putusansementara' => $this->input->post('pidana_putusansementara'),
				'applicant_pidana_putusanakhir' => $this->input->post('pidana_putusanakhir'),
				'applicant_pelanggaran' => $this->input->post('pelanggaran'),
				'applicant_pelanggaran_apa' => $this->input->post('pelanggaran_apa'),
				'applicant_pelanggaran_proses' => $this->input->post('pelanggaran_proses'),
				'applicant_pelanggaran_sampaimana' => $this->input->post('pelanggaran_sampaimana')
			);
			$pelanggaran = $this->skck->update_skck_pelanggaran($skck_id, $data['skck_pelanggaran']);

			$fingerprintsatu = $this->input->post('rumussidikjari1-1')." ".$this->input->post('rumussidikjari1-2')." ".
							   $this->input->post('rumussidikjari1-3')." ".$this->input->post('rumussidikjari1-4')." ".
							   $this->input->post('rumussidikjari1-5')." ".$this->input->post('rumussidikjari1-6');
			$fingerprintdua =  $this->input->post('rumussidikjari2-1')." ".$this->input->post('rumussidikjari2-2')." ".
							   $this->input->post('rumussidikjari2-3')." ".$this->input->post('rumussidikjari2-4')." ".
							   $this->input->post('rumussidikjari2-5')." ".$this->input->post('rumussidikjari2-6');
			$data['skck_cirifisik'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_rambut' => ucwords($this->input->post('rambut')),
				'applicant_wajah' => ucwords($this->input->post('wajah')),
				'applicant_kulit' => ucwords($this->input->post('kulit')),
				'applicant_tinggibadan' => $this->input->post('tinggibadan'),
				'applicant_beratbadan' => $this->input->post('beratbadan'),
				'applicant_tandakhusus' => ucwords($this->input->post('tandakhusus')),
				'applicant_rumussidikjari' => ucwords($fingerprintsatu)."#".ucwords($fingerprintdua)
			);
			$cirifisik = $this->skck->update_skck_cirifisik($skck_id, $data['skck_cirifisik']);


			if(!empty($_FILES['userfiles']))
			{
				//$files = $_FILES['userfiles'];
				$docs_uploaded_path = $this->docs_upload($_FILES['userfiles'], $skck_id);
				$data['skck_documents'] = array(
					'id' => $skck_id,
					'applicant_id' => $this->input->post('id'),
					'applicant_docs_exist' => $this->input->post('docs_exist'),
					'skck_ktp' => $docs_uploaded_path[0]['file_name'],
					'skck_passport' => $docs_uploaded_path[4]['file_name'],
					'skck_familycard' => $docs_uploaded_path[2]['file_name'],
					'skck_birthcert' => $docs_uploaded_path[1]['file_name'],
					'skck_fingerprint' => $docs_uploaded_path[3]['file_name'],
					'skck_corp_sponsor' => $docs_uploaded_path[5]['file_name'],
					'skck_marital_letter' => $docs_uploaded_path[6]['file_name'],
					'skck_report_evidence' => $docs_uploaded_path[7]['file_name']
				);
			}
			$documents = $this->skck->update_skck_documents($skck_id, $data['skck_documents']);


			$data['skck_keterangan'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_hist_oversea' => ucwords($this->input->post('hist_oversea')),
				'applicant_hist_occupation' => ucwords($this->input->post('hist_occupation')),
				'applicant_hist_hobby' => ucwords($this->input->post('hist_hobby')),
				'applicant_curr_address' => ucwords($this->input->post('curr_address')),
				'applicant_wna_sponsor' => ucwords($this->input->post('wna_sponsor')),
				'applicant_wna_sponsor_address' => ucwords($this->input->post('wna_sponsor_address')),
				'applicant_wna_sponsor_occupation' => ucwords($this->input->post('wna_sponsor_occupation')),
				'applicant_wna_sponsor_phone' => $this->input->post('wna_sponsor_phone')
			);
			$keterangan = $this->skck->update_skck_keterangan($skck_id, $data['skck_keterangan']);


			//JSON Method as RESTful Style
			/*
				$this->output->set_content_type('application/json')
						 ->set_output(json_encode(array(
						 	'response' => 'success',
						 	'data' => $data
					)));

			*/
			$data['skck_registration_no'] = $regNo;
			$data['skck_registration_name'] = ucwords($this->input->post('name'));
			$data['success'] = 'true';
			$this->load->view('header');
			$this->load->view('headertitle');
			$this->load->view('navigation');
			$this->load->view('registrationresult', $data);
			$this->load->view('footer');
		}
		else
		{
			$data['success'] = 'false';
			$this->load->view('header');
			$this->load->view('headertitle');
			$this->load->view('navigation');
			$this->load->view('registrationresult', $data);
			$this->load->view('footer');
		}
	}

}
