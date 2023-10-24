<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          //your own cons 
          $this->load->model('Admin_model', 'am');
     }
     public function Index()
     {
          $this->load->view('template_admin/navbar.php');
          $this->load->view('admin/index');
          $this->load->view('template_admin/footer');
     }
     public function siswa()
     {

          //kirim data ke halaman 
          $data['title'] = 'Data Siswa';
          //ambil data siswa
          $data['siswa'] = $this->am->getAllsiswa();

          //tampilkan data siswa
          $this->load->view('template_admin/navbar',$data);
          $this->load->view('admin/siswa-view');
          $this->load->view('template_admin/footer');
     }

     public function tambahSiswa()
     {
          $data['title'] = 'Tambah Siswa';

          $this->load->view('template_admin/navbar',$data);
          $this->load->view('admin/siswa-add');
          $this->load->view('template_admin/footer');
     
     }
}