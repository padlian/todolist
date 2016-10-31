<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('login');
	}

	public function proses()
	{
		$result = $this->login_model->login();
		if ($result) {
			$newdata = array(
			        'username'  => $result['username'],
			        'email'     => $result['email'],
			        'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);
		}

		//echo $this->session->userdata('username');
		//redirect('list');

	}

	public function logout(){
		//$this->session->unset_userdata('some_name');

		$array_items = array('username', 'email', 'logged_in');

		$this->session->unset_userdata($array_items);
		redirect('login');
	}
}
