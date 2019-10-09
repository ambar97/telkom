<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPrimer extends CI_Controller {

	public function index()
	{
		$data['primer']=$this->M_model->select('data_primer')->result();
		$this->load->view('v_primer',$data);
	}
}
