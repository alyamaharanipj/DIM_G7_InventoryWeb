<?php

   class SupplierModel {

      private $table = 'supplier';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllSupplier()
      {
         $this->db->query('SELECT * FROM  ' . $this->table);
         return $this->db->resultSet();
      }

      public function getSupplierById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_supplier = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createSupplier($nama_supplier, $email, $no_hp, $alamat)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(nama_supplier, email, no_hp, alamat) 
         VALUES (:nama_supplier, :email, :no_hp, :alamat)');
         $this->db->bind('nama_supplier', $nama_supplier);
         $this->db->bind('email', $email);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('alamat', $alamat);
         $this->db->execute();
      }

      public function updateSupplier($id, $nama_supplier, $email, $no_hp, $alamat)
      {
         $this->db->query('UPDATE ' . $this->table . 
         ' SET 
            nama_supplier = :nama_supplier, 
            email = :email,
            no_hp = :no_hp, 
            alamat = :alamat
            WHERE id_supplier = :id'
         );
         $this->db->bind('nama_supplier', $nama_supplier);
         $this->db->bind('email', $email);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('alamat', $alamat);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deleteSupplier($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_supplier = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }