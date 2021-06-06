<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_m extends CI_Model {

    public function add($post)
    {
        $params['idAbsensi'] = $post['idAbsensi'];
        $params['idKaryawan'] = $post['idKaryawan'];
        $params['status'] = $post['status'];
        $params['tanggal'] = $post['tanggal'];
        $params['idUser'] = $post['idUser'];
        $this->db->insert('absensi', $params);
        
    }
    
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->join('karyawan', 'karyawan.idKaryawan = absensi.idKaryawan');
        $this->db->join('bagian', 'karyawan.idBagian = bagian.idBagian');
        $this->db->join('users', 'users.idUser = absensi.idUser');

        if ($id != null) {
            $this->db->where('idAbsensi', $id);
        }

        $query = $this->db->get();
        return $query;
    }
    
    public function rekapSecurity($tanggalawal,$tanggalakhir)
    {
        $query =  $query = $this->db->query("select `absensi`.`idKaryawan` AS `idKaryawan`,`karyawan`.`nama` AS `nama`,`bagian`.`namaB` AS `namaB`,`karyawan`.`jabatan` AS `jabatan`,count(`absensi`.`status`) AS `total` from ((`absensi` join `karyawan` on(`absensi`.`idKaryawan` = `karyawan`.`idKaryawan`)) join `bagian` on(`karyawan`.`idBagian` = `bagian`.`idBagian`)) where `bagian`.`namaB` = 'Security' and `absensi`.`tanggal` between '$tanggalawal' and '$tanggalakhir' group by `absensi`.`idKaryawan` order by `absensi`.`tanggal`");
        return $query->result();    
    }

    public function rekapCleaning($tanggalawal,$tanggalakhir)
    {
        $query =  $query = $this->db->query("select `absensi`.`idKaryawan` AS `idKaryawan`,`karyawan`.`nama` AS `nama`,`bagian`.`namaB` AS `namaB`,`karyawan`.`jabatan` AS `jabatan`,count(`absensi`.`status`) AS `total` from ((`absensi` join `karyawan` on(`absensi`.`idKaryawan` = `karyawan`.`idKaryawan`)) join `bagian` on(`karyawan`.`idBagian` = `bagian`.`idBagian`)) where `bagian`.`namaB` = 'Cleaning Services' and `absensi`.`tanggal` between '$tanggalawal' and '$tanggalakhir' group by `absensi`.`idKaryawan` order by `absensi`.`tanggal`");
        return $query->result();    
    }

    public function rekapHouse($tanggalawal,$tanggalakhir)
    {
        $query =  $query = $this->db->query("select `absensi`.`idKaryawan` AS `idKaryawan`,`karyawan`.`nama` AS `nama`,`bagian`.`namaB` AS `namaB`,`karyawan`.`jabatan` AS `jabatan`,count(`absensi`.`status`) AS `total` from ((`absensi` join `karyawan` on(`absensi`.`idKaryawan` = `karyawan`.`idKaryawan`)) join `bagian` on(`karyawan`.`idBagian` = `bagian`.`idBagian`)) where `bagian`.`namaB` = 'House Keeping' and `absensi`.`tanggal` between '$tanggalawal' and '$tanggalakhir' group by `absensi`.`idKaryawan` order by `absensi`.`tanggal`");
        return $query->result();    
    }
}