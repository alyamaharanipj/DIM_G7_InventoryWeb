<?php

    class Pelanggan extends Controller {

    public function index(){
        $data['title'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->model('PelangganModel')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Pelanggan';
        $data['pelanggan'] = $this->model('PelangganModel')->getPelangganById($id);
        $this->view('templates/header', $data);
        $this->view('pelanggan/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Pelanggan';
        $data['pelanggan'] = $this->model('PelangganModel')->getPelangganById($id);
        $this->view('templates/header', $data);
        $this->view('pelanggan/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Pelanggan';  
        $this->view('templates/header', $data);
        $this->view('pelanggan/create');
        $this->view('templates/header');
    }

    public function savePelanggan(){  
        $nama_pelanggan    = $_POST['nama_pelanggan'];
        $email    = $_POST['email'];
        $no_hp    = $_POST['no_hp'];
        $jenis_kelamin    = $_POST['jenis_kelamin'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $alamat    = $_POST['alamat'];
        $data['pelanggan'] = $this->model('PelangganModel')->createPelanggan($nama_pelanggan, $email, $no_hp, $jenis_kelamin, $tgl_lahir, $alamat);
        header('location:../pelanggan');
    }

    public function updatePelanggan($id){  
        $nama_pelanggan    = $_POST['nama_pelanggan'];
        $email    = $_POST['email'];
        $no_hp    = $_POST['no_hp'];
        $jenis_kelamin    = $_POST['jenis_kelamin'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $alamat    = $_POST['alamat'];
        $data['pelanggan'] = $this->model('PelangganModel')->updatePelanggan($id, $nama_pelanggan, $email, $no_hp, $jenis_kelamin, $tgl_lahir, $alamat);
        header('location:../pelanggan');
    }

    public function delete($id){
        $data['pelanggan'] = $this->model('PelangganModel')->deletePelanggan($id);
        header('location:../../pelanggan');
    }
}