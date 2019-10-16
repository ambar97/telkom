<?php
class Maps extends CI_Controller{
    function __construct(){
        parent::__construct();
 
    }
    function index(){
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
} ?>