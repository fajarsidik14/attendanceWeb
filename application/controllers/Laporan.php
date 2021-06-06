<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('absensi_m');
	}
	public function index()

	{	
		$data['row'] = $this->absensi_m->get();
		$this->template->load('template','absensi/absensi_data',$data);
		
	}

}
