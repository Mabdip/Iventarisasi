<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('status') != 'login') 
        {
            redirect(site_url('login'));
        }
        $this->load->model('addbarang_m');
        $this->load->model('barang_m');
        $this->load->library('pagination');
    }
    
    public function index()
    {
        $data['judul'] = 'Admin | Iventaris';
        $data['content'] = 'main/main';
        $this->load->view('main/template/layout', $data);
    }

    function barang()
    {
        $data['judul'] = 'Barang';
        $data['content'] = 'main/add_barang';
        $this->load->view('main/template/layout', $data);
    }

    function tampil_barang()
    {
        
        $config['base_url'] = site_url('admin/tampil_barang'); 
        $config['total_rows'] = $this->db->count_all('barang_atk'); 
        $config['per_page'] = 10;  
        $config["uri_segment"] = 3;  
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
       
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        
        $data['data'] = $this->barang_m->ambil_data($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        $data['content'] = 'main/barang';
        $this->load->view('main/template/layout', $data);
    }

    public function add_barang()
    {
        $nama_barang = $this->input->post('nama_barang');
        $jenis_barang = $this->input->post('jenis_barang');
        $satuan      = $this->input->post('satuan');
        $harga       = $this->input->post('harga');
        $jumlah_persediaan    = $this->input->post('jumlah_persediaan');
        $nilai_persediaan     = $this->input->post('nilai_persediaan');
        $jumlah_pembelian1    = $this->input->post('jumlah_pembelian1');
        $nilai_pembelian1     = $this->input->post('nilai_pembelian1');
        $jumlah_pembelian2    = $this->input->post('jumlah_pembelian2');
        $nilai_pembelian2     = $this->input->post('nilai_pembelian2');
        $jumlah_pembelian3    = $this->input->post('jumlah_pembelian3');
        $nilai_pembelian3     = $this->input->post('nilai_pembelian3');
        $jumlah_total    = $this->input->post('jumlah_total');
        $nilai_total     = $this->input->post('nilai_total');

        $data = array('nama_barang' => $nama_barang,
                      'jenis_barang' => $jenis_barang,
                      'satuan' => $satuan,
                      'harga' => $harga,
                      'jumlah_persediaan' => $jumlah_persediaan,
                      'nilai_persediaan' => $nilai_persediaan,
                      'jumlah_pembelian1' => $jumlah_pembelian1,
                      'nilai_pembelian1' => $nilai_pembelian1,
                      'jumlah_pembelian2' => $jumlah_pembelian2,
                      'nilai_pembelian2' => $nilai_pembelian2,
                      'jumlah_pembelian3' => $jumlah_pembelian3,
                      'nilai_pembelian3' => $nilai_pembelian3,
                      'jumlah_total' => $jumlah_total,
                      'nilai_total' => $nilai_total );
        $this->addbarang_m->input_barang('barang', $data);
        $this->session->set_flashdata( 'msg', 'Selamat Data berhasil disimpan!!!' );
        redirect(site_url('admin/main'));
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
        
    }
}

/* End of file Admin.php */
