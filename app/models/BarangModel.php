<?php

   class BarangModel {

      private $table = 'barang';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllBarang()
      {
         $this->db->query('SELECT * FROM  ' . $this->table . ' INNER JOIN pengguna ON '. $this->table . '.id_pengguna = pengguna.id_pengguna');
         return $this->db->resultSet();
      }

      public function getBarangById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createBarang($nama_barang, $keterangan, $satuan, $id_pengguna)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(nama_barang, keterangan, satuan, id_pengguna)
            VALUES (:nama_barang, :keterangan, :satuan, :id_pengguna)
         ');
         $this->db->bind('nama_barang', $nama_barang);
         $this->db->bind('keterangan', $keterangan);
         $this->db->bind('satuan', $satuan);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->execute();
      }

      public function updateBarang($id, $nama_barang, $keterangan, $satuan, $id_pengguna)
      {
         $this->db->query('UPDATE ' . $this->table . ' SET nama_barang = :nama_barang, keterangan = :keterangan, satuan = :satuan, id_pengguna = :id_pengguna WHERE id_barang= :id');
         $this->db->bind('nama_barang', $nama_barang);
         $this->db->bind('keterangan', $keterangan);
         $this->db->bind('satuan', $satuan);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deleteBarang($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_barang = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }