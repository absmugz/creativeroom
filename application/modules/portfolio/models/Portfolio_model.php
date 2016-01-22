<?php

class Portfolio_model extends MY_Model {
    
     public $_table = 'portfolio_items';
/**
function __construct()
    {
        parent::__construct();
    }
    
public function get_all()             
{
 
$this->db->select('*');
$this->db->from('portfolio_items');
$this->db->join('portfolio_categories', 'portfolio_categories.portfolio_id = portfolio_items.portfolio_id ');
$this->db->join('categories', 'categories.categories_id = portfolio_categories.categories_id');
 
$query = $this->db->get();
return $query->result_array();       
}

public function get_one($id)             
{
 
$this->db->select('*');
$this->db->from('portfolio_items');
$this->db->join('portfolio_categories', 'portfolio_categories.portfolio_id = portfolio_items.portfolio_id ');
$this->db->join('categories', 'categories.categories_id = portfolio_categories.categories_id');
$this->db->where('portfolio_items.portfolio_id', $id); 

$query = $this->db->get();
return $query->result_array();       
}


public function get_news($id = FALSE)
{
    
if ($id === FALSE)
        {
$this->db->select('*');
$this->db->from('portfolio_items');
$this->db->join('portfolio_categories', 'portfolio_categories.portfolio_id = portfolio_items.portfolio_id ');
$this->db->join('categories', 'categories.categories_id = portfolio_categories.categories_id');
//$this->db->where('portfolio_items.portfolio_id',$slug); // Set Filter
$this->db->where('portfolio_items.portfolio_id', $id); 

$query = $this->db->get();
return $query->result_array(); 
}
      

$this->db->select('*');
$this->db->from('portfolio_items');
$this->db->join('portfolio_categories', 'portfolio_categories.portfolio_id = portfolio_items.portfolio_id ');
$this->db->join('categories', 'categories.categories_id = portfolio_categories.categories_id');

$query = $this->db->get();
return $query->result_array(); 
}**/
}