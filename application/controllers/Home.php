<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
		if(!$this->session->userdata('status') == 'login'){
			redirect('Login');
		}else{
            $this->load->library('googlemaps1');
            $config=array();
            $config['center']="37.4419, -122.1419";
            $config['zoom']=17;
            $config['map_height']="500px";
            $this->googlemaps1->initialize($config);
            $marker=array();
            $marker['position']="37.4419, -122.1419";
            $this->googlemaps1->add_marker($marker);
            $data['map']=$this->googlemaps1->create_map();
            $this->load->view('v_map',$data);
        }
        // $this->load->view('v_maps');
    }
}
