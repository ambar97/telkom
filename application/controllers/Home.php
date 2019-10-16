<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$this->load->view('v_home');
		}
	}
}
