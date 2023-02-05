<?php

   class DashboardModel {

      private $db;

      public function __construct()
      {
         $this->db = new Database;
      }

      public function getProfitAndLoss()
      {
         $this->db->query('SELECT b.id_barang, b.nama_barang, p.total_pembelian, j.total_penjualan,
         j.harga_jual, p.harga_beli, ((j.total_penjualan * j.harga_jual) -
         (j.total_penjualan * p.harga_beli)) as keuntungan_barang_terjual, (j.total_penjualan * j.harga_jual) as pendapatan_barang_terjual, 
         (p.total_pembelian * p.harga_beli) as modal_beli,
         ((j.total_penjualan * j.harga_jual) - (p.total_pembelian * p.harga_beli)) as profit_or_loss FROM barang 
         b JOIN ((SELECT *, SUM(jumlah_pembelian) as total_pembelian FROM pembelian 
         group by id_barang) p) ON b.id_barang = p.id_barang JOIN (SELECT *,
         SUM(jumlah_penjualan) as total_penjualan FROM penjualan group by id_barang) j 
         ON b.id_barang = j.id_barang GROUP BY id_barang;');
         return $this->db->resultSet();
      }
      
   }