<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class MenuModel extends CI_Model 
{

	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				  FROM `user_sub_menu` JOIN `user_menu`
				  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
				";
		return $this->db->query($query)->result_array();
	}

    /* Ini Method CREATE Dummy 
	public function tambahDataMahasiswa()
	{
		$data = [
					"nama"    => $this->input->post('nama', true),
					"nrp"     => $this->input->post('nrp', true),
					"email"   => $this->input->post('email', true),
					"jurusan" => $this->input->post('jurusan', true)
				];

	}*/

	public function hapusDataMenu($m)
	{
		
		$this->db->where('menu', $m);
		$this->db->delete('user_menu');
	}

	public function editMenu($m)
	{
		$menu      = $this->session->userdata('menu');
		$queryMenu = $this->db->get_where('user_menu', ['menu' => $menu])->row_array();
		return $query;
	}

	public function hapusDataSubmenu($sm)
	{
		
		$this->db->where('title', $sm);
		$this->db->delete('user_sub_menu');
	}

}
