<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataHistory extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$data['data_history']=$this->M_model->select('data_history')->result();
			$this->load->view('v_datahistory',$data);
		}
	}
	public function hapus($id){
		$where = array('id_history'=>$id);
		$this -> M_model -> delete($where,'data_history');
		header('location:'.base_url('DataHistory'));
	}
	public function tambah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$this->load->view('insert/data_history');
		}
	}public function insert(){
		$data = array('id_history'=>$this->input->post('id_history'),
			'lat'=>$this->input->post('lat'),
			'lng'=>$this->input->post('lng'),
			'kabel'=>$this->input->post('kable'),
			'core'=>$this->input->post('core'),
			'des'=>$this->input->post('des'),
			'Pekerja'=>$this->input->post('Pekerja'),
			'img1'=>$this->input->post('img1'),
			'img2'=>$this->input->post('img2'),
			'respond'=>$this->input->post('rspond'),
			'Working'=>$this->input->post('Working'),
			'solving'=>$this->input->post('solving'));
		// die(var_dump($data));
		$this->M_model->insert('data_history',$data);
		header('location:'.base_url('DataHistory'));
	}
	public function ubah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$where = array('id_history'=>$this->uri->segment('3'));
			$data['data_history'] = $this->M_model->selectwhere('data_history',$where);
			$this->load->view('update/u_datahistory',$data);
		}
	}
	public function edit(){
		$where = array('id_history'=>$this->input->post('id_history'));
		$data = array('lat' => $this->input->post('lat'),
			'lng'=> $this->input->post('lng'),
			'kabel'=>$this->input->post('kabel'),
			'core'=>$this->input->post('core'),
			'Pekerja'=>$this->input->post('Pekerja'),
			'img1'=>$this->input->post('img1'),
			'img2'=>$this->input->post('img2'),
			'respond'=>$this->input->post('rspond'),
			'Working'=>$this->input->post('Working'),
			'solving'=>$this->input->post('solving'));
		// die(var_dump($where));
		$this->M_model->update('data_history',$data,$where);
		header('location:'.base_url('DataHistory'));
	}

}
