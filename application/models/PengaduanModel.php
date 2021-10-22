<?php 
 defined('BASEPATH') or exit('No direct script access allowed');

    Class PengaduanModel extends CI_Model 
    {
        public function getLaporan() 
        {

            $queryLaporan = "SELECT * FROM `laporan` INNER JOIN `masyarakat` 
                             ON `laporan`.`nik` = `masyarakat`.`nik`
				            ";
		    return $this->db->query($queryLaporan)->result_array();
        } 

        public function validasiDataLaporan($pm) 
        {
		    $validasi = $this->session->userdata('idLaporan');
		    $queryValidasi = $this->db->get_where('laporan', ['idLaporan' => $validasi])->row_array();
		    return $queryValidasi;
	    }
        
        public function hapusDataLaporan($pm) 
        {
            $this->db->where('idLaporan', $pm);
            $this->db->delete('laporan');
        } 
    }
    
    // SELECT column_names FROM table1 JOIN table2 ON column1(pk) = column2(fk) WHERE condition;
    /* Dokumentasi Syntax SQL JOIN
        $nik = $this->session->userdata('nik');
        $queryLaporan = "SELECT    `masyarakat`.`nik`, `kategorilaporan`.`kategori`
                         FROM      `masyarakat`, `kategorilaporan` JOIN `laporan` 
                         ON        `masyarakat`.`nik`, `kategorilaporan`.`idKategori` = `laporan`.`nik`, `laporan`.`kategoriLaporan`
                         WHERE     `laporan`.`nik` = $nik
                         ORDER BY  `laporan`.`tglPelaporan` DESC
                        ";
        $laporan = $this->db->query($queryLaporan)->result_array();
    */
?>

