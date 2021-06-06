<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['users_m','bagian_m']);
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->users_m->get();
		$this->template->load('template','users/users_data',$data);
	}

	public function add()
	{
		$users = new stdClass();
		$users->idUser = null;
		$users->password = null;
		$users->lokasi = null;
		$users->idBagian = null;
		$users->level = null;

		$query_bagian = $this->bagian_m->get();
		$data = array(
			'page' => 'add',
			'row' => $users,
			'bagian' => $query_bagian,
		);
		$this->template->load('template','users/users_form',$data);
	}

	public function edit($idUser) 
    {
        $query = $this->users_m->get($idUser);
        if ($query->num_rows() > 0) {
            $users = $query->row();
            $query_bagian = $this->bagian_m->get();

            $data = array(
                'page' => 'edit',
                'row' => $users,
                'bagian' => $query_bagian,
        );
            $this->template->load('template', 'users/users_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
                        echo "window.location='".site_url('users')."';</script>";
        }
    }

	public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->users_m->add($post);
        } else if(isset($_POST['edit'])){
            $this->users_m->edit($post);
        }
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
		redirect('users');
    }

	public function del($idUser)
	{
		$this->input->post('idUser');
		$this->users_m->del($idUser);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('users');

	}


	// public function add()
	// {
	// 	$this->form_validation->set_rules('idUser', 'IDUser','min_length[5]|is_unique');//jika username is_unique[users.username]
	// 	$this->form_validation->set_rules('password', 'Password','required|min_length[5]');
	// 	$this->form_validation->set_rules('passconf', 'Konfirmasi Password','required|matches[password]',
	// 		 array('matches' =>  '%s password tidak sesuai')
	// 	);
	// 	$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
	// 	$this->form_validation->set_rules('idBagian', 'IDBagian', 'required');
	// 	$this->form_validation->set_rules('level', 'Level', 'required');

	// 	$this->form_validation->set_message('required', '%s masih kosong, silahkan isi' );
	// 	$this->form_validation->set_message('min_length', '{field} minimal 5 karakter' );
	// 	$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti' );

	// 	$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->template->load('template','users/users_form_add');
	// 	} else {
	// 		// echo "Prosses simpan data users baru";
	// 		$post = $this->input->post(null, TRUE);
	// 		$this->users_m->add($post);
	// 		if ($this->db->affected_rows() > 0) {
	// 			$this->session->set_flashdata('success', 'Data berhasil disimpan');
	// 		}
	// 		redirect('users');
	// 	}
	// }

	// public function edit($idUser)
	// {
	// 	$this->form_validation->set_rules('idUser', 'IDUser','min_length[5]|callback_id_check');//jika username is_unique[users.username]
	// 	if ($this->input->post('password')){
	// 		$this->form_validation->set_rules('password', 'Password','min_length[5]');
	// 		$this->form_validation->set_rules('passconf', 'Konfirmasi Password','matches[password]',
	// 		 array('matches' =>  '%s password tidak sesuai')
	// 	);
	// 	}
	// 	if ($this->input->post('passconf')){
	// 		$this->form_validation->set_rules('passconf', 'Konfirmasi Password','matches[password]',
	// 		 array('matches' =>  '%s password tidak sesuai')
	// 	);
	// 	}
	// 	$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
	// 	$this->form_validation->set_rules('idBagian', 'IDBagian', 'required');
	// 	$this->form_validation->set_rules('level', 'Level', 'required');

	// 	$this->form_validation->set_message('required', '%s masih kosong, silahkan isi' );
	// 	$this->form_validation->set_message('min_length', '{field} minimal 5 karakter' );
	// 	// $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti' );

	// 	$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

	// 	if ($this->form_validation->run() == FALSE) 
	// 	{
	// 		$query = $this->users_m->get($idUser);
	// 		if ($query->num_rows() > 0) {
	// 			$data['row'] = $query->row();
	// 			$this->template->load('template','users/users_form_edit', $data);
	// 		} else {
	// 			echo"<script>alert('Data tidak ditemukan');";
	// 			echo"window.location='".site_url('users')."';</script>";
	// 		}
			
	// 	} else {
	// 		// echo "Prosses simpan data users baru";
	// 		$post = $this->input->post(null, TRUE);
	// 		$this->users_m->edit($post);
	// 		if ($this->db->affected_rows() > 0) {
	// 			$this->session->set_flashdata('success', 'Data berhasil disimpan');
	// 		}
	// 		redirect('users');
	// 	}
	// }

	// function id_check(){
	// 	$post = $this->input->post(null, TRUE);
	// 	$query = $this->db->query("SELECT * FROM users WHERE  users.idUser = '$post[idUser]'");
	// 	if ($query->num_rows() > 0) {
	// 		$this->form_validation->set_message('id_check', '{field} ini sudah dipakai, silahkan ganti' );
	// 		return FALSE;
	// 	} else {
	// 		return TRUE;
	// 	}

	// }

	
}
