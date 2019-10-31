<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
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
			$id = $this->session->userdata('id');
			$data['nama']=$this->M_model->selectwhere('admin',array('id_admin'=>$id));
			$this->load->view('v_profile',$data);
		}
	}

	public function ubhUser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$paasmd = md5($this->input->post('password'));
		$where=array('id_admin'=>$this->session->userdata('id'),
					'password'=>$paasmd);
		$data=array('username'=>$username);
 		$rt = $this->M_model->update('admin',$data,$where);
 		if ($rt >= 0) {
 			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Username Berhasil di ubah"));
			redirect(base_url("Profile"));	
 		} else {
 			$this->session->set_flashdata("Pesan",$this->Core->alert_time("Password yang anda masukkan salah ! Ulangi kembali"));
			redirect(base_url("Profile"));
 		}	
			
			
		
	}
	public function ubhPsw(){
		$where=array('id_admin'=>$this->session->userdata('id'));
		$data=array('password'=>md5($this->input->post('pswny')));
 		$des = $this->M_model->update('admin',$data,$where);
 		if ($des >= 0) {
 		$this->session->sess_destroy();
 		$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Password Berhasil dirubah"));
			redirect(base_url("Login"));	
 		} else {
 			$this->session->set_flashdata("Pesan",$this->Core->alert_succes("Password Gagal di rubah "));
 			redirect(base_url("Profile"));
 		}	
	}
}
