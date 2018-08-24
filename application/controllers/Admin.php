<?php

class Admin extends CI_Controller{

	function __construct()
	{
		parent :: __construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("adminmod");
		$this->load->model("usermod");
	}
	function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_login');

	}
	function backdoor()
	{
		if(! $this->session->userdata("admin_logged_in"))
		{
			redirect("home");
		}
	}
	function dash()
	{
		$this->backdoor();
		$obj=$this->usermod->select_all();
		$data=array("all"=>$obj);

		$this->load->view('admin_header');
		$this->load->view('admin_dash', $data);		
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function auth()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$obj=$this->adminmod->select_by_username($u);
		if($obj->num_rows()==1)
		{
			$data = $obj->row_array(); 
			if($data['password']==$p)
			{
				$this->session->set_userdata("admin_logged_in", true);
				redirect('admin/dash');
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password incorrect");
				redirect("admin");	
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username and Password incorrect");
			redirect("admin");
		}
	}
}

?>