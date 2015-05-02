<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generatepdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('skckmodel', 'skck');
		$this->load->model('pendaftaranmodel', 'pendaftaran');
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		date_default_timezone_set('Asia/Jakarta');
	}

	public function download_pdf($data=array())
	{
		//this data will be passed on to the view
		$data['the_content'] = 'mPDF and CodeIgniter are cool!';
		$data['regNo'] = 'ND0105255687';
		//load the view, pass the variable and do not show it but "save" the output into $html variable
		$html = $this->load->view('formpdf', $data, true); 
		//this the the PDF filename that user will get to download
		$pdfFilePath = $data['regNo'].'.pdf';
		//load mPDF library
		$this->load->library('pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");
	}

	public function create_save_pdf($data=array())
	{
		// This data will be passed on to the view
		$data['the_content'] = 'mPDF and CodeIgniter are cool!';
		$data['regNo'] = 'ND0105255687';
		$regNo = 'ND0105255687';
		// As PDF creation takes a bit of memory, 
		// We're saving the created file in /downloads/reports/
		$pdfFilePath = FCPATH."/downloads/reports/$regNo.pdf";
		 
		if (file_exists($pdfFilePath) == FALSE)
		{
		    ini_set('memory_limit','32M'); // boost the memory limit if it's low 
		    $html = $this->load->view('formpdf', $data, true); // render the view into HTML
		    
		    $this->load->library('pdf');
		    $pdf = $this->pdf->load();
		    $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure
		    $pdf->WriteHTML($html); // write the HTML into the PDF
		    $pdf->Output($pdfFilePath, 'F'); // save to file 
		}
		 
		redirect("/downloads/reports/$regNo.pdf");
	}
}