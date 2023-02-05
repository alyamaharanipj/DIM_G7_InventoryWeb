<?php

    class Supplier extends Controller {

    public function index(){
        $data['title'] = 'Data Supplier';
        $data['supplier'] = $this->model('SupplierModel')->getAllSupplier();
        $this->view('templates/header', $data);
        $this->view('supplier/index', $data);
        $this->view('templates/header');
    }

    public function detail($id){
        $data['title'] = 'Detail Supplier';
        $data['supplier'] = $this->model('SupplierModel')->getSupplierById($id);
        $this->view('templates/header', $data);
        $this->view('supplier/detail', $data);
        $this->view('templates/header');
    }

    public function edit($id){
        $data['title'] = 'Detail Supplier';
        $data['supplier'] = $this->model('SupplierModel')->getSupplierById($id);
        $this->view('templates/header', $data);
        $this->view('supplier/edit', $data);
        $this->view('templates/header');
    }

    public function create(){
        $data['title'] = 'Tambah Supplier';  
        $this->view('templates/header', $data);
        $this->view('supplier/create');
        $this->view('templates/header');
    }

    public function saveSupplier(){  
        $nama_supplier  = $_POST['nama_supplier'];
        $email          = $_POST['email'];
        $no_hp          = $_POST['no_hp'];
        $alamat         = $_POST['alamat'];
        $data['supplier'] = $this->model('SupplierModel')->createSupplier($nama_supplier, $email, $no_hp, $alamat);
        header('location:../supplier');
    }

    public function updateSupplier($id){  
        $nama_supplier    = $_POST['nama_supplier'];
        $email    = $_POST['email'];
        $no_hp    = $_POST['no_hp'];
        $alamat    = $_POST['alamat'];
        $data['supplier'] = $this->model('SupplierModel')->updateSupplier($id, $nama_supplier, $email, $no_hp, $alamat);
        header('location:../supplier');
    }

    public function delete($id){
        $data['supplier'] = $this->model('SupplierModel')->deleteSupplier($id);
        header('location:../../supplier');
    }
}