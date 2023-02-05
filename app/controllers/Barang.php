<?php

    class Barang extends Controller {

    public function index(){
        $data['title'] = 'Data Barang';
        $data['barang'] = $this->model('BarangModel')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Barang';
        $data['barang'] = $this->model('BarangModel')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Barang';
        $data['barang'] = $this->model('BarangModel')->getBarangById($id);
        $this->view('templates/header', $data);
        $this->view('barang/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Barang';  
        $this->view('templates/header', $data);
        $this->view('barang/create');
        $this->view('templates/header');
    }

    public function saveBarang(){  
        $nama_barang    = $_POST['nama_barang'];
        $keterangan    = $_POST['keterangan'];
        $satuan    = $_POST['satuan'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $data['barang'] = $this->model('BarangModel')->createBarang($nama_barang, $keterangan, $satuan, TEMP_ID_USER);
        header('location:../barang');
    }

    public function updateBarang($id){  
        $nama_barang    = $_POST['nama_barang'];
        $keterangan    = $_POST['keterangan'];
        $satuan    = $_POST['satuan'];
        // $id_pengguna    = $_POST['id_pengguna'];
        $data['barang'] = $this->model('BarangModel')->updateBarang($id, $nama_barang, $keterangan, $satuan, TEMP_ID_USER);
        // return $this->index();
        header('location:../barang');
    }

    public function delete($id){
        $data['barang'] = $this->model('BarangModel')->deleteBarang($id);
        header('location:../../barang');
    }
}