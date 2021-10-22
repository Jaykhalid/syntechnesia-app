<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//is_logged_in();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('pengaduanModel');
	}

    public function index()
	{
		$data['title']      = 'Hallo Masyarakat!';
		$data['developer']  = 'Jaydane Khalid';
		$data['apps']       = 'Syntechnesia.';
        $data['user'] 		= $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/sistemAtas', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('masyarakat/index', $data);
		$this->load->view('templates/sistemBawah');
	}
        
    public function registrationMasyarakat()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[masyarakat.username]', ['is_unique' => 'username tersebut telah terdaftar!']);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!',]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

        $this->form_validation->set_rules('domisili', 'Domisili', 'required|trim');

        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[masyarakat.username]', ['is_unique' => 'E-mail yang anda input sudah digunakan!']);

        if ($this->form_validation->run() == false)
        {
            $data['title']     = 'Registrasi Akun';
            $data['apps']      = 'Syntechnesia';
            $data['developer'] = 'Jaydane Khalid';
            $data['Genders']   = $this->db->level_enum('masyarakat', 'jkel');
            $this->load->view('templates/authAtas', $data);
            $this->load->view('auth/registrationMasyarakat', $data);
            $this->load->view('templates/indexBawah');
        } 
        else
        {
            $username = $this->input->post('username', true);
            $Genders  = $this->input->post('jkel');

            $domisili = $this->input->post('domisili');
            $KOTA     = $this->input->post('KOTA');
            $KodePos  = $this->input->post('KodePos');
            $combine  = $domisili . ' ~ ' . $KOTA .' ~ '. $KodePos;

            $data = [
                'nik'          => htmlspecialchars($this->input->post('nik', true)),
                'nama'         => htmlspecialchars($this->input->post('nama', true)),
                'username'     => htmlspecialchars($username),
                'password'     => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'image'        => 'default.png',
                'telp'         => htmlspecialchars($this->input->post('telp', true)),
                'email'        => htmlspecialchars($this->input->post('email', true)),  
                'domisili'     => htmlspecialchars($combine),
                'jkel'         => htmlspecialchars($Genders),
                'role_id'      => 3,
                'is_active'    => 1,
                'date_created' => time()
            ];

            /*siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];*/
            


            $this->db->insert('masyarakat', $data);
            //$this->db->insert('user_token', $user_token);
            //$this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert"> Selamat! &nbsp; Akun anda telah berhasil dibuat. </div>');
            redirect('auth/login');
        }
    }
    
    public function buatLaporanPengaduan()
    {
        $data['user'] 	   = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['title']     = 'Halaman Laporan Pengaduan';
        $data['apps']      = 'Syntechnesia';
        $data['developer'] = 'Jaydane Khalid';
        $data['Status']    = $this->db->level_enum('laporan', 'status');
        $data['Kategori']  = $this->db->level_enum('laporan', 'kategoriLaporan');
        
        $this->load->model('PengaduanModel', 'PM');
    
        $data['pengaduan']	= $this->PM->getLaporan();

        $this->form_validation->set_rules('tglPelaporan', 'TglPelaporan', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('kategoriLaporan', 'kategoriLaporan', 'required');
        $this->form_validation->set_rules('isiLaporan', 'IsiLaporan', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required');
        
        if ($this->form_validation->run() == false)
        {

            $this->load->view('templates/sistemAtas', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('masyarakat/pengaduan', $data);
            $this->load->view('templates/sistemBawah');
        } 
        else
        {
            $Status   = $this->input->post('status');
            $Kategori = $this->input->post('kategoriLaporan');
            $data = [
                'tglPelaporan'      => htmlspecialchars($this->input->post('tglPelaporan', true)),
                'nik'               => htmlspecialchars($this->input->post('nik', true)),
                'kategoriLaporan'   => htmlspecialchars($Kategori),
                'isiLaporan'        => htmlspecialchars($this->input->post('isiLaporan', true)),
                'foto'              => htmlspecialchars($this->input->post('foto', true)),
                'status'            => htmlspecialchars($Status)
            ];

            $this->db->insert('laporan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert"> Selamat! &nbsp; Laporan Pengaduan anda telah berhasil dibuat. </div>');
            redirect('masyarakat/buatLaporanPengaduan');
        }

    }

    public function tanggapan()
    {
        $data['title'] 		= 'Tanggapan';
        $data['apps'] 		= 'Syntechnesia.';
        $data['developer']  = 'Jaydane Khalid';
        //$data['user']   	= $this->db->get_where('petugas', ['role_id' == 2])->row_array();
        $data['user'] 		= $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
    	$data['tanggapan']  = $this->db->get_where('tanggapan', ['nik' => $data['user']['nik']])->result_array();
        /*syntax function controller untuk menampilkan data dari DB ke interface
        $this->load->model('TanggapanModel', 'TM');
        $data['tanggapan']	= $this->TM->getTanggapan(); */

        $this->load->view('templates/sistemAtas', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('masyarakat/tanggapan', $data);
        $this->load->view('templates/sistemBawah');
     
    }

    public function LT($pm, $tm, $m, $p) 
    {
    
		$data['title'] 		= 'Tanggapan';
    	$data['apps'] 		= 'Syntechnesia.';
    	$data['developer'] 	= 'Jaydane Khalid';
    	$data['user']  		= $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
    	$data['laporan']  	= $this->db->get_where('laporan', ['idLaporan' => $pm])->row_array();
    	$data['tanggapan']  = $this->db->get_where('tanggapan', ['idTanggapan' => $tm])->row_array();
    	$data['masyarakat'] = $this->db->get_where('masyarakat', ['nik' => $m])->row_array();
    	$data['petugas'] 	= $this->db->get_where('petugas', ['nip' => $p])->row_array();

    	$this->load->view('templates/sistemAtas', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('masyarakat/LT', $data);
        $this->load->view('templates/sistemBawah');

	}
    
    
    /*private function _sendEmail()
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kakashikhalid173@gmail.com',
            'smtp_pass' => 'jaydane999',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('kakashikhalid173@gmail.com', 'Jaydane Khalid');
        $this->email->to('jaydanekhalid@gmail.com');
        $this->email->subject('Pun10 ngentawd');
        $this->email->message('Samlekom mhamanx!');

        $this->email->send();
    }*/
}