<?php

class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}



	function index()
	{

		$this->load->view('header');	
		$this->load->view('home');	
	}
	function login()
	{

		$this->load->view('header');	
		$this->load->view('login');	
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("contact", "Contact", "required");
		if($this->form_validation->run()==false)
		{

			$this->load->view('header');	
			$this->load->view('signup');	
		}
		else
		{
			// $a = $_POST['full_name'];
			$data["full_name"] = $this->input->post("full_name");
			$data["username"] = $this->input->post("username");
			$p = md5($this->input->post("password"));
			$data["password"] = $p;
			$data["address"] = $this->input->post("address");
			$data["city"] = $this->input->post("city");
			$data["gender"] = $this->input->post("gender");
			$data["contact"] = $this->input->post("contact");


			$this->load->model("usermod");
			$this->usermod->save($data);
			redirect("home/login");
			//header("location: ....");

		}
	}
	
}

?>