<?php

   class PembelianModel {

      private $table = 'pembelian';
      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getAllPembelian()
      {
         $this->db->query('SELECT * FROM  ' . $this->table . ' INNER JOIN supplier ON '. $this->table . '.id_supplier = supplier.id_supplier INNER JOIN barang ON '. $this->table . '.id_barang = barang.id_barang INNER JOIN pengguna ON '. $this->table . '.id_pengguna = pengguna.id_pengguna');
         return $this->db->resultSet();
      }

      public function getPembelianById($id)
      {
         $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN supplier ON '. $this->table . '.id_supplier = supplier.id_supplier INNER JOIN barang ON '. $this->table . '.id_barang = barang.id_barang INNER JOIN pengguna ON '. $this->table . '.id_pengguna = pengguna.id_pengguna WHERE id_pembelian = :id');
         $this->db->bind('id', $id);
         return $this->db->single();
      }

      public function createPembelian($jumlah_pembelian, $harga_beli, $id_pengguna, $id_barang, $id_supplier)
      {
         $this->db->query('INSERT INTO ' . $this->table . '(jumlah_pembelian, harga_beli, id_pengguna, id_barang, id_supplier) 
                           VALUES (:jumlah_pembelian, :harga_beli, :id_pengguna, :id_barang, :id_supplier)');
         $this->db->bind('jumlah_pembelian', $jumlah_pembelian);
         $this->db->bind('harga_beli', $harga_beli);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->bind('id_barang', $id_barang);
         $this->db->bind('id_supplier', $id_supplier);
         $this->db->execute();
      }

      public function updatePembelian($id, $jumlah_pembelian, $harga_beli, $id_pengguna, $id_barang, $id_supplier)
      {
         $this->db->query('UPDATE ' . $this->table . 
         ' SET 
            jumlah_pembelian = :jumlah_pembelian, 
            harga_beli = :harga_beli,
            id_pengguna = :id_pengguna, 
            id_barang = :id_barang,
            id_supplier = :id_supplier
            WHERE id_pembelian = :id'
         );
         $this->db->bind('jumlah_pembelian', $jumlah_pembelian);
         $this->db->bind('harga_beli', $harga_beli);
         $this->db->bind('id_pengguna', $id_pengguna);
         $this->db->bind('id_barang', $id_barang);
         $this->db->bind('id_supplier', $id_supplier);
         $this->db->bind('id', $id);
         $this->db->execute();
      }

      public function deletePembelian($id)
      {
         $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pembelian = :id');
         $this->db->bind('id', $id);
         $this->db->execute();
      }
   }