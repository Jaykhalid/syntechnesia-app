<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
    {
      parent::__construct();
		$this->load->library('form_validation');
    	$this->load->helper('url');
    	$this->load->library('user_agent');
		$this->load->model('PengaduanModel');
    	//	is_logged_in();
    }

	public function index()
	{
		$data['title'] 		= 'Dashboard ENV Petugas';
		$data['developer']  = 'Jaydane Khalid';
		$data['apps'] 		= 'Syntechnesia.';
        //$data['user']   	= $this->db->get_where('petugas', ['role_id' == 2])->row_array();
		$data['user'] 		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
  
		$this->load->view('templates/sistemAtas', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
		$this->load->view('petugas/index', $data);
		$this->load->view('templates/sistemBawah');
	}
	
	public function vvlp()
	{
		$data['title'] 		= 'Validasi & Verifikasi Laporan Pengaduan';
		$data['apps'] 		= 'Syntechnesia.';
		$data['developer']  = 'Jaydane Khalid';
        //$data['user']   	= $this->db->get_where('petugas', ['role_id' == 2])->row_array();
		$data['user'] 		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		//syntax function controller untuk menampilkan data dari DB ke interface
		$this->load->model('PengaduanModel', 'PM');
		$data['pengaduan']	= $this->PM->getLaporan();

        $this->load->view('templates/sistemAtas', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('petugas/validasiLaporan', $data);
        $this->load->view('templates/sistemBawah');
     
	}

	public function validasiLaporan($pm) 
    {
      $data['title'] 		= 'Tanggapi Laporan Valid';
      $data['apps'] 		= 'Syntechnesia.';
      $data['developer'] 	= 'Jaydane Khalid';
      $data['user']  		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
      $data['laporan']  	= $this->db->get_where('laporan', ['idLaporan' => $pm])->row_array();

	  $this->load->model('pengaduanModel', 'PM');
	  $data['pengaduan'] = $this->PM->getLaporan();

	  $this->form_validation->set_rules('tglTanggapan', 'tglTanggapan', 'required');
	  $this->form_validation->set_rules('idLaporan', 'idLaporan', 'required|trim');
	  $this->form_validation->set_rules('tanggapan', 'tanggapan', 'required');
	  $this->form_validation->set_rules('nip', 'nip', 'required');

		if ($this->form_validation->run() == false)
    	{
    	  $this->load->view('templates/sistemAtas', $data);
    	  $this->load->view('templates/sidebar', $data);
    	  $this->load->view('templates/topbar', $data);
    	  $this->load->view('petugas/tanggapi', $data);
    	  $this->load->view('templates/sistemBawah');
    	}
		else {
			$data = [
                'tglTanggapan'      => htmlspecialchars($this->input->post('tglTanggapan', true)),
                'idLaporan'         => htmlspecialchars($this->input->post('idLaporan', true)),
                'tanggapan'   	    => htmlspecialchars($this->input->post('tanggapan')),
                'nip'        		=> htmlspecialchars($this->input->post('nip', true)),
            ];

            $this->db->insert('tanggapan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert"> Kerja Bagus! &nbsp; Tanggapan anda terhadap Laporan Pengaduan #'. $pm . ' telah berhasil dikirim. </div>');
            //ini solusi dari bug kasus ori nya => redirect('petugas/validasiLaporan/'.$pm);
            redirect('petugas/vvlp');

		}
	}

	public function validasiLaporanIndex() {
		$data['title'] 		= 'Tanggapi Laporan Valid';
      	$data['apps'] 		= 'Syntechnesia.';
      	$data['developer'] 	= 'Jaydane Khalid';
      	$data['user']  		= $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/sistemAtas', $data);
    	$this->load->view('templates/sidebar', $data);
    	$this->load->view('templates/topbar', $data);
    	$this->load->view('petugas/tanggapindex', $data);
    	$this->load->view('templates/sistemBawah');
	}

	public function hapusLaporan($pm)
	{
	  $this->PengaduanModel->hapusDataLaporan($pm);
	  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Laporan telah dihapus!</div>');
	  redirect('petugas/vvlp');
	}

}