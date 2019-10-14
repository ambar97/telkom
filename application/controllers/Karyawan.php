<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelTelkom');
	}
	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$data['karyawan'] = $this->M_model->select('data_karyawan');
			$this->load->view('v_karyawan',$data);
		}
	}
	public function tambah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$this->load->view('insert/karyawan');	
		}
	}
	public function goet(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$where = array('id_karyawan'=>$this->uri->segment('3'));
			$data['datane'] = $this->M_model->selectwhere('data_karyawan',$where);
			$this->load->view('update/u_karyawan',$data);	
		}
	}
	public function hapus($id){
		$where = array('id_karyawan'=>$id);
		$this -> M_model -> delete($where,'data_karyawan');
		header('location:'.base_url('Karyawan'));
	}
	public function create(){
		$data = array('nama'=>$this->input->post('nama'),
			'posisi_kerja'=>$this->input->post('posisi'),
			'telp'=> $this->input->post('telp'),
			'shift_kerja'=>$this->input->post('shift'),
			'Alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'status_user'=>1);
		// die(var_dump($data));
		$this->M_model->insert('data_karyawan',$data);
		redirect(base_url('Karyawan'));

	}
	public function edit(){
		$where = array('id_karyawan'=>$this->input->post('id_karyawan'));
		$data = array('nama'=>$this->input->post('nama'),
			'posisi_kerja'=>$this->input->post('posisi'),
			'telp'=> $this->input->post('telp'),
			'shift_kerja'=>$this->input->post('shift'),
			'Alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'));
		// die(var_dump($data));
		$this->M_model->update('data_karyawan',$data,$where);
		redirect(base_url('Karyawan'));
	}
}
