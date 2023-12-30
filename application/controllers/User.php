<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Guru_model');
    $this->load->model('Galeri_model');
  }

  public function index()
  {
    $data['judul'] = "";
    $data['guru'] = $this->Guru_model->get(); 
    $data['galeri'] = $this->Galeri_model->get(); 
    $this->load->view("layout/header");
    $this->load->view("user/v_user", $data);
    $this->load->view("layout/footer");
  }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */