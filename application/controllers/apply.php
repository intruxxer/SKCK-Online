<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
		$this->load->model('skckmodel', 'skck');
		$this->load->model('pendaftaranmodel', 'pendaftaran');
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
		if( $this->input->post('submitSKCKextendingSearch') == 'Cari e-SKCK Sebelumnya')
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
					'skck_surat_polsek' => $docs_uploaded_path[5]['file_name'],
					'skck_surat_desa' => $docs_uploaded_path[6]['file_name'],
					'skck_surat_kecamatan' => $docs_uploaded_path[7]['file_name']
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
			$data['skck_id'] = $skck_id;
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
					'skck_surat_polsek' => $docs_uploaded_path[5]['file_name'],
					'skck_surat_desa' => $docs_uploaded_path[6]['file_name'],
					'skck_surat_kecamatan' => $docs_uploaded_path[7]['file_name']
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
			$data['skck_id'] = $skck_id;
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

	public function print_word()
	{
		$this->load->library('word');
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$id = $this->uri->segment(3);

		$d = $this->pendaftaran->get_pendaftaran_by_id($id);
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
      $doc->setValue('CURR_ADDRESS', ucwords($d[0]['applicant_address_doc']));

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
        $doc->setValue( 'CURRADDRESS2', ucwords( substr($d[0]['applicant_address_doc'], $nearestWhitespaceFromIndexFifty, strlen($d[0]['applicant_address_doc'])) ) );
      }
      else
      {
        $doc->setValue('CURRADDRESS', ucwords($d[0]['applicant_address_doc']));
        $doc->setValue('CURRADDRESS2', '');
      }
      $doc->setValue('ISSUINGDATE', date('d F Y'));
      $doc->setValue('VALIDFROM', date('d F Y'));
      $currDate = date('d F Y');
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

	public function print_pertanyaan()
  {
    $this->load->library('word');
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $id = $this->uri->segment(3);
    $d = $this->pendaftaran->get_pendaftaran_by_id($id);
    if(count($d) > 0)
    {
      $doc = $phpWord->loadTemplate(APPPATH.'/templates/DAFTAR PERTANYAAN skck.docx');
      $doc->setValue('NAMA_LENGKAP', strtoupper($d[0]['applicant_name']));
      $doc->setValue('AGAMA', ucwords($d[0]['applicant_religion']));
      $doc->setValue('BPLACE', ucwords($d[0]['applicant_birthplace']));
      $birthdate = explode("-",$d[0]['applicant_birthdate']);
      $doc->setValue('BDATE', $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0]);
      if($d[0]['applicant_citizenship'] == 'I')
        $doc->setValue('NATIONALITY', 'WNI');
      else
        $doc->setValue('NATIONALITY', 'WNA');

      if($d[0]['applicant_sex']=='M')
        $doc->setValue('JENIS_KELAMIN', 'Laki-Laki');
      else
        $doc->setValue('JENIS_KELAMIN', 'Perempuan');

      $doc->setValue('CURRADDRESS', ucwords($d[0]['applicant_address_doc']));
      $doc->setValue('CURRADDRESS2', '');
      $doc->setValue('OCCUPATION', ucwords($d[0]['applicant_occupation']));
      $doc->setValue('NOKTP', ucwords($d[0]['applicant_id']));
      $doc->setValue('EMAIL', ucwords($d[0]['applicant_email']));
      $doc->setValue('NO_HP', ucwords($d[0]['applicant_phone']));

      if($d[0]['applicant_spouse_type']=='I' || $d[0]['applicant_spouse_type']=='S')
        $doc->setValue('MARITAL_STATUS', 'Menikah');
      else
        $doc->setValue('MARITAL_STATUS', 'Tidak Menikah');

      //spouse
      $doc->setValue('SPOUSE_NAME', ucwords($d[0]['applicant_spouse_name']));
      $doc->setValue('SPOUSE_AGE', ucwords($d[0]['applicant_spouse_age']));
      $doc->setValue('SPOUSE_RELIGION', ucwords($d[0]['applicant_spouse_religion']));

      if($d[0]['applicant_spouse_citizenship'] == 'I')
        $doc->setValue('SPOUSE_NATIONALITY', 'WNI');
      else
        $doc->setValue('SPOUSE_NATIONALITY', 'WNA');
      $doc->setValue('SPOUSE_OCCUPATION', ucwords($d[0]['applicant_spouse_occupation']));

      //father
      $doc->setValue('FATHER_NAME', ucwords($d[0]['applicant_father_name']));
      $doc->setValue('FATHER_AGE', ucwords($d[0]['applicant_father_age']));
      $doc->setValue('FATHER_RELIGION', ucwords($d[0]['applicant_father_religion']));

      if($d[0]['applicant_father_citizenship'] == 'I')
        $doc->setValue('FATHER_NATIONALITY', 'WNI');
      else
        $doc->setValue('FATHER_NATIONALITY', 'WNA');
      $doc->setValue('FATHER_OCCUPATION', ucwords($d[0]['applicant_father_occupation']));

      //mother
      $doc->setValue('MOTHER_NAME', ucwords($d[0]['applicant_mother_name']));
      $doc->setValue('MOTHER_AGE', ucwords($d[0]['applicant_mother_age']));
      $doc->setValue('MOTHER_RELIGION', ucwords($d[0]['applicant_mother_religion']));

      if($d[0]['applicant_mother_citizenship'] == 'I')
        $doc->setValue('MOTHER_NATIONALITY', 'WNI');
      else
        $doc->setValue('MOTHER_NATIONALITY', 'WNA');
      $doc->setValue('MOTHER_OCCUPATION', ucwords($d[0]['applicant_mother_occupation']));

      $siblings = $d[0]['applicant_siblings_names'];
      $sib = explode('#', $siblings);

      if(count($sib) == 6)
      {
        $doc->setValue('SIBLING_NAME_1', ucwords($sib[0]));
        $doc->setValue('SIBLING_NAME_2', ucwords($sib[1]));
        $doc->setValue('SIBLING_NAME_3', ucwords($sib[2]));
        $doc->setValue('SIBLING_NAME_4', ucwords($sib[3]));
        $doc->setValue('SIBLING_NAME_5', ucwords($sib[4]));
        $doc->setValue('SIBLING_NAME_6', ucwords($sib[5]));
      }
      else
      {
        $doc->setValue('SIBLING_NAME_1', '');
        $doc->setValue('SIBLING_NAME_2', '');
        $doc->setValue('SIBLING_NAME_3', '');
        $doc->setValue('SIBLING_NAME_4', '');
        $doc->setValue('SIBLING_NAME_5', '');
        $doc->setValue('SIBLING_NAME_6', '');
      }

      $ages = $d[0]['applicant_siblings_ages'];
      $age = explode('#', $ages);

      if(count($age) == 6)
      {
        $doc->setValue('SB_A_1', $age[0]);
        $doc->setValue('SB_A_2', $age[1]);
        $doc->setValue('SB_A_3', $age[2]);
        $doc->setValue('SB_A_4', $age[3]);
        $doc->setValue('SB_A_5', $age[4]);
        $doc->setValue('SB_A_6', $age[5]);
      }
      else
      {
        $doc->setValue('SB_A_1', '');
        $doc->setValue('SB_A_2', '');
        $doc->setValue('SB_A_3', '');
        $doc->setValue('SB_A_4', '');
        $doc->setValue('SB_A_5', '');
        $doc->setValue('SB_A_6', '');
      }

      $addresses = $d[0]['applicant_siblings_addresses'];
      $address = explode('#', $addresses);

      if(count($address) == 6)
      {
        $doc->setValue('SB_ADDRESS_1', ucwords($address[0]));
        $doc->setValue('SB_ADDRESS_2', ucwords($address[1]));
        $doc->setValue('SB_ADDRESS_3', ucwords($address[2]));
        $doc->setValue('SB_ADDRESS_4', ucwords($address[3]));
        $doc->setValue('SB_ADDRESS_5', ucwords($address[4]));
        $doc->setValue('SB_ADDRESS_6', ucwords($address[5]));
      }
      else
      {
        $doc->setValue('SB_ADDRESS_1', '');
        $doc->setValue('SB_ADDRESS_2', '');
        $doc->setValue('SB_ADDRESS_3', '');
        $doc->setValue('SB_ADDRESS_4', '');
        $doc->setValue('SB_ADDRESS_5', '');
        $doc->setValue('SB_ADDRESS_6', '');
      }

      $doc->setValue('SD', ucwords($d[0]['applicant_edu_primary']));
      $doc->setValue('SDN_CITY', ucwords($d[0]['applicant_edu_primary_city']));
      $doc->setValue('SD_YEAR', $d[0]['applicant_edu_primary_year']);

      $doc->setValue('SMP', ucwords($d[0]['applicant_edu_secondary']));
      $doc->setValue('SMP_CITY', ucwords($d[0]['applicant_edu_secondary_city']));
      $doc->setValue('SMP_YEAR', $d[0]['applicant_edu_secondary_year']);

      $doc->setValue('SMA', ucwords($d[0]['applicant_edu_tertiary']));
      $doc->setValue('SMA_CITY', ucwords($d[0]['applicant_edu_tertiary_city']));
      $doc->setValue('SMA_YEAR', $d[0]['applicant_edu_tertiary_year']);

      $doc->setValue('UNIV', ucwords($d[0]['applicant_edu_bachelor']));
      $doc->setValue('UNIV_CITY', ucwords($d[0]['applicant_edu_bachelor_city']));
      $doc->setValue('UNIV_YEAR', $d[0]['applicant_edu_bachelor_year']);

      $doc->setValue('PIDANA', ucwords($d[0]['applicant_pidana']));
      $doc->setValue('PIDANA_DALAM', ucwords($d[0]['applicant_pidana_apa']));
      $doc->setValue('PIDANA_PUTUSAN', ucwords($d[0]['applicant_pidana_putusansementara']));
      $doc->setValue('PIDANA_PROSES', ucwords($d[0]['applicant_pidana_proses']));
      $doc->setValue('PIDANA_KASUS', ucwords($d[0]['applicant_pidana_kasus']));
      $doc->setValue('PIDANA_HUKUM', ucwords($d[0]['applicant_pidana_sampaimana']));
      $doc->setValue('PIDANA_HASIL_AKHIR', ucwords($d[0]['applicant_pidana_putusanakhir']));

      $doc->setValue('PELANGGARAN_SOSIAL', ucwords($d[0]['applicant_pelanggaran']));
      $doc->setValue('PELANGGARAN_SOSIAL_APA', ucwords($d[0]['applicant_pelanggaran_apa']));
      $doc->setValue('PELANGGARAN_SOSIAL_PROSES', ucwords($d[0]['applicant_pelanggaran_proses']));

      $doc->setValue('KETERANGAN_LN', ucwords($d[0]['applicant_hist_oversea']));

      $doc->setValue('FISIK_RAMBUT', ucwords($d[0]['applicant_rambut']));
      $doc->setValue('FISIK_MUKA', ucwords($d[0]['applicant_wajah']));
      $doc->setValue('FISIK_KULIT', ucwords($d[0]['applicant_kulit']));
      $doc->setValue('FISIK_TINGGIBADAN', ucwords($d[0]['applicant_tinggibadan']));
      $doc->setValue('FISIK_ISTIMEWA', ucwords($d[0]['applicant_tandakhusus']));

      $doc->setValue('FISIK_HOBI', ucwords($d[0]['applicant_hist_hobby']));
      $doc->setValue('ISSUING_DATE', date('d').' '.get_month_text(date('n')).' '.date('Y'));


      $doc->saveAs('/tmp/'.$id.'surat_pernyataan.docx');

      $this->load->helper('download');
      $data = file_get_contents('/tmp/'.$id.'surat_pernyataan.docx');
      $name = 'Surat_Pernyataan'.'_'.$d[0]['application_id'].'_'.$d[0]['applicant_name'].'.docx';
      force_download($name, $data);
      @unlink('/tmp/'.$id.'surat_pernyataan.docx');

    }
  }

  public function print_kartu()
  {
    $this->load->library('word');

    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $id = $this->uri->segment(3);
    $d = $this->pendaftaran->get_pendaftaran_by_id($id);
    if(count($d) > 0)
    {
      $doc = $phpWord->loadTemplate(APPPATH.'/templates/KARTU TIK skck.docx');
      $doc->setValue('NAMA_LENGKAP', strtoupper($d[0]['applicant_name']));
      $doc->setValue('RELIGION', ucwords($d[0]['applicant_religion']));
      $doc->setValue('BPLACE', ucwords($d[0]['applicant_birthplace']));
      $birthdate = explode("-",$d[0]['applicant_birthdate']);
      $doc->setValue('BDATE', $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0]);

      $doc->setValue('PASSPORT', ucwords($d[0]['applicant_passport']));

      $doc->setValue('ADDRESS_DOC', ucwords($d[0]['applicant_address_doc']));
      $doc->setValue('ADDRESS_NOW', ucwords($d[0]['applicant_address_now']));
      $doc->setValue('OCCUPATION', ucwords($d[0]['applicant_occupation']));
      $doc->setValue('NOKTP', ucwords($d[0]['applicant_id']));

      //spouse
      $doc->setValue('SPOUSE_NAME', ucwords($d[0]['applicant_spouse_name']));
      $doc->setValue('SPOUSE_ADDRESS', ucwords($d[0]['applicant_spouse_address']));

      $doc->setValue('FATHER_NAME', ucwords($d[0]['applicant_father_name']));
      $doc->setValue('MOTHER_NAME', ucwords($d[0]['applicant_mother_name']));
      $doc->setValue('FATHER_MOTHER_ADDRESS', ucwords($d[0]['applicant_father_address']));

      $doc->setValue('SDN', ucwords($d[0]['applicant_edu_primary']));
      $doc->setValue('SDN_YEAR', $d[0]['applicant_edu_primary_year']);

      $doc->setValue('SMP', ucwords($d[0]['applicant_edu_secondary']));
      $doc->setValue('SMP_YEAR', $d[0]['applicant_edu_secondary_year']);

      $doc->setValue('SMA', ucwords($d[0]['applicant_edu_tertiary']));
      $doc->setValue('SMA_YEAR', $d[0]['applicant_edu_tertiary_year']);

      $doc->setValue('UNIV', ucwords($d[0]['applicant_edu_bachelor']));
      $doc->setValue('UNIV_YEAR', $d[0]['applicant_edu_bachelor_year']);


      $doc->setValue('CATATAN', '');

      $sidiks = $d[0]['applicant_rumussidikjari'];
      $sidik = explode('#',$sidiks);
      if(count($sidik)==2)
      {
        $doc->setValue('RUMUS_SIDIKJARI', $sidik[0]);
        $doc->setValue('RUMUS_SIDIKJARI2', $sidik[1]);
      }
      else
      {
        $doc->setValue('RUMUS_SIDIKJARI', '');
        $doc->setValue('RUMUS_SIDIKJARI2', '');

      }

      $doc->setValue('FISIK_RAMBUT', ucwords($d[0]['applicant_rambut']));
      $doc->setValue('FISIK_MUKA', ucwords($d[0]['applicant_wajah']));
      $doc->setValue('FISIK_KULIT', ucwords($d[0]['applicant_kulit']));
      $doc->setValue('FISIK_TINGGI', ucwords($d[0]['applicant_tinggibadan']));
      $doc->setValue('FISIK_TANDA', ucwords($d[0]['applicant_tandakhusus']));

      $doc->setValue('HOBBY', ucwords($d[0]['applicant_hist_hobby']));
      $doc->setValue('ISSUINGDATE', date('d').' '.get_month_text(date('n')).' '.date('Y'));

      $doc->saveAs('/tmp/'.$id.'kartu_tik.docx');

      $this->load->helper('download');
      $data = file_get_contents('/tmp/'.$id.'kartu_tik.docx');
      $name = 'Kartu_Tik'.'_'.$d[0]['application_id'].'_'.$d[0]['applicant_name'].'.docx';

      force_download($name, $data);
      @unlink('/tmp/'.$id.'kartu_tik.docx');

    }

  }

}
