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
			'judul' => $this->input->post('todolist'),
			'deskripsi' => $this->input->post('description')
		);
		return $this->db->insert('list', $data);
	}

	public function hapus_proses($id){
		return $this->db->delete('list', array('id_list'=> $id));
	}
}