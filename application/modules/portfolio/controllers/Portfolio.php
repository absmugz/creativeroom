<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require(APPPATH.'modules\portfolio\libraries\REST_Controller.php');

class Portfolio extends MX_Controller {
    
public function __construct() {
        parent::__construct();
$this->load->model('actor_model');
$this->load->model('portfolio_model');

    }
	public function index()
	{
		echo 'This is HMVC at work';
                //$portfolios = $this->actor_model->get_all();
                $portfolios = $this->portfolio_model->get_all();
                var_dump($portfolios);die();
                
                
                
	}
        
        	public function test($id)
	{
		echo 'This is HMVC at work';
                //$portfolios = $this->actor_model->get_all();
                $portfolios = $this->portfolio_model->get_one($id);
                var_dump($portfolios);die();
                
                
                
	}
        
      
function portfolios_get()
    {
        // respond with information about several portfolios
    //$portfolios = array (
    //    1=> array('title'=>'dhafie','description'=>'this is dhafie'),
    //    2=> array('title'=>'Aly','description'=>'this is Princess Aly')
    //);
    
     $portfolios = $this->actor_model->get_all();
    
    $this->response($portfolios);
    
    }
 
        
 function portfolio_item_get()
    {
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