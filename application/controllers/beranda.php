<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session', 'pagination');
		$this->load->model('skckmodel', 'skck');
		$this->load->helper('url', 'date');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		/*
			GET SESSION DATA
			$this->session->userdata('userid');
			$this->session->userdata('username');
		*/
		//Check Logged in
		//if($this->session->userdata('loggedin')==NULL)
		//{
		//	redirect('login');
		//}
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('beranda');
		$this->load->view('footer');
	}

	public function tentangskck()
	{
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('infoskck');
		$this->load->view('footer');
	}

public function penggunaansitus()
	{
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('berandatur');
		$this->load->view('berandajs');
		$this->load->view('footer');
	}

}
