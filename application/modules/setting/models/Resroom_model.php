<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restable_model extends CI_Model {
	
	private $table = 'rest_room';
 
	public function create($data = array())
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

}
