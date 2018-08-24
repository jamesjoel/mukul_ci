<?php

class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
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

	function auth()
	{
		// print_r($this->input->post());
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$this->load->model('usermod');
		$obj=$this->usermod->select_by_username($u);
		// print_r($this->input->post());
		// die;
		// echo $obj->num_rows();die;
		if($obj->num_rows()==1)
		{
			$data = $obj->row_array(); 
			// print_r($data);die;
			// mysqli_fetch_assoc
			if($data['password']==md5($p))
			{
				$this->session->set_userdata("user_logged_in", true);
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("full_name", $data['full_name']);
				redirect('user');
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password incorrect");
				redirect("home/login");	
			}
		}
		else
		{
			//$_SESSION['msg']="sdsdfg sdf dsg";
			$this->session->set_flashdata("msg", "This Username and Password incorrect");
			redirect("home/login");
		}
	}







	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

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