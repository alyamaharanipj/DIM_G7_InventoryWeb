<?php

    class Pembelian extends Controller {

    public function index(){
        $data['title'] = 'Data Pembelian';
        $data['pembelian'] = $this->model('PembelianModel')->getAllPembelian();
        $this->view('templates/header', $data);
        $this->view('pembelian/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Pembelian';
        $data['pembelian'] = $this->model('PembelianModel')->getPembelianById($id);
        $this->view('templates/header', $data);
        $this->view('pembelian/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Pembelian';
        $data['pembelian'] = $this->model('PembelianModel')->getPembelianById($id);
        $data['barang'] = $this->model('BarangModel')->getAllBarang();
        $data['supplier'] = $this->model('SupplierModel')->getAllSupplier();
        $this->view('templates/header', $data);
        $this->view('pembelian/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Pembelian';  
        $data['barang'] = $this->model('BarangModel')->getAllBarang();
        $data['supplier'] = $this->model('SupplierModel')->getAllSupplier();
        $this->view('templates/header', $data);
        $this->view('pembelian/create', $data);
        $this->view('templates/header');
    }

    public function savePembelian(){  
        $jumlah_pembelian    = $_POST['jumlah_pembelian'];
        $harga_beli    = $_POST['harga_beli'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $id_barang    = $_POST['id_barang'];
        $id_supplier    = $_POST['id_supplier'];
        $data['pembelian'] = $this->model('PembelianModel')->createPembelian($jumlah_pembelian, $harga_beli, TEMP_ID_USER, $id_barang, $id_supplier);
        header('location:../pembelian');
    }

    public function updatePembelian($id){  
        $jumlah_pembelian    = $_POST['jumlah_pembelian'];
        $harga_beli    = $_POST['harga_beli'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $id_barang    = $_POST['id_barang'];
        $id_supplier    = $_POST['id_supplier'];
        $data['pembelian'] = $this->model('PembelianModel')->updatePembelian($id, $jumlah_pembelian, $harga_beli, TEMP_ID_USER, $id_barang, $id_supplier);
        header('location:../pembelian');
    }

    public function delete($id){
        $data['pembelian'] = $this->model('PembelianModel')->deletePembelian($id);
        header('location:../../pembelian');
    }
}