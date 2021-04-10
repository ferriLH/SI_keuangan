<?php


class C_Login_Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login_Admin');
	}
	public function action()
	{
		$data = array(
			"title" => "Login Admin",
		);
		if($this->session->userdata('isLogin') == 'admin'){
			redirect('dashboard');
		}else{
			$this->load->view('admin/V_Login',$data);
		}
//		$data = array(
//			"title" => "Login Admin",
//		);
//		$this->load->view('admin/V_Login',$data);
	}
	function auth()
	{
		$data = array(
			"title" => "Login Admin",
		);
		$this->form_validation->set_rules('email_admin', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/V_Login',$data);
		} else {
			$user = $this->input->post('email_admin');
			$pass = sha1($this->input->post('password'));
			$cek = $this->M_Login_Admin->cek($user,$pass);
			if ($cek->num_rows() != 0) {
				foreach ($cek->result() as $dat) {
					$sess_data['isLogin']       = 'admin';
					$sess_data['id_admin']      = $dat->id_admin;
					$sess_data['nama']    		= $dat->nama_admin;
					$sess_data['email']   		= $dat->email_admin;
					$sess_data['aktif']         = $dat->aktif;
					$this->session->set_userdata($sess_data);
				}
				$this->session->set_flashdata('sukses','sukses');
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('failed', 'Username atau Password anda masukan salah!');
				$this->load->view('admin/V_Login',$data);
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
