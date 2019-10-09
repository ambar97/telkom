<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRating extends CI_Controller {
   function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTelkom');
    }
	public function index()
	{
		$data['rating']=$this->ModelTelkom->selectrating()->result();
		$this->load->view('v_rating',$data);
	}
}
