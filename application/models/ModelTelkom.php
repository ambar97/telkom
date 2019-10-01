<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelTelkom extends CI_Model {
 function select_user(){
    $this->db->select('user.*,data_karyawan.*');
          $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = user.idKaryawan');
          $this->db->from('user');
          $data=$this->db->get();
          return $data;
  } 
}