<?php

    class Pengguna extends Controller {

    public function index(){
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->getAllPengguna();
        $this->view('templates/header', $data);
        $this->view('pengguna/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->getPenggunaById($id);
        $this->view('templates/header', $data);
        $this->view('pengguna/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Pengguna';
        $data['pengguna'] = $this->model('PenggunaModel')->getPenggunaById($id);
        $data['hak_akses'] = $this->model('HakAksesModel')->getAllHakAkses();
        $this->view('templates/header', $data);
        $this->view('pengguna/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Pengguna';  
        $data['hak_akses'] = $this->model('HakAksesModel')->getAllHakAkses();
        $this->view('templates/header', $data);
        $this->view('pengguna/create', $data);
        $this->view('templates/header');
    }

    public function savePengguna(){  
        $nama_pengguna    = $_POST['nama_pengguna'];
        $password    = $_POST['password'];
        $nama_depan    = $_POST['nama_depan'];
        $nama_belakang    = $_POST['nama_belakang'];
        $no_hp    = $_POST['no_hp'];
        $alamat    = $_POST['alamat'];
        $id_akses    = $_POST['id_akses'];
        $data['pengguna'] = $this->model('PenggunaModel')->createPengguna($nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses);
        header('location:../pengguna');
    }

    public function updatePengguna($id){  
        $nama_pengguna    = $_POST['nama_pengguna'];
        $password    = $_POST['password'];
        $nama_depan    = $_POST['nama_depan'];
        $nama_belakang    = $_POST['nama_belakang'];
        $no_hp    = $_POST['no_hp'];
        $alamat    = $_POST['alamat'];
        $id_akses    = $_POST['id_akses'];
        $data['pengguna'] = $this->model('PenggunaModel')->updatePengguna($id, $nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses);
        // return $this->index();
        header('location:../pengguna');
    }

    public function delete($id){
        $data['pengguna'] = $this->model('PenggunaModel')->deletePengguna($id);
        header('location:../../pengguna');
    }
}