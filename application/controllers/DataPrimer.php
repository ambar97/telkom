<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPrimer extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$data['primer']=$this->M_model->select('data_primer')->result();
			$this->load->view('v_primer',$data);
		}
	}
	public function hapus($id){
		$where = array('id_primer'=>$id);
		$this -> M_model -> delete($where,'data_primer');
		header('location:'.base_url('DataPrimer'));
	}
	public function tambah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$this->load->view('insert/primer');
		}
	}public function insert(){
		$data = array('nama'=>$this->input->post('nama'),
			'lokasi_1'=>$this->input->post('lk1'),
			'lokasi_2'=>$this->input->post('lk2'),
			'jenis_kabel'=>$this->input->post('jenis'),
			'panjang'=>$this->input->post('panjang'),
			'ruas'=>$this->input->post('ruas'));
		// die(var_dump($data));
		$this->M_model->insert('data_primer',$data);
		header('location:'.base_url('DataPrimer'));
	}
	public function ubah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$where = array('id_primer'=>$this->uri->segment('3'));
			$data['priemr'] = $this->M_model->selectwhere('data_primer',$where);
			$this->load->view('update/u_primer',$data);
		}
	}
	public function edit(){
		$where = array('id_primer'=>$this->input->post('idP'));
		$data = array('lokasi_1' => $this->input->post('lk1'),
			'lokasi_2'=> $this->input->post('lk2'),
			'jenis_kabel'=>$this->input->post('jenis'),
			'panjang'=>$this->input->post('panjang'),
			'ruas'=>$this->input->post('ruas'));
		// die(var_dump($where));
		$this->M_model->update('data_primer',$data,$where);
		header('location:'.base_url('DataPrimer'));
	}

}
