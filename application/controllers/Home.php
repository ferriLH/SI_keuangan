<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/admin/C_Login_Admin.php');
class Home extends C_Login_Admin {
	public function index() {
		$this->action();
	}
}
