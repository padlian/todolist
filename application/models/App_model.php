<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function get_list(){
		$query = $this->db->get('list');
		return $query->result_array();
	}

	public function simpan_proses(){
		$data=array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'slug' => $this->input->post('slug')
		);
		return $this->db->insert('list', $data);
	}
}