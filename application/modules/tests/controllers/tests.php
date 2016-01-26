<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH.'modules\portfolio\libraries\REST_Controller.php');

class Tests extends MX_Controller {

    public function __construct() {
        parent::__construct();
        
       
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
        
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->view('index');
              

    }
    
    public function upload() {
        
        //echo 'this is a test';
        
        $data = array(
        'uname' => $this->input->post('uname'),
                'pass' => $this->input->post('pass'),
);
        
    
        var_dump($data);
        
    }
    
}