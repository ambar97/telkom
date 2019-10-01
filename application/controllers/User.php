<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTelkom');
    }
	function index(){
		$data['user'] = $this->ModelTelkom->select_user()->result();
		$this->load->view('v_user',$data);
	}
	function tambah(){
		$data['karyawan'] = $this->M_model->select('data_karyawan');
		$this->load->view('insert/user',$data);	
	}
	public function hapus($id){
		$where = array('idUser'=>$id);
		$this -> M_model -> delete($where,'user');
		header('location:'.base_url('User'));
	}

}
