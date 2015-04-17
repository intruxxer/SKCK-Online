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
		$this->load->view('skckformexperiment');
		$this->load->view('footer');
	}

	public function perpanjangan()
	{
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('skckform');
		$this->load->view('footer');
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

	public function docs_upload()
	{
		//Configure upload.
		/*
		$config = array();
        $config['upload_path'] = './images/add';
		$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['max_filename'] = '100';
        
        $this->load->library('upload', $config);
		*/
		$this->load->library('upload');
        $this->upload->initialize(array(
            "upload_path"   => "./uploads",
            "allowed_types" => "gif|jpg|png"
        ));

        //Perform upload.
        if($this->upload->do_multi_upload("files")) {
            //Code to run upon successful upload.
            print_r($this->upload->get_multi_upload_data());
        }
	}

	public function register()
	{
		if($this->input->post('submitSKCK'))
		{
			$regNo = 'ND'.date("dm").rand(1000, 9999).rand(10, 99);
			$success = true;
			$data['skck_registration'] = array(
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => $this->input->post('name'),
				'unit_type' => 'JATIM001C',
				'reg_type' => 'N',
				'status_type' => 'D',
				'purpose_desc' => $this->input->post('purpose_desc'),
				'staff_id' => NULL,
				'application_id' => $regNo
			);
			$skck_id = $this->skck->create_skck_registration($data['skck_registration']);
			
			$data['skck_personaldata'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_name' => $this->input->post('name'),
				'applicant_birthplace' => $this->input->post('birthplace'),
				'applicant_birthdate' => $this->input->post('birthdate'),
				'applicant_religion' => $this->input->post('religion'),
				'applicant_citizenship' => $this->input->post('citizenship'),
				'applicant_sex' => $this->input->post('sex'),
				'applicant_marital_status' => $this->input->post('marital_status'),
				'applicant_occupation' => $this->input->post('occupation'),
				'applicant_address_doc' => $this->input->post('address_doc'),
				'applicant_address_now' => $this->input->post('address_now'),
				'applicant_passport' => $this->input->post('passport'),
				'applicant_phone' => $this->input->post('phone')			
			);
			$personaldata = $this->skck->add_skck_personaldata($data['skck_personaldata']);

			
			$data['skck_family'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_spouse_type' => $this->input->post('spouse_type'),
				'applicant_spouse_name' => $this->input->post('spouse_name'),
				'applicant_spouse_age' => $this->input->post('spouse_ages'),
				'applicant_spouse_religion' => $this->input->post('spouse_religion'),
				'applicant_spouse_citizenship' => $this->input->post('spouse_citizenship'),
				'applicant_spouse_occupation' => $this->input->post('spouse_occupation'),
				'applicant_spouse_address' => $this->input->post('spouse_address'),
				'applicant_father_name' => $this->input->post('father_name'),
				'applicant_father_age' => $this->input->post('father_ages'),
				'applicant_father_religion' => $this->input->post('father_religion'),
				'applicant_father_citizenship' => $this->input->post('father_citizenship'),
				'applicant_father_occupation' => $this->input->post('father_occupation'),
				'applicant_father_address' => $this->input->post('father_address'),
				'applicant_mother_name' => $this->input->post('mother_name'),
				'applicant_mother_age' => $this->input->post('mother_ages'),
				'applicant_mother_religion' => $this->input->post('mother_religion'),
				'applicant_mother_citizenship' => $this->input->post('mother_citizenship'),
				'applicant_mother_occupation' => $this->input->post('mother_occupation'),
				'applicant_mother_address' => $this->input->post('mother_address'),
				'applicant_siblings_names' => $this->input->post('siblings_names_1')."|".$this->input->post('siblings_names_2')."|".$this->input->post('siblings_names_3'),
				'applicant_siblings_ages' => $this->input->post('siblings_ages_1')."|".$this->input->post('siblings_ages_2')."|".$this->input->post('siblings_ages_3'),
				'applicant_siblings_addresses' => $this->input->post('siblings_addresses_1')."|".$this->input->post('siblings_addresses_2')."|".$this->input->post('siblings_addresses_3')
			);
			$family = $this->skck->add_skck_family($data['skck_family']);

			$data['skck_education'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_edu_primary' => $this->input->post('edu_primary'),
				'applicant_edu_primary_city' => $this->input->post('edu_primary_city'),
				'applicant_edu_primary_year' => $this->input->post('edu_primary_year'),
				'applicant_edu_secondary' => $this->input->post('edu_secondary'),
				'applicant_edu_secondary_city' => $this->input->post('edu_secondary_city'),
				'applicant_edu_secondary_year' => $this->input->post('edu_secondary_year'),
				'applicant_edu_tertiary' => $this->input->post('edu_tertiary'),
				'applicant_edu_tertiary_city' => $this->input->post('edu_tertiary_city'),
				'applicant_edu_tertiary_year' => $this->input->post('edu_tertiary_year'),
				'applicant_edu_bachelor' => $this->input->post('edu_bachelor'),
				'applicant_edu_bachelor_city' => $this->input->post('edu_bachelor_city'),
				'applicant_edu_bachelor_year' => $this->input->post('edu_bachelor_year'),
				'applicant_edu_master' => $this->input->post('edu_master'),
				'applicant_edu_master_city' => $this->input->post('edu_master_city'),
				'applicant_edu_master_year' => $this->input->post('edu_master_year'),
				'applicant_edu_doctoral' => $this->input->post('edu_doctoral'),
				'applicant_edu_doctoral_city' => $this->input->post('edu_doctoral_city'),
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

			$data['skck_cirifisik'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_rambut' => $this->input->post('rambut'),
				'applicant_wajah' => $this->input->post('wajah'),
				'applicant_kulit' => $this->input->post('kulit'),
				'applicant_tinggibadan' => $this->input->post('tinggibadan'),
				'applicant_beratbadan' => $this->input->post('beratbadan'),
				'applicant_tandakhusus' => $this->input->post('tandakhusus'),
				'applicant_rumussidikjari' => $this->input->post('rumussidikjari1')."-".$this->input->post('rumussidikjari2')
			);
			$cirifisik = $this->skck->add_skck_cirifisik($data['skck_cirifisik']);

			/*
			$data['skck_documents'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'skck_ktp' => $this->input->post('idfile'),
				'skck_passport' => $this->input->post('passportfile'),
				'skck_familycard' => $this->input->post('familycardfile'),
				'skck_birthcert' => $this->input->post('birthcertfile'),
				'skck_fingerprint' => $this->input->post('fingerprintfile'),
				'skck_corp_sponsor' => $this->input->post('corp_sponsorfile'),
				'skck_marital_letter' => $this->input->post('marital_letterfile'),
				'skck_report_evidence' => $this->input->post('report_evidencefile')
			);
			*/


			$data['skck_keterangan'] = array(
				'id' => $skck_id,
				'applicant_id' => $this->input->post('id'),
				'applicant_hist_oversea' => $this->input->post('hist_oversea'),
				'applicant_hist_occupation' => $this->input->post('hist_occupation'),
				'applicant_hist_hobby' => $this->input->post('hist_hobby'),
				'applicant_curr_address' => $this->input->post('curr_address'),
				'applicant_wna_sponsor' => $this->input->post('wna_sponsor'),
				'applicant_wna_sponsor_address' => $this->input->post('wna_sponsor_address'),
				'applicant_wna_sponsor_occupation' => $this->input->post('wna_sponsor_occupation'),
				'applicant_wna_sponsor_phone' => $this->input->post('wna_sponsor_phone')	
			);
			$keterangan = $this->skck->add_skck_keterangan($data['skck_keterangan']);
			

			//JSON Method as RESTful Style
			/*$this->output->set_content_type('application/json')
						 ->set_output(json_encode(array(
						 	'response' => 'success',
						 	'data' => $data
						 	)));
			
			*/
			$data['skck_registration_no'] = $regNo;
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
