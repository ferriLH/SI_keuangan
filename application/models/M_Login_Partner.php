<?php


class M_Login_Partner extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function cek ($user,$pass){
		$this->db->select("*");
		$this->db->from('t_partner');
		$this->db->where("email_partner",$user);
		$this->db->where("password",$pass);
		return $this->db->get();
	}
}
