<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class Menu extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->model('MenuModel');
    }
  
	public function index()
	{

	    $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        
        $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if($this->form_validation->run() == false )
        {
          $this->load->view('templates/user_header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('menu/index', $data);
          $this->load->view('templates/user_footer');
        }

        else 
        {
          $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added</div>');
          redirect('menu');
        }

    }

    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->model('MenuModel', 'M3NU');
        $data['submenu'] = $this->M3NU->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if($this->form_validation->run() == false)
        {
          $this->load->view('templates/user_header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('menu/submenu', $data);
          $this->load->view('templates/user_footer');
        }
        else
        {
            $data = [
              'title' => $this->input->post('title'),
              'menu_id' => $this->input->post('menu_id'),
              'url' => $this->input->post('url'),
              'icon' => $this->input->post('icon'),
              'is_active' => $this->input->post('is_active')
            ]; 

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub menu Added</div>');
            redirect('menu/submenu');
        }
    }

    public function inventory()
    {
        $data['title'] = 'Inventory';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/inventory', $data);
        $this->load->view('templates/user_footer');
    }

    public function hapus_menu($m)
    {
      $this->Menu_model->hapusDataMenu($m);
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Menu telah di Banned!</div>');
      redirect('menu');
    }

    public function edit_menu($m)
    {

    }

    public function hapus_submenu($sm)
    {
      $this->Menu_model->hapusDataSubmenu($sm);
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Submenu telah di Banned!</div>');
      redirect('menu/submenu');
    }

}   











