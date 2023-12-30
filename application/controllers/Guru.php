<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Guru extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Guru_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Pengajar Al Amin";
    $data['guru'] = $this->Guru_model->get(); 
    $this->load->view("admin/v_adminHeader", $data);
    $this->load->view("admin/guru/v_guru", $data);
    $this->load->view("admin/v_adminFooter", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Form Tambah Data Pengajar";
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['guru'] = $this->Guru_model->get();
    $this->form_validation->set_rules('nama_pengajar','Nama Pengajar','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('noin_pengajar','No Induk','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('jabatan_pengajar','Jabatan Pengajar','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/guru/v_guruTambah", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'nama_pengajar' => $this->input->post('nama_pengajar'),
        'noin_pengajar' => $this->input->post('noin_pengajar'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'jabatan_pengajar' => $this->input->post('jabatan_pengajar'),
        'foto' => $this->input->post('foto'),
      ];
      $this->Guru_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('Guru');
    }
  }

  public function hapus($id)
  {
    $this->Guru_model->delete($id);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
      redirect('Guru');
  }

  public function edit($id)
  {
    $data['judul'] = "Form Edit Data Pengajar";
    $data['guru'] = $this->Guru_model->getById($id);
    // $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('nama_pengajar','Nama Pengajar','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('noin_pengajar','No Induk','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',[
      'required'=>'Data Harus Diisi'
    ]);
    $this->form_validation->set_rules('jabatan_pengajar','Jabatan Pengajar','required',[
      'required'=>'Data Harus Diisi'
    ]);
    if ($this->form_validation->run()==false){
      $this->load->view("admin/v_adminHeader", $data);
      $this->load->view("admin/guru/v_guruEdit", $data);
      $this->load->view("admin/v_adminFooter");
    } else {
      $data = [
        'nama_pengajar' => $this->input->post('nama_pengajar'),
        'noin_pengajar' => $this->input->post('noin_pengajar'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'jabatan_pengajar' => $this->input->post('jabatan_pengajar'),
        'foto' => $this->input->post('foto'),
      ];
      $id = $this->input->post('id');
      $this->Guru_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
      redirect('Guru');
    }
  }
}