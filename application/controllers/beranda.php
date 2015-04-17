<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('skckmodel', 'skck');
		$this->load->helper('url');
		$this->load->helper('date');
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		/* 
			GET SESSION DATA
			$this->session->userdata('userid');
			$this->session->userdata('username');
			$this->session->userdata('role');
			$this->session->userdata('loggedin');
		*/	
		//Check Logged in
		//if($this->session->userdata('loggedin')==NULL) 
		//{
		//	redirect('login');
		//}
		$this->load->view('header');
		$this->load->view('headertitle');
		$this->load->view('navigation');
		$this->load->view('dashboard');
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
}