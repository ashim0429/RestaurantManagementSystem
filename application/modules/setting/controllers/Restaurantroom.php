<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantroom extends MX_Controller {
    
    public function __construct()
    {
        parent::__construct();
		$this->db->query('SET SESSION sql_mode = ""');
		$this->load->model(array(
			'resroom_model',
			'logs_model'
		));	
    }
 
    
}
