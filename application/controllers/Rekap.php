<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('absensi_m');
	}
	public function index()

	{	
		$this->template->load('template');
	}

	
	public function security()

	{	
		$this->template->load('template','absensi/rekap_security');
	}
	public function printSecurity() 
	{
		
		$nilaifilter = $this->input->post('nilaifilter');
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		
		if ($nilaifilter == 1) {
			$data['title'] = 'Laporan Rekapitulasi Divisi Security';
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['footer'] = "Manager Pelayanan Jasa";
			$data['subfooter'] = "Haerudin S.Kom";
			$data['datafilter'] = $this->absensi_m->rekapSecurity($tanggalawal,$tanggalakhir);
			$this->template->load('template','absensi/laporan_rekap_security',$data);
		}
	}
	
	public function cleaning()

	{	
		$this->template->load('template','absensi/rekap_cleaning');
	}
	public function printCleaning() 
	{
		
		$nilaifilter = $this->input->post('nilaifilter');
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		
		if ($nilaifilter == 1) {
			$data['title'] = 'Laporan Rekapitulasi Divisi Cleaning Services';
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['footer'] = "Manager Pelayanan Jasa";
			$data['subfooter'] = "Haerudin S.Kom";
			$data['datafilter'] = $this->absensi_m->rekapCleaning($tanggalawal,$tanggalakhir);
			$this->template->load('template','absensi/laporan_rekap_cleaning',$data);
		}
	}

	public function house()

	{	
		$this->template->load('template','absensi/rekap_house');
	}
	public function printHouse() 
	{
		
		$nilaifilter = $this->input->post('nilaifilter');
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		
		if ($nilaifilter == 1) {
			$data['title'] = 'Laporan Rekapitulasi Divisi House Keeping';
			$data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
			$data['footer'] = "Manager Pelayanan Jasa";
			$data['subfooter'] = "Haerudin S.Kom";
			$data['datafilter'] = $this->absensi_m->rekapHouse($tanggalawal,$tanggalakhir);
			$this->template->load('template','absensi/laporan_rekap_house',$data);
		}
	}



}
