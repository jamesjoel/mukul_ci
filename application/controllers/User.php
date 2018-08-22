<?php
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
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
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
}

?>