<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelTelkom');
		$this->load->model('Core');
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
		$del = $this -> M_model -> delete($where,'data_karyawan');
		if ($del >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Karyawan Berhasil di hapus"));
			header('location:'.base_url('Karyawan'));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Karyawan Gagal di hapus"));
			header('location:'.base_url('Karyawan'));
		}
	}
	public function create(){
		$data = array('nama'=>$this->input->post('nama'),
			'posisi_kerja'=>$this->input->post('posisi'),
			'telp'=> $this->input->post('telp'),
			'shift_kerja'=>$this->input->post('shift'),
			'Alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'status_user'=>1);
		$karyawan = $this->M_model->insert('data_karyawan',$data);
		if ($karyawan >= 0) {
		$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Karyawan Baru Berhasil di Buat"));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Karyawan Baru Berhasil di Buat"));
		}
		
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
		$edit = $this->M_model->update('data_karyawan',$data,$where);
		if ($edit >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Data Karyawan Berhasil di Ubah"));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Data Karyawan Gagal di Ubah"));
		}
		redirect(base_url('Karyawan'));
	}
}
