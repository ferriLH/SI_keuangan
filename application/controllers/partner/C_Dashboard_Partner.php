<?php


class C_Dashboard_Partner extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard_Partner');
	}

	public function index()
	{
		$data = array(
			"title" => "Dashboard Partner",
		);
		if($this->session->userdata('isLogin') == 'partner'){
			$this->load->view('partner/V_Dashboard',$data);
		}else{
			redirect('partner');
		}

//		$data = array(
//			"title" => "Dashboard Partner",
//		);
//		$this->load->view('partner/V_Dashboard',$data);
	}
}
