<?php

   class PelangganModel {

      private $table = 'pelanggan';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllPelanggan()
      {
         $this->db->query('SELECT * FROM  ' . $this->table);
         return $this->db->resultSet();
      }

      public function getPelangganById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pelanggan = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createPelanggan($nama_pelanggan, $email, $no_hp, $jenis_kelamin, $tgl_lahir, $alamat)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(nama_pelanggan, email, no_hp, jenis_kelamin, tgl_lahir, alamat) 
         VALUES (:nama_pelanggan, :email, :no_hp, :jenis_kelamin, :tgl_lahir, :alamat)');
         $this->db->bind('nama_pelanggan', $nama_pelanggan);
         $this->db->bind('email', $email);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('jenis_kelamin', $jenis_kelamin);
         $this->db->bind('tgl_lahir', $tgl_lahir);
         $this->db->bind('alamat', $alamat);
         $this->db->execute();
      }

      public function updatePelanggan($id, $nama_pelanggan, $email, $no_hp, $jenis_kelamin, $tgl_lahir, $alamat)
      {
         $this->db->query('UPDATE ' . $this->table . ' SET nama_pelanggan = :nama_pelanggan, email = :email, no_hp = :no_hp, jenis_kelamin = :jenis_kelamin, tgl_lahir = :tgl_lahir, alamat = :alamat WHERE id_pelanggan = :id');
         $this->db->bind('nama_pelanggan', $nama_pelanggan);
         $this->db->bind('email', $email);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('jenis_kelamin', $jenis_kelamin);
         $this->db->bind('tgl_lahir', $tgl_lahir);
         $this->db->bind('alamat', $alamat);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deletePelanggan($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pelanggan = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }