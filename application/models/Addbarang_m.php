<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Addbarang_m extends CI_Model {

    public function input_barang($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function tampil_barang($tabel, $data)
    {
        $this->db->get($tabel, $data);
    }
}

/* End of file Addbarang_m.php */
