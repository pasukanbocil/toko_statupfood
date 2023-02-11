<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_keranjang($id)
    {
        $makanan = $this->model_makanan->find($id);
        $data = array(
            'id'    => $makanan->id_mkn,
            'qty'   => 1,
            'price' => $makanan->harga,
            'name'  => $makanan->nama_mkn

        );
        $this->cart->insert($data);
        redirect('dashboard');
    }
}
