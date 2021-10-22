<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('user_agent');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false)
        {
            $data['title']     = 'Login';
            $data['apps']      = 'Syntechnesia.';
            $data['developer'] = 'Jaydane Khalid';
            $this->load->view('templates/authAtas', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/indexBawah');
        } 
        else
        {
            //validasinya success
            $this->_login();
        }

    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        
        $userB = $this->db->get_where('masyarakat', ['username' => $username], ['role_id' => 3])->row_array();
        $userA = $this->db->get_where('petugas', ['username' => $username], ['role_id' => 1 || 2])->row_array();
        $user  = $userA || $userB;
        
        //jika usernya ada
        if ($userA || $userB)
        {
            //jika usernya aktif
            if ($userA || $userB['is_active'] == 1)
            {
                //cek password
                if (password_verify($password, $userA['password']) || password_verify($password, $userB['password']))
                {
                    if ($userA['role_id'] == 1)
                    {
                        $data = [
                            'username' => $userA['username'],
                            'role_id'  => $userA['role_id']
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin');    
                    }
                    elseif ($userA['role_id'] == 2)
                    {
                        $data = [
                            'username' => $userA['username'],
                            'role_id'  => $userA['role_id']
                        ];
                        $this->session->set_userdata($data);
                        redirect('petugas'); 
                    }
                    else {
                        $data = [
                            'username' => $userB['username'],
                            'role_id'  => $userB['role_id']
                        ];
                        $this->session->set_userdata($data);
                        redirect('masyarakat');
                    }

                } 
                else
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah! </div>');
                    redirect('auth/login');
                }

            } 
            else 
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun ini belum diverifikasi ! </div>');
                redirect('auth/login');
            }

        } 
        else 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"> Akun tidak ditemukan ! </div>');
            redirect('auth/login');
        }

    }

    public function registrationPetugas()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', ['is_unique' => 'Username tersebut telah terdaftar!']);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!',]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[petugas.email]', ['is_unique' => 'E-mail yang anda input sudah digunakan!']);
        $this->form_validation->set_rules('level', 'Level', 'required|trim');

        if ($this->form_validation->run() == false)
        {
            $data['title']     = 'Registrasi Akun Petugas';
            $data['apps']      = 'Syntechnesia';
            $data['developer'] = 'Jaydane Khalid';
            $data['Levels']    = $this->db->level_enum('petugas','level');
            $this->load->view('templates/authAtas', $data);
            $this->load->view('auth/registrationPetugas', $data);
            $this->load->view('templates/indexBawah');
        } 
        else
        {
            $Levels     = $this->input->post('level', true);
            $role_id    = $this->input->post('role_id', true);
            if ($Levels == 'admin') {
                $this->input->post('role_id', $role_id = 1);
            }
            else {
                $this->input->post('role_id', $role_id = 2);
            }

            $username = $this->input->post('username', true);
            $data = [
                'nip'              => htmlspecialchars($this->input->post('nip', true)),
                'nama'             => htmlspecialchars($this->input->post('nama', true)),
                'username'         => htmlspecialchars($username),
                'password'         => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'image'            => 'officer.png',
                'telp'             => htmlspecialchars($this->input->post('telp', true)),
                'email'            => htmlspecialchars($this->input->post('email', true)),
                'level'            => htmlspecialchars($Levels),
                'role_id'          => htmlspecialchars($role_id),
                'is_active'        => 1,
                'date_created'     => time()
            ];

            /*siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];*/
            


            $this->db->insert('petugas', $data);
            //$this->db->insert('user_token', $user_token);
            //$this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert"> Selamat! Akun anda telah berhasil dibuat. </div>');
            redirect('auth/login');
        }
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

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert"> You have been logout! </div>');
        redirect('auth/login');
    }

    public function blocked()
    {
        echo 'awokawokawok access denied!';
    }

/*    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changepassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Account activation failed! Wrong token. </div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Account activation failed! Wrong email. </div>');
            redirect('auth/login');
        }
    }

    public function changepassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect();
        }
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat password', 'trim|required|min_length[3]matches[password1 ]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Passwrod';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');
        } else {

            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->user_data('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password has been changed! Please login. </div>');
            redirect('auth/login');
        }
    }*/
}
