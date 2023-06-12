<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unweb extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('PDF');
        $this->load->library('datatables');
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");

       
        
    }
	public function index()
	{
		$data['pageName']="Selamat Datang";
		$this->template->load('template','index',$data);
	}

	
}
