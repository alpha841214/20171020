<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function product()
	{
		$this->load->view('product');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function signup_validation()
	{
		$data = new stdClass();
		$this->load->helper('form');
		$this->load->library('form_validation');
			$username = $this->input->post('username'); //echo $username; echo '<br>';
			$email    = $this->input->post('email');  //echo $email; echo '<br>';
			$password = $this->input->post('password');  //echo $password; echo '<br>';
			if ($this->user_model->create_user($username, $email, $password)) {
				$this->load->view('signupOK', $data);
			} else {
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				$this->load->view('signup');	
				
			}
	}
	public function login()
	{
		$data['msg'] = "";
		$this->load->view('login', $data);
	}
	public function login_validation()
	{
			// set variables from the form
			$username = $this->input->post('username'); //echo $username; echo '<br>';
			$password = $this->input->post('password'); //echo $password; echo '<br>';
			$user_id = $this->user_model->get_user_id($username, $password); 
			if($user_id > 0)
			 {
				// set session user datas
				$_SESSION['user_id']      = (int)$user_id;
				$_SESSION['username']     = (string)$username;
				$_SESSION['logged_in']    = (bool)true;
				// user login ok
				$this->load->view('loginOK',$_SESSION);	
			} else {
				// login failed
				 $this->session->set_flashdata('error', 'Invalid Username or Password');
				// send error to the view
				$this->load->view('login');				
			}
	}
}

