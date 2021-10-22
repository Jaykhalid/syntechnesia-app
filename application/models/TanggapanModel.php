<?php 
 defined('BASEPATH') or exit('No direct script access allowed');

    Class TanggapanModel extends CI_Model 
    {
        public function getTanggapan() {

            $query = "SELECT * FROM `tanggapan` INNER JOIN `laporan` 
                      ON `tanggapan`.`idLaporan` = `laporan`.`idLaporan`
                      INNER JOIN `petugas` ON `tanggapan`.`nip` = `petugas`.`nip`
				      ORDER BY `tanggapan`.`tglTanggapan` DESC
                     ";
		    return $this->db->query($query)->result_array();
        } 

        
        public function generateDataLaporan($tm) 
        {
		    $generate = $this->session->userdata('idTanggapan');
		    $querygenerate = $this->db->get_where('tanggapan', ['idTanggapan' => $generate])->row_array();
		    return $querygenerate;
	    }
    }