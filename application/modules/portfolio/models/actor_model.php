<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customers
 *
 * @author Dhafie
 */


class Actor_model extends MY_Model
{
public $_table = 'Portfolio_items';
public $primary_key = 'portfolio_id';

public function Example()
{
$this->db->select('*');
$this->db->from($_table);
$this->db->join('Portfolio_categories', 'Portfolio_categories.portfolio_id = Portfolio_categories.categories_id');
$query = $this->db->get();
}

}
