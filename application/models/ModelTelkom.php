<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelTelkom extends CI_Model {
 function select_user(){
    $this->db->select('user.*,data_karyawan.*');
          $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = user.idKaryawan');
          $this->db->from('user');
          $data=$this->db->get();
          return $data;
  }
  function selectrating(){
	$this->db->select('data_rating.*,data_karyawan.*');
	$this->db->join('data_karyawan','data_karyawan.id_karyawan = data_rating.id_karyawan');
	$this->db->from('data_rating');
	return $this->db->get();  	
  } 
  function select_user_where($a,$b){
    $this->db->select('user.*,data_karyawan.*');
          $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = user.idKaryawan');
          $this->db->from('user');
          $this->db->where($a,$b);
          $data=$this->db->get();
          return $data;
  }
}