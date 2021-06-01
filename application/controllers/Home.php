<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function package()
	{
		$data['packages'] = $this->db->get('package')->result_array();

		$this->load->view('templates/header');
		$this->load->view('home/package', $data);
		$this->load->view('templates/footer');
	}
}
