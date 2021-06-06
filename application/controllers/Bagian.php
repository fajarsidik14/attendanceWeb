<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('bagian_m');
	}

	public function index()
	{
		$data['row'] = $this->bagian_m->get();
		$this->template->load('template','bagian/bagian_data',$data);
	}


	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('idbagian', 'idBagian');//jika username is_unique[users.username]
		$this->form_validation->set_rules('namaB', 'namaB','required|is_unique[bagian.namaB]');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi' );
		// $this->form_validation->set_message('min_length', '{field} minimal 5 karakter' );
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti' );

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template','bagian/bagian_form_add');
		} else {
			// echo "Prosses simpan data users baru";
			$post = $this->input->post(null, TRUE);
			$this->bagian_m->add($post);
			if ($this->db->affected_rows() > 0) {
				echo"<script>alert('Data berhasil di simpan');</script>";
			}
			echo"<script>window.location='".site_url('bagian')."';</script>";
		}
	}

	public function delete()
	{
		$idBagian = $this->input->post('idBagian');
		$this->bagian_m->delete($idBagian);
		if ($this->db->affected_rows() > 0) {
			echo"<script>alert('Data berhasil dihapus');</script>";
		}
		echo"<script>window.location='".site_url('bagian')."';</script>";

	}
}
