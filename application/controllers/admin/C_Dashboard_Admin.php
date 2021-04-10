<?php


class C_Dashboard_Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard_Admin');
	}

	public function action()
	{
		$data = array(
			"title" => "Dashboard Admin",
		);
		if($this->session->userdata('isLogin') == 'admin'){
			$this->load->view('admin/V_Dashboard',$data);
		}else{
			redirect('login');
		}

//		$data = array(
//			"title" => "Dashboard Admin",
//		);
//		$this->load->view('admin/V_Dashboard',$data);
	}
}
