<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_server extends MX_Controller {

    public function index()
    {
        $this->load->helper('url');

        $this->load->view('rest_server');
    }
}
