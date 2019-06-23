<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_m extends CI_Model {

    public function ambil_data($jumlah, $mulai)
    {
        $query = $this->db->get('barang_atk', $jumlah, $mulai);
        return $query;
    }

}

/* End of file Barang_m.php */
