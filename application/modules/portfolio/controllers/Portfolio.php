<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH.'modules\portfolio\libraries\REST_Controller.php');

class Portfolio extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('actor_model');
       
        $this->load->model('portfolio_model', 'portfolio');
        $this->load->model('categories_model', 'categories');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
        
        $this->load->library('form_validation');
    }

    public function index() {


        echo 'This is HMVC at work';

        $categories_dropdown = $this->categories->get_all();
        //$portfolios = $this->actor_model->get_all();
        // $portfolios = $this->portfolio_model->get_all();
        // var_dump($portfolios);die();

        $data = array(
            'name' => 'My title 2',
            'description' => 'My Name 2 ',
            'link' => 'My date 2'
        );

        $this->db->insert('portfolio_items', $data);

        $last_id = $this->db->insert_id();

        if ($last_id) {


            $array = array(1, 2, 3);
            foreach ($array as $key) {

                $data = array(
                    'portfolio_id' => $last_id,
                    'categories_id' => $key,
                );


                $this->db->insert('portfolio_categories', $data);
            }






            var_dump($last_id);
            die();
        }

        //$portfolios = $this->portfolio_model->get_one($id);
        //var_dump($portfolios);die();
//var_dump($last_id);die();
    }

    public function add() {

        $data['categories_dropdown'] = $this->categories->get_all();

        //$this->form_validation->set_rules('category', 'category', 'required');			
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $this->load->view('portfolio_item/add', $data);
        } else { // passed validation proceed to post success logic
            // build array for the model

         

            $this->portfolio->insert(array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'link' => $this->input->post('link'),
            ));
            // run insert model to write data to db
            $last_id = $this->db->insert_id();

            if ($last_id) {
//$array = array(1,2,3);
                $array = $this->input->post('categories[]');
                //var_dump($array);die();
                foreach ($array as $key) {
                    $data = array(
                        'portfolio_id' => $last_id,
                        'categories_id' => $key,
                    );

                    $this->db->insert('portfolio_categories', $data);
                }

               
            }
        }
    }

    public function test($id) {
        echo 'This is HMVC at work';
        //$portfolios = $this->actor_model->get_all();

        $data = array(
            'name' => 'My title',
            'description' => 'My Name',
            'link' => 'My date'
        );

        $this->db->insert('portfolio_items', $data);

        $last_id = $this->db->insert_id();


        //$portfolios = $this->portfolio_model->get_one($id);
        //var_dump($portfolios);die();
        var_dump($last_id);
        die();
    }

    function portfolios_get() {
        // respond with information about several portfolios
        //$portfolios = array (
        //    1=> array('title'=>'dhafie','description'=>'this is dhafie'),
        //    2=> array('title'=>'Aly','description'=>'this is Princess Aly')
        //);

        $portfolios = $this->actor_model->get_all();

        $this->response($portfolios);
    }

    function portfolio_item_get() {
        // respond with information about a item
        $id = $this->uri->segment(3);
        //$portfolios = array (
        //    1=> array('title'=>'dhafie','description'=>'this is dhafie'),
        //    2=> array('title'=>'Aly','description'=>'this is Princess Aly')
        //);

        $portfolio = $this->actor_model->get($id);

        $this->response($portfolio);
    }

}
