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
	function select_by_username($u)
	{
		//SELECT * FROM user WHERE username='$u'
		$this->db->where('username', $u);
		$obj=$this->db->get('user');
		return $obj;
	}
}


?>