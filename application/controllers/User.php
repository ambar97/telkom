<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelTelkom');
		$this->load->model('Core');
	}
	function index(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$data['user'] = $this->ModelTelkom->select_user()->result();
			$this->load->view('v_user',$data);
		}
	}
	function tambah(){
		$data['karyawan'] = $this->M_model->select('data_karyawan');
		$this->load->view('insert/user',$data);	
	}
	public function hapus($id){
		$where = array('idUser'=>$id);
		$hapus = $this -> M_model -> delete($where,'user');
		if ($hapus >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("User Berhasil di hapus"));
			header('location:'.base_url('User'));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("User Gagal di hapus"));
			header('location:'.base_url('User'));
		}
		
	}
	public function insertD(){
		$user = $this->input->post('asd');
		$pass = $this->input->post('password');
		$karyawan = $this->input->post('karyawan');
		$kategori = $this->input->post('kategori');
		$data = array('idKaryawan'=>$karyawan,
			'tgl_daftar'=>date("Y-m-d H:i:s"),
			'status'=>'Off',
			'username'=>$user,
			'password'=>md5($pass),
			'kategori_user'=>$kategori);
		// die(var_dump($data));
		$rt = $this->M_model->insert('user',$data);
		if ($rt >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("User Berhasil di buat"));
			header('location:'.base_url('User'));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("User Gagal di buat"));
			header('location:'.base_url('User'));
		}
	}

	public function gous(){
		$this->load->view('update/u_user');
	}

}
