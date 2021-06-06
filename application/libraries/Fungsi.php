<?php 
    Class Fungsi 
    {
        protected $ci;
        function __construct() 
        {
            $this->ci =& get_instance();
        }

        function user_login() 
        {
            $this->ci->load->model('users_m');
            $idUser = $this->ci->session->userdata('idUser');
            $user_data = $this->ci->users_m->get($idUser)->row();
            return $user_data;
        }

        public function count_absensi(){
            $this->ci->load->model('absensi_m');
            return  $this->ci->absensi_m->get()->num_rows();
        }
        public function count_karyawan(){
            $this->ci->load->model('karyawan_m');
            return  $this->ci->karyawan_m->get()->num_rows();
        }
        public function count_users(){
            $this->ci->load->model('users_m');
            return  $this->ci->users_m->get()->num_rows();
        }

    }
?>