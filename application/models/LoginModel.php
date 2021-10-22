<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->('form validation');
    $this->load->('url');
  }


  public function view()
  {
    return $this->db->get('user')->result();
  }

  
  // Fungsi untuk menampilkan data user berdasarkan id nya
  public function view_by($idUser)
  {
    $this->db->where('idUser', $idUser);
    return $this->db->get('user')->row();
  }


  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data user saja
    if($mode == "save") 
    {
      $this->form_validation->set_rules('input_id', 'idUser', 'required|trim'); 
      $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
      $this->form_validation->set_rules('input_username', 'Username', 'trim|required|valid_username|is_unique[user.username]');
      $this->form_validation->set_rules('input_password', 'Password', 'required');
    }

    if($this->form_validation->run())
    { // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
     else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }
  
    // Fungsi untuk melakukan simpan data ke tabel user
    public function save()
    {
      $data = array[
      "idUser"       => $this->input->post('input_id'),
      "Nama"         => $this->input->post('input_nama'),
      "Username"     => $this->input->post('input_username'),
      "Password"     => $this->input->post('input_password'),
      "date_created" => time()
      ];
    
      $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
    }
  
    
    // Fungsi untuk melakukan ubah data user berdasarkan id user
    public function edit($idUser)
    {
      $data = array[
        "Name"     => $this->input->post('input_name'),
        "Username" => $this->input->post('input_email'),
        "Password" => $this->input->post('input_password')
      ];
    
      $this->db->where('idUser', $idUser);
      $this->db->update('user', $data); // Untuk mengeksekusi perintah update data
    }
  
    // Fungsi untuk melakukan menghapus data user berdasarkan id user
    public function delete($idUser)
    {
      $this->db->where('idUser', $idUser);
      $this->db->delete('user'); // Untuk mengeksekusi perintah delete data
    }
  }




}