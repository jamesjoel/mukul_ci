<?php

class Usermod extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function save($data)
	{
		// INSERT 
		$this->db->insert("user", $data);
	}
}


?>