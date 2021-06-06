<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('absensi_m');
	}
	public function index()
	{
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('idKaryawan', 'IDKaryawan','required|min_length[5]');
		$this->form_validation->set_rules('tanggal', 'Tanggal','required');
		$this->form_validation->set_rules('status', 'status','required');
		$this->form_validation->set_rules('idUser', 'IDUser','required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi' );
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter' );
		// $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti' );

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template','absensi/absensi_form_add');
		} else {
			// echo "Prosses simpan data";
			$post = $this->input->post(null, TRUE);
			$this->absensi_m->add($post);
			if ($this->db->affected_rows() > 0) {
				// echo"<script>alert('Data berhasil di simpan');</script>";
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
			}
			// echo"<script>window.location='".site_url('absensi/')."';</script>";
			redirect('laporan');
		}
	}
		
}
