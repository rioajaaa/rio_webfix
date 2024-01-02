<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Berita extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Berita_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prestasi Al - Amin";
    $data['berita'] = $this->Berita_model->get(); 
    $this->load->view("admin/v_adminHeader", $data);
    $this->load->view("admin/berita/v_berita", $data);
    $this->load->view("admin/v_adminFooter", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Prestasi Al - Amin";
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['berita'] = $this->Berita_model->get();
    $this->form_validation->set_rules('berita_judul','Judul Berita','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('berita_isi','Isi Berita','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('berita_upload','Waktu Upload','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/berita/v_beritaTambah", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'berita_judul' => $this->input->post('berita_judul'),
        'berita_isi' => $this->input->post('berita_isi'),
        'berita_upload' => $this->input->post('berita_upload'),
        'foto' => $this->input->post('foto'),
      ];
      $this->Berita_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('Berita');
    }
  }

  public function hapus($id)
  {
    $this->Berita_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
      redirect('Berita');
  }

  public function edit($id)
  {
    $data['judul'] = "Halaman Prestasi Al - Amin";
    $data['berita'] = $this->Berita_model->getById($id);
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('berita_judul','Judul Berita','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('berita_isi','Isi Berita','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('berita_upload','Waktu Upload','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/berita/v_beritaEdit", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'berita_judul' => $this->input->post('berita_judul'),
        'berita_isi' => $this->input->post('berita_isi'),
        'berita_upload' => $this->input->post('berita_upload'),
        'foto' => $this->input->post('foto'),
      ];
      $id = $this->input->post('id');
      $this->Berita_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
      redirect('Berita');
    }
  }
}