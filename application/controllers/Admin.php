<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model', 'userrole');
  }

  public function index()
  {
    $data['judul'] = "";
    $this->load->view("admin/v_adminheader");
    $this->load->view("admin/v_admin", $data);
    $this->load->view("admin/v_adminFooter");
  }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */