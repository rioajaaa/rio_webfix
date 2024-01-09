<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Sejarah extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Sejarah_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Sejarah Al - Amin";
    $data['sejarah'] = $this->Sejarah_model->get(); 
    $this->load->view("admin/v_adminHeader", $data);
    $this->load->view("admin/sejarah/v_sejarah", $data);
    $this->load->view("admin/v_adminFooter", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Sejarah Al - Amin";
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['sejarah'] = $this->Sejarah_model->get();
    $this->form_validation->set_rules('judul_sejarah','Judul Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('isi_sejarah','isi Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('penutup_sejarah','Penutup Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/sejarah/v_sejarahTambah", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'judul_sejarah' => $this->input->post('judul_sejarah'),
        'isi_sejarah' => $this->input->post('isi_sejarah'),
        'penutup_sejarah' => $this->input->post('penutup_sejarah'),
        'foto' => $this->input->post('foto'),
      ];
      $this->Sejarah_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('Sejarah');
    }
  }

  public function hapus($id)
  {
    $this->Sejarah_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
      redirect('Sejarah');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman Sejarah Al - Amin";
    $data['sejarah'] = $this->Sejarah_model->getById($id);
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('judul_sejarah','Judul Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('isi_sejarah','Isi Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('penutup_sejarah','Penutup Sejarah','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/sejarah/v_sejarahEdit", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'judul_sejarah' => $this->input->post('judul_sejarah'),
        'isi_sejarah' => $this->input->post('isi_sejarah'),
        'penutup_sejarah' => $this->input->post('penutup_sejarah'),
        'foto' => $this->input->post('foto'),
      ];
      $id = $this->input->post('id');
      $this->Sejarah_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
      redirect('Sejarah');
    }
  }
}