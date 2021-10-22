<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//is_logged_in();
	}

	public function index()
	{
		$data['title'] 	   = 'Dashboard ENV Admin';
		$data['developer'] = 'Jaydane Khalid';
		$data['apps'] 	   = 'Syntechnesia.';
		$data['user'] 		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/sistemAtas', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/sistemBawah');
	}

	public function generateLaporan()
	{
		$data['title'] 	   = 'Generate Laporan';
		$data['developer'] = 'Jaydane Khalid';
		$data['apps'] 	   = 'Syntechnesia.';
		$data['user'] 	   = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		//syntax function controller untuk menampilkan data dari DB ke interface
		$this->load->model('TanggapanModel', 'TM');
		$data['generate']	= $this->TM->getTanggapan();

		$this->load->view('templates/sistemAtas', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/generateLaporan', $data);
		$this->load->view('templates/sistemBawah');
	}

	public function GL($pm, $tm, $m, $p) 
    {
    
		$data['title'] 		= 'Tanggapi Laporan Valid';
    	$data['apps'] 		= 'Syntechnesia.';
    	$data['developer'] 	= 'Jaydane Khalid';
    	$data['user']  		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
    	$data['laporan']  	= $this->db->get_where('laporan', ['idLaporan' => $pm])->row_array();
    	$data['tanggapan']  = $this->db->get_where('tanggapan', ['idTanggapan' => $tm])->row_array();
    	$data['masyarakat'] = $this->db->get_where('masyarakat', ['nik' => $m])->row_array();
    	$data['petugas'] 	= $this->db->get_where('petugas', ['nip' => $p])->row_array();

    	$this->load->view('templates/sistemAtas', $data);
    	$this->load->view('admin/GL', $data);

	}
}