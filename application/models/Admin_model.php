<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getAllsiswa()
    {
        //ambil seluruuh data siswa
        return $this->db->get('muda_siswa')->result_array();
    }
}