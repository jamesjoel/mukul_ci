<?php

class Adminmod extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function save($data)
	{
		// INSERT 
		$this->db->insert("admin", $data);
	}
	function select_by_username($u)
	{
		//SELECT * FROM user WHERE username='$u'
		$this->db->where('username', $u);
		$obj=$this->db->get('admin');
		return $obj;
	}

	function select_by_id($id)
	{
		$this->db->where("id", $id);
		$obj = $this->db->get("admin");
		return $obj;
	}
	function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('admin', $data);

	}
}


?>