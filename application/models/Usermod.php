<?php

class Usermod extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function save($data)
	{
		$this->db->insert("user", $data);
	}
	function select_all()
	{
		$obj=$this->db->get("user");
		return $obj;
	}
	function select_by_username($u)
	{
		$this->db->where('username', $u);
		$obj=$this->db->get('user');
		return $obj;
	}

	function select_by_id($id)
	{
		$this->db->where("id", $id);
		$obj = $this->db->get("user");
		return $obj;
	}
	function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);

	}
}


?>