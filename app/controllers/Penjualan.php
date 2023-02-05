<?php

    class Penjualan extends Controller {

    public function index(){
        $data['title'] = 'Data Penjualan';
        $data['penjualan'] = $this->model('PenjualanModel')->getAllPenjualan();
        $this->view('templates/header', $data);
        $this->view('penjualan/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Penjualan';
        $data['penjualan'] = $this->model('PenjualanModel')->getPenjualanById($id);
        $this->view('templates/header', $data);
        $this->view('penjualan/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Penjualan';
        $data['penjualan'] = $this->model('PenjualanModel')->getPenjualanById($id);
        $data['barang'] = $this->model('BarangModel')->getAllBarang();
        $data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('penjualan/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Penjualan';  
        $data['barang'] = $this->model('BarangModel')->getAllBarang();
        $data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('penjualan/create', $data);
        $this->view('templates/header');
    }

    public function savePenjualan(){  
        $jumlah_penjualan    = $_POST['jumlah_penjualan'];
        $harga_jual    = $_POST['harga_jual'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $id_barang    = $_POST['id_barang'];
        $id_pelanggan    = $_POST['id_pelanggan'];
        $data['penjualan'] = $this->model('PenjualanModel')->createPenjualan($jumlah_penjualan, $harga_jual, $id_barang, TEMP_ID_USER, $id_pelanggan);
        header('location:../penjualan');
    }

    public function updatePenjualan($id){  
        $jumlah_penjualan    = $_POST['jumlah_penjualan'];
        $harga_jual    = $_POST['harga_jual'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $id_barang    = $_POST['id_barang'];
        $id_pelanggan    = $_POST['id_pelanggan'];
        $data['penjualan'] = $this->model('PenjualanModel')->updatePenjualan($id, $jumlah_penjualan, $harga_jual, $id_barang, TEMP_ID_USER, $id_pelanggan);
        header('location:../penjualan');
    }

    public function delete($id){
        $data['penjualan'] = $this->model('PenjualanModel')->deletePenjualan($id);
        header('location:../../penjualan');
    }
}