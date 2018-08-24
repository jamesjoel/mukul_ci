<?php
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model('usermod');
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("user_logged_in")){
			redirect("home");
		}
	}
	function index()
	{
		$this->load->view('header');
		$this->load->view('dash');
	}
	function profile()
	{
		$id= $this->session->userdata("id");
		$obj=$this->usermod->select_by_id($id);
		$pagedata=array("a"=>$obj);


		$this->load->view('header');
		$this->load->view('profile', $pagedata);	
	}
	function edit()
	{
		$id= $this->session->userdata("id");
		$obj=$this->usermod->select_by_id($id);
		$pagedata=array("a"=>$obj);


		$this->load->view('header');
		$this->load->view('edit', $pagedata);	
	}
	function update()
	{
		$data["full_name"] = $this->input->post("full_name");
		$data["address"] = $this->input->post("address");
		$data["city"] = $this->input->post("city");
		$data["gender"] = $this->input->post("gender");
		$data["contact"] = $this->input->post("contact");
		$id = $this->session->userdata("id");
		$this->usermod->update($id, $data);
		redirect("user/profile");

	}
	function change_pass()
	{
		$this->load->view('header');
		$this->load->view('change_pass');		
	}
	function update_pass()
	{
		$n_pass = $this->input->post('n_pass');
		$c_pass = $this->input->post('c_pass');
		$cn_pass = $this->input->post('cn_pass');
		
		$id = $this->session->userdata("id");
		$obj=$this->usermod->select_by_id($id);
		$data=$obj->row_array();
		if($data['password']==md5($c_pass))
		{
			if($n_pass == $cn_pass)
			{
				$arr = array("password"=>md5($n_pass));
				$this->usermod->update($id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg", "Pls Check Confirm Password");
				redirect("user/change_pass");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "The Current Password Not Matched");
			redirect("user/change_pass");
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
}

?>