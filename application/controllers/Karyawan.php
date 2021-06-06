<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['karyawan_m','bagian_m']);
	}

	public function index()
	{
		$data['row'] = $this->karyawan_m->get();
		$this->template->load('template','karyawan/karyawan_data',$data);
	}

	public function add()
	{
		$karyawan = new stdClass();
		$karyawan->idKaryawan = null;
		$karyawan->nama = null;
		$karyawan->idBagian = null;
		$karyawan->jabatan = null;
		$karyawan->telpon = null;

		$query_bagian = $this->bagian_m->get();
		$data = array(
			'page' => 'add',
			'row' => $karyawan,
			'bagian' => $query_bagian,
		);
		$this->template->load('template','karyawan/karyawan_form',$data);
	}

	public function edit($idKaryawan) 
    {
        $query = $this->karyawan_m->get($idKaryawan);
        if ($query->num_rows() > 0) {
            $karyawan = $query->row();
            $query_bagian = $this->bagian_m->get();

            $data = array(
                'page' => 'edit',
                'row' => $karyawan,
                'bagian' => $query_bagian,
        );
            $this->template->load('template', 'karyawan/karyawan_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
                        echo "window.location='".site_url('karyawan')."';</script>";
        }
	}
	public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->karyawan_m->add($post);
        } else if(isset($_POST['edit'])){
            $this->karyawan_m->edit($post);
        }
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
		redirect('karyawan');
    }

//get karyawan berdasarkan divisi/bagian
	public function security()
	{
		$data['row'] = $this->karyawan_m->security();
		$this->template->load('template','karyawan/security',$data);	
	}
	public function cleaning()
	{
		$data['row'] = $this->karyawan_m->cleaning();
		$this->template->load('template','karyawan/cleaning_services',$data);	
	}
	public function house()
	{
		$data['row'] = $this->karyawan_m->house();
		$this->template->load('template','karyawan/house_keeping',$data);	
	}

	public function delete()
	{
		$idKaryawan = $this->input->post('idKaryawan');
		$this->karyawan_m->delete($idKaryawan);
		if ($this->db->affected_rows() > 0) {
			echo"<script>alert('Data berhasil dihapus');</script>";
		}
		echo"<script>window.location='".site_url('karyawan')."';</script>";

	}
}
