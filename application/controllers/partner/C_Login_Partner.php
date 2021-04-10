<?php


class C_Login_Partner extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login_Partner');
	}
	public function index()
	{
		$data = array(
			"title" => "Login Partner",
		);
		if($this->session->userdata('isLogin') == 'partner'){
			redirect('partner/dashboard');
		}else{
			$this->load->view('partner/V_Login',$data);
		}
//		$data = array(
//			"title" => "Login Partner",
//		);
//		$this->load->view('partner/V_Login',$data);
	}
	function auth()
	{
		$data = array(
			"title" => "Login Partner",
		);
		$this->form_validation->set_rules('email_partner', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('partner/V_Login',$data);
		} else {
			$user = $this->input->post('email_partner');
			$pass = sha1($this->input->post('password'));
			$cek = $this->M_Login_Partner->cek($user,$pass);
			if ($cek->num_rows() != 0) {
				foreach ($cek->result() as $dat) {
					$sess_data['isLogin']       = 'partner';
					$sess_data['id_partner']    = $dat->id_partner;
					$sess_data['nama']    		= $dat->nama_partner;
					$sess_data['email']   		= $dat->email_partner;
					$sess_data['aktif']         = $dat->aktif;
					$this->session->set_userdata($sess_data);
				}
				$this->session->set_flashdata('sukses','sukses');
				redirect('partner/dashboard');
			} else {
				$this->session->set_flashdata('failed', 'Username atau Password anda masukan salah!');
				$this->load->view('partner/V_Login',$data);
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('partner');
	}
}
