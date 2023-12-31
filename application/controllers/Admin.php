<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("admin/v_adminHeader");
		$this->load->view("admin/v_admin");
		$this->load->view("admin/v_adminFooter");
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */