<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('app_model');
	}

	public function index()
	{
		$this->load->helper('form');
		$data['list']=$this->app_model->get_list();
		$this->load->view('frontend', $data);
	}

	public function data_json()
	{
		$this->load->view('depan');
	}

	public function get_json()
	{
		$data['list']=$this->app_model->get_list();
		$this->load->view('get_json', $data);
	}

	public function get_list()
	{
		$data['list']=$this->app_model->get_list();
		$this->load->view('get_list', $data);
	}

	public function proses(){
		$this->app_model->simpan_proses();
		redirect('');
	}

	public function proses_ajax(){
		$this->app_model->simpan_proses();
	}


}
