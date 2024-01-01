<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model', 'userrole');
	}

	function index()
	{
		$this->load->view("layout/auth_header");
		$this->load->view("auth/login");
		$this->load->view("layout/auth_footer");
	}

	public function cek_login()
	{
		// Set rules for form validation
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email wajib diisi',
			'valid_email' => 'Format email tidak valid'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password wajib diisi'
		]);

		// Run form validation
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			redirect('auth');
		} else {
			// Jika validasi berhasil, lanjutkan proses login
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('auth', ['email' => $email])->row_array();

			if ($user) {
				// Jika user ditemukan, verifikasi password
				if (password_verify($password, $user['password'])) {
					// Buat session
					$data = [
						'email' => $user['email'],
						'user_id' => $user['id'],
						// tambahkan data sesuai kebutuhan
					];
					$this->session->set_userdata($data);
					redirect('Galeri'); // Redirect ke halaman dashboard atau halaman setelah login berhasil
				} else {
					// Password tidak cocok
					$this->session->set_flashdata('message', 'Password salah');
					redirect('auth'); // Redirect kembali ke halaman login
				}
			} else {
				// Jika user tidak ditemukan
				$this->session->set_flashdata('message', 'Email tidak terdaftar');
				redirect('auth'); // Redirect kembali ke halaman login
			}
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
		redirect('auth');
	}
}
