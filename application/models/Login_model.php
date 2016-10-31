<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function login()
	{
		$query = $this->db->get_where('user', array('email' => $this->input->post('email'), 'password' => $this->input->post('password')));

		if($query -> num_rows() == 1)
		{
		 	return $query->row_array();
		}
		else
		{
		 	return false;
		}
	}
}