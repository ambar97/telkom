<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPrimer extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('Core');
	}
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
		$dgf = $this -> M_model -> delete($where,'data_primer');
		if ($dgf >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Data Primer berhasil di hapus"));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Data Primer Gagal di hapus"));
		}
		header('location:'.base_url('DataPrimer'));
	}
	public function tambah(){
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
			$this->load->view('insert/primer');
		}
	}public function insert(){
		$data = array(
			'lokasi_1'=>$this->input->post('lk1'),
			'lokasi_2'=>$this->input->post('lk2'),
			'jenis_kabel'=>$this->input->post('jenis'),
			'panjang'=>$this->input->post('panjang'),
			'ruas'=>$this->input->post('ruas'));
		$nambah = $this->M_model->insert('data_primer',$data);
		if ($nambah >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Data Primer berhasil di tambah"));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Data Primer Gagal di tambah"));
		}
		
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
		$ganti = $this->M_model->update('data_primer',$data,$where);
		if ($ganti >= 0) {
			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Data Premier berhasil di ubah"));
		} else {
			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Data Premier Gagal di ubah"));
		}
		header('location:'.base_url('DataPrimer'));
	}

}
