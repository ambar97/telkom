<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['gambar'] = $this->M_suzuki->selectwhere('galeri',array('tipe'=>'biasa'));
		$this->load->view('v_login');
	}
}
