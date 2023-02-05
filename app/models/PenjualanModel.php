<?php

   class PenjualanModel {

      private $table = 'penjualan';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllPenjualan()
      {
         $this->db->query('SELECT * FROM  ' . $this->table . ' INNER JOIN pelanggan ON '. $this->table . '.id_pelanggan = pelanggan.id_pelanggan INNER JOIN barang ON '. $this->table . '.id_barang = barang.id_barang INNER JOIN pengguna ON '. $this->table . '.id_pengguna = pengguna.id_pengguna');
         return $this->db->resultSet();
      }

      public function getPenjualanById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN pelanggan ON '. $this->table . '.id_pelanggan = pelanggan.id_pelanggan INNER JOIN barang ON '. $this->table . '.id_barang = barang.id_barang INNER JOIN pengguna ON '. $this->table . '.id_pengguna = pengguna.id_pengguna WHERE id_penjualan = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createPenjualan($jumlah_penjualan, $harga_jual, $id_barang, $id_pengguna, $id_pelanggan)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(jumlah_penjualan, harga_jual, id_barang, id_pengguna, id_pelanggan) 
                           VALUES (:jumlah_penjualan, :harga_jual, :id_barang, :id_pengguna, :id_pelanggan)');
         $this->db->bind('jumlah_penjualan', $jumlah_penjualan);
         $this->db->bind('harga_jual', $harga_jual);
         $this->db->bind('id_barang', $id_barang);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->bind('id_pelanggan', $id_pelanggan);
         $this->db->execute();
      }

      public function updatePenjualan($id, $jumlah_penjualan, $harga_jual, $id_barang, $id_pengguna, $id_pelanggan)
      {
         $this->db->query('UPDATE ' . $this->table . 
         ' SET 
            jumlah_penjualan = :jumlah_penjualan, 
            harga_jual = :harga_jual, 
            id_barang = :id_barang,
            id_pengguna = :id_pengguna,
            id_pelanggan = :id_pelanggan
            WHERE id_penjualan = :id'
         );
         $this->db->bind('jumlah_penjualan', $jumlah_penjualan);
         $this->db->bind('harga_jual', $harga_jual);
         $this->db->bind('id_barang', $id_barang);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->bind('id_pelanggan', $id_pelanggan);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deletePenjualan($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_penjualan = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }