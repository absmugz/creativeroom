<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'modules\portfolio\libraries\REST_Controller.php');

class Portfolio extends Rest_Controller {
    
public function __construct() {
        parent::__construct();
$this->load->model('actor_model');

    }
	public function index()
	{
		echo 'This is HMVC at work';
                
                
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