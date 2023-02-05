<?php

    class HakAkses extends Controller {

    public function index(){
        $data['title'] = 'Data Hak Akses';
        $data['hakakses'] = $this->model('HakAksesModel')->getAllHakAkses();
        $this->view('templates/header', $data);
        $this->view('hakakses/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Hak Akses';
        $data['hakakses'] = $this->model('HakAksesModel')->getHakAksesById($id);
        $this->view('templates/header', $data);
        $this->view('hakakses/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Hak Akses';
        $data['hakakses'] = $this->model('HakAksesModel')->getHakAksesById($id);
        $this->view('templates/header', $data);
        $this->view('hakakses/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Hak Akses';  
        $this->view('templates/header', $data);
        $this->view('hakakses/create');
        $this->view('templates/header');
    }

    public function saveHakAkses(){  
        $nama_akses    = $_POST['nama_akses'];
        $keterangan    = $_POST['keterangan'];
        $data['hakakses'] = $this->model('HakAksesModel')->createHakAkses($nama_akses, $keterangan);
        header('location:../hakakses');
    }

    public function updateHakAkses($id){  
        $nama_akses    = $_POST['nama_akses'];
        $keterangan    = $_POST['keterangan'];
        $data['hakakses'] = $this->model('HakAksesModel')->updateHakAkses($id, $nama_akses, $keterangan);
        // return $this->index();
        header('location:../hakakses');
    }

    public function delete($id){
        $data['hak_akses'] = $this->model('HakAksesModel')->deleteHakAkses($id);
        header('location:../../hakakses');
    }
}