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
               // $portfolios = $this->portfolio_model->get_all();
               // var_dump($portfolios);die();
                
                    $data = array(
               'name' => 'My title 2' ,
               'description' => 'My Name 2 ' ,
               'link' => 'My date 2'
            );

$this->db->insert('portfolio_items', $data); 

$last_id = $this->db->insert_id();




if($last_id){


$array = array(1,2,3);
foreach ($array as $key)
{
   
        $data = array(
        'portfolio_id' => $last_id,
        'categories_id' => $key,
        
    );
        
         
$this->db->insert('portfolio_categories', $data); 
}


    



 var_dump($last_id);die(); 
}
                
                //$portfolios = $this->portfolio_model->get_one($id);
                //var_dump($portfolios);die();
//var_dump($last_id);die();
                
                
                
                
        }
        
  public function test($id)
	{
		echo 'This is HMVC at work';
                //$portfolios = $this->actor_model->get_all();
                
                $data = array(
               'name' => 'My title' ,
               'description' => 'My Name' ,
               'link' => 'My date'
            );

$this->db->insert('portfolio_items', $data); 

$last_id = $this->db->insert_id();

                
                //$portfolios = $this->portfolio_model->get_one($id);
                //var_dump($portfolios);die();
var_dump($last_id);die();
                
                
                
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