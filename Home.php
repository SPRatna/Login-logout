<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$admin=$this->session->userdata('admin');
		$this->load->view('admin/dashboard');
	}
}
