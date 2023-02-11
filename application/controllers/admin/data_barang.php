<?php

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_mkn = $this->input->post('nama_mkn');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_mkn'      =>  $nama_mkn,
            'keterangan'    =>  $keterangan,
            'kategori'      =>  $kategori,
            'harga'         =>  $harga,
            'stok'          =>  $stok,
            'gambar'        =>  $gambar
        );
        $this->model_makanan->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where = array('id_mkn' => $id);
        $data['makanan'] = $this->model_makanan->edit_makanan($where, 'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_makanan', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_mkn');
        $nama_mkn = $this->input->post('nama_mkn');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data = array(
            'nama_mkn' => $nama_mkn,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
        );
        $where = array(
            'id_mkn' => $id
        );
        $this->model_makanan->update_data($where, $data, 'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function hapus($id)
    {
        $where = array('id_mkn' => $id);
        $this->model_makanan->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang/index');
    }
}
