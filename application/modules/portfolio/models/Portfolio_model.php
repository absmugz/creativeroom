<?php

class Portfolio_model extends CI_Model {

function __construct()
    {
        parent::__construct();
    }
    
public function get_all()             
{
       
$this->db->select('*');
$this->db->from('portfolio_items');

$query = $this->db->get();
return $query->result_array();       
}
}