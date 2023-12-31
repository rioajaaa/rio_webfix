<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Galeri extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Galeri_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman";
    $data['galeri'] = $this->Galeri_model->get(); 
    $this->load->view("admin/v_adminHeader", $data);
    $this->load->view("admin/galeri/v_galeri", $data);
    $this->load->view("admin/v_adminFooter", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman";
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['galeri'] = $this->Galeri_model->get();
    $this->form_validation->set_rules('galeri_judul','Judul Galeri','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('galeri_upload','Waktu Upload','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/galeri/v_galeriTambah", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'galeri_judul' => $this->input->post('galeri_judul'),
        'galeri_upload' => $this->input->post('galeri_upload'),
        'foto' => $this->input->post('foto'),
      ];
      $this->Galeri_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('Galeri');
    }
  }

  public function hapus($id)
  {
    $this->Galeri_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
      redirect('Galeri');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman";
    $data['galeri'] = $this->Galeri_model->getById($id);
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('galeri_judul','Judul Galeri','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('galeri_upload','Waktu Upload','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/galeri/v_galeriEdit", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'galeri_judul' => $this->input->post('galeri_judul'),
        'galeri_upload' => $this->input->post('galeri_upload'),
        'foto' => $this->input->post('foto'),
      ];
      $id = $this->input->post('id');
      $this->Galeri_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
      redirect('Galeri');
    }
  }
}