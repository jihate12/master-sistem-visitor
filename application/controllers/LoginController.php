<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function prosesLogin()
	{
		$this->form_validation->set_rules('id', 'User', 'required|trim', [
			'required' => 'Kolom user harus diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Kolom password harus diisi'
		]);

		$id = $this->input->post('id', true);
		$password = md5($this->input->post('password', true));


		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$data = array(
				'user_id' => $id,
				'password' => $password
			);

			$cekLogin = $this->M_User->login($data)->num_rows();

			if ($cekLogin > 0) {
				$session = array(
					'user_id' => $id,
					'login' => 'BERHASIL!'
				);

				$this->session->set_userdata($session);
				redirect(base_url('MainController/table_view'));
			} else {
				redirect(base_url('LoginController'));
			}
		}
	}

	public function prosesLogout()
	{
		$this->session->sess_destroy();
		redirect(base_url('LoginController'));
	}
}
