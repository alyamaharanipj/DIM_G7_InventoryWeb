<?php

   class PenggunaModel {

      private $table = 'pengguna';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllPengguna()
      {
         $this->db->query('SELECT * FROM  ' . $this->table . ' INNER JOIN hak_akses ON '. $this->table . '.id_akses = hak_akses.id_akses');
         return $this->db->resultSet();
      }

      public function getPenggunaById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN hak_akses ON '. $this->table . '.id_akses = hak_akses.id_akses WHERE id_pengguna = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createPengguna($nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses)
      {
         $password = password_hash($password, PASSWORD_DEFAULT);
         $this->db->query('INSERT INTO ' . $this->table . '(nama_pengguna, password, nama_depan, nama_belakang, no_hp, alamat, id_akses) 
         VALUES (:nama_pengguna, :password, :nama_depan, :nama_belakang, :no_hp, :alamat, :id_akses)');
         $this->db->bind('nama_pengguna', $nama_pengguna);
         $this->db->bind('password', $password);
         $this->db->bind('nama_depan', $nama_depan);
         $this->db->bind('nama_belakang', $nama_belakang);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('alamat', $alamat);
         $this->db->bind('id_akses', $id_akses);
         $this->db->execute();
      }

      public function updatePengguna($id, $nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses)
      {
         $this->db->query('UPDATE ' . $this->table . ' SET nama_pengguna = :nama_pengguna, password = :password, nama_depan = :nama_depan, nama_belakang = :nama_belakang, no_hp = :no_hp, alamat = :alamat, id_akses = :id_akses WHERE id_pengguna = :id');
         $this->db->bind('nama_pengguna', $nama_pengguna);
         $this->db->bind('password', $password);
         $this->db->bind('nama_depan', $nama_depan);
         $this->db->bind('nama_belakang', $nama_belakang);
         $this->db->bind('no_hp', $no_hp);
         $this->db->bind('alamat', $alamat);
         $this->db->bind('id_akses', $id_akses);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deletePengguna($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pengguna = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }