<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian_m extends CI_Model {
    public function get($idBagian = null)
    {
        $this->db->select('*');
        $this->db->from('bagian');
        // $this->db->join('Bagian', 'Bagian.idBagian = bagian.idBagian');
        if ($idBagian != null) {
            $this->db->where('idBagian', $idBagian);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function add($post)
    {
        $params['idBagian'] = $post['idBagian'];
        $params['namaB'] = $post['namaB'];//sha1//opsional
        $this->db->insert('bagian', $params);
    }

    public function delete($idBagian)
	{
		$this->db->where('idBagian', $idBagian);
		$this->db->delete('Bagian');
	}
}