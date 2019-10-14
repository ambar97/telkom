<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPrimer extends CI_Controller {

	public function index()
	{
		$data['primer']=$this->M_model->select('data_primer')->result();
		$this->load->view('v_primer',$data);
	}
	public function hapus($id){
		$where = array('id_primer'=>$id);
		$this -> M_model -> delete($where,'data_primer');
		header('location:'.base_url('DataPrimer'));
	}
	public function tambah(){
		$this->load->view('insert/primer');
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
		$data['priemr'] = $this->M_model->select('data_primer');
		$this->load->view('update/u_primer',$data);
	}
}
