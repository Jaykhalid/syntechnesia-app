<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Syntechnesia.com';
		$data['developer'] = 'Jaydane Khalid';
		$data['apps'] = 'Syntechnesia.';
		$this->load->view('templates/indexAtas', $data);
		$this->load->view('landingpage/indexter', $data);
		$this->load->view('templates/indexBawah');
	}

}