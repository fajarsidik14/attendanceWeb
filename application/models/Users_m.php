<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {
	public function login($post)
	{
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('idUser', $post['idUser']);//$post sesuai name di tag html
        $this->db->where('password', $post['password']);//sha1($post['password'])
        $query = $this->db->get();
        return $query;
    }
    public function get($idUser = null)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('bagian', 'bagian.idBagian = users.idBagian');
        if ($idUser != null) {
            $this->db->where('idUser', $idUser);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'idUser' => $post['idUser'],
            'password' => $post['password'],
            'lokasi' => $post['lokasi'],
            'idBagian' => $post['bagian'],
            'level' => $post['level'],
        ];
        $this->db->insert('users', $params);
    }

    public function edit($post)
    {
        $params = [
            'idUser' => $post['idUser'],
            'password' => $post['password'],
            'lokasi' => $post['lokasi'],
            'idBagian' => $post['bagian'],
            'level' => $post['level'],
        ];
        $this->db->where('idUser', $post['idUser']);
        $this->db->update('users', $params);
    }

    public function del($idUser)
	{
		$this->db->where('idUser', $idUser);
		$this->db->delete('users');
	}
}