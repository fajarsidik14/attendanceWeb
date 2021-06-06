<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('bagian', 'bagian.idBagian = karyawan.idBagian');
        if ($id != null) {
            $this->db->where('idKaryawan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'idKaryawan' => $post['idKaryawan'],
            'nama' => $post['nama'],
            'idBagian' => $post['bagian'],
            'jabatan' => $post['jabatan'],
            'telpon' => $post['telpon'],
        ];
        $this->db->insert('karyawan', $params);
    }


//get data karyawan berdasarkan divisi/bagian
    public function security()
    {
        $this->db->select(`karyawan`.`idKaryawan` ,`idKaryawan`,`karyawan`.`nama` , `nama`,`karyawan`.`jabatan` , `jabatan`,`karyawan`.`telpon` , `telpon`);
        $this->db->from('karyawan');
        $this->db->join('bagian', 'bagian.idBagian = karyawan.idBagian');
         $this->db->where('bagian.namaB = "Security"');

        $query = $this->db->get();
        return $query;
    }

    public function cleaning()
    {
        $this->db->select(`karyawan`.`idKaryawan` ,`idKaryawan`,`karyawan`.`nama` , `nama`,`karyawan`.`jabatan` , `jabatan`,`karyawan`.`telpon` , `telpon`);
        $this->db->from('karyawan');
        $this->db->join('bagian', 'bagian.idBagian = karyawan.idBagian');
         $this->db->where('bagian.namaB = "Cleaning Services"', );

        $query = $this->db->get();
        return $query;
    }
    public function house()
    {
        $this->db->select(`karyawan`.`idKaryawan` ,`idKaryawan`,`karyawan`.`nama` , `nama`,`karyawan`.`jabatan` , `jabatan`,`karyawan`.`telpon` , `telpon`);
        $this->db->from('karyawan');
        $this->db->join('bagian', 'bagian.idBagian = karyawan.idBagian');
         $this->db->where('bagian.namaB = "House Keeping"', );

        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params = [
            'idKaryawan' => $post['idKaryawan'],
            'nama' => $post['nama'],
            'idBagian' => $post['bagian'],
            'jabatan' => $post['jabatan'],
            'telpon' => $post['telpon'],
        ];
        $this->db->where('idKaryawan', $post['idKaryawan']);
        $this->db->update('karyawan', $params);
    }

    public function delete($idKaryawan)
	{
		$this->db->where('idKaryawan', $idKaryawan);
		$this->db->delete('karyawan');
	}
}
