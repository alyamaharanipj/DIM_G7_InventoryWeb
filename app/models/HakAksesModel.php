<?php

   class HakAksesModel {

      private $table = 'hak_akses';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllHakAkses()
      {
         $this->db->query('SELECT * FROM  ' . $this->table);
         return $this->db->resultSet();
      }

      public function getHakAksesById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_akses=:id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createHakAkses($nama_akses, $keterangan)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(nama_akses, keterangan) VALUES (:nama_akses, :keterangan)');
         $this->db->bind('nama_akses', $nama_akses);
         $this->db->bind('keterangan', $keterangan);
         $this->db->execute();
      }

      public function updateHakAkses($id, $nama_akses, $keterangan)
      {
         $this->db->query('UPDATE ' . $this->table . ' SET nama_akses = :nama_akses, keterangan = :keterangan WHERE id_akses= :id');
         $this->db->bind('nama_akses', $nama_akses);
         $this->db->bind('keterangan', $keterangan);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deleteHakAkses($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_akses = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }