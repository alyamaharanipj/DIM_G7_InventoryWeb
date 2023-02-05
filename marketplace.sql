-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 08:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `id_pengguna` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `satuan`, `id_pengguna`) VALUES
(2, 'Logitech G740 Large Cloth Gaming Mouse Pad with Anti Slip & Optimized', 'Permukaan kain G740 menghadirkan gaya gesek yang lebih ideal. Ketebalan mouse pad sebesar 5mm menjadikannya lebih lembut dan mengurangi ketidaknyamanan pada permukaan meja yang tidak rata, sehingga kontrol mouse menjadi lebih akurat. Pergerakan tangan dib', 'pcs', 5),
(3, 'Logitech G923 True Force Wheel + Logitech Driving Shifter Bundling 2', 'LOGITECH G923 untuk PlayStation 5, PlayStation 4 dan PC merupakan high-performance racing wheel yang merevolusi pengalaman racingmu. Generasi terbaru feedback system, G923 dibekali TRUEFORCE, high-definition force feedback untuk pengalaman racing yang leb', 'pcs', 1),
(4, 'Logitech Top Plate for G715 Keyboard - Green', 'G715 TOP PLATE Untuk Keyboard Gaming Wireless G715 dari Koleksi Aurora. Berikan tampilan baru yang segar dengan pertukaran sederhana. Dengan attachment magnetik, yang harus Anda lakukan adalah melepas dan mengklik untuk mengubah estetika keyboard Anda men', 'pcs', 5),
(5, 'Logitech Ear Pads and Mic Boom for G735 Headset - Green', 'EAR PADS & MIC BOOM Untuk Headset Gaming Wireless G735 dari Koleksi Aurora. Jadikan milik Anda dengan ear pads Pink Dawn dan Green Flash serta mic boom.', 'pcs', 6),
(6, 'Logitech G502 X Mouse Gaming Wired HERO 25K DPI - White', 'G502 X, Versi terbaru dari mouse gaming paling populer dari Logitech, mengkombinasikan antara performa dan teknologi gaming paling advance saat ini. G502 X memperkenalkan teknologi terbaru hybrid optical-mechanical LIGHTFORCE switches untuk primary button', 'pcs', 5),
(7, 'Logitech G715 Keyboard Gaming Wireless Bluetooth TKL RGB-Linear', 'G715 Gaming Keyboard Wireless dari Aurora Collection menghadirkan gaya sederhana dengan kinerja tinggi sehingga kamu bisa mengekspresikan dirimu sendiri dan bermain sesuai caramu.', 'pcs', 6),
(8, 'Logitech G735 LIGHTSPEED Headset Gaming Wireless Bluetooth', 'LIGHTSYNC menjadikan game-mu lebih berwarna dengan empat Play Mood responsif yang mencerminkan gaya bermainmu. Headset gaming RGB mengeluarkan seluruh potensi kreativitasmu, memamerkan gayamu, dan memungkinkanmu untuk menciptakan efek animasimu sendiri da', 'pcs', 5),
(9, 'Logitech F310 Gamepad [FS]', 'Mainkan pada TV-mu. Padukan F310 dengan Big Picture dan navigasi Steam, jelajahi web, nikmati permainan dan aktivitas lainnya dari kenyamanan sofa Anda. Bawalah seluruh koleksi permainan Steam ke ruang duduk, raih F310, duduk, dan nikmati.', 'pcs', 6),
(10, 'Logitech G333 In-Ear Earphone Gaming Mobile Type C Adapter - Purple', 'Play it loud everywhere life takes you. Get the earphones that deliver amazing gaming audio performance, from the desktop to wherever you want to go.', 'pcs', 5),
(11, 'Logitech G Gaming Mouse Pad (40 cm x 46 cm) - Green', 'MOUSE PAD Luncurkan Mouse Gaming Wireless G705 Anda dengan bangga saat Anda memilih jalur warna yang tepat untuk Anda. Sesuaikan estetika Koleksi Aurora Anda dengan mouse pad varian warna Pink Dawn, Green Flash, dan White Mist.', 'pcs', 6),
(13, 'Barang 1', 'keterangan hak akses', 'pcs', 1),
(14, 'Barang 35', 'keterangan hak akses', 'pcs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(11) NOT NULL,
  `nama_akses` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `nama_akses`, `keterangan`) VALUES
(1, 'owner213', 'view pembelian dan penjualan'),
(2, 'manager', 'view pembelian dan penjualan'),
(3, 'customer', 'view penjualan customer'),
(4, 'admin', 'manage pengguna'),
(5, 'staff_purchasing', 'manage barang dan pembelian'),
(6, 'Hak Akses Baru', 'Keterangan Baru'),
(7, 'staff_warehouse', 'view barang, pembelian, dan penjualan'),
(8, 'staff_finance', 'view pembelian dan penjualan'),
(9, 'staff_operational', 'view pembelian dan penjualan'),
(10, 'cashier', 'view dan penjualan'),
(14, 'Staff Sales', 'keterangan hak akses'),
(15, 'Staff Sales2', 'keterangan hak akses'),
(16, 'Super Admin', 'Can do Anything!!');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` bigint(20) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `no_hp`, `jenis_kelamin`, `tgl_lahir`, `alamat`) VALUES
(1, 'Tuan Krab2', 'crab@gmail.com', '08909890987', 1, '2001-12-01', 'Jl. Chumb Bucket'),
(5, 'Squidward', 'squid@member.com', '085703126352', 0, '2004-01-01', 'Jl. Sawo');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` bigint(20) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `harga_beli` decimal(13,2) NOT NULL,
  `id_pengguna` bigint(20) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `id_supplier` bigint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `jumlah_pembelian`, `harga_beli`, `id_pengguna`, `id_barang`, `id_supplier`) VALUES
(1, 100, '509000.00', 1, 2, 1),
(2, 50, '6218000.00', 8, 3, 1),
(3, 400, '249000.00', 2, 4, 1),
(4, 200, '289000.00', 8, 5, 1),
(5, 50, '959000.00', 2, 6, 1),
(6, 150, '2549000.00', 8, 7, 1),
(7, 100, '2759000.00', 2, 8, 1),
(8, 130, '250000.00', 8, 9, 1),
(9, 80, '579000.00', 2, 10, 1),
(11, 250, '509000.00', 2, 2, 1),
(12, 5, '6218000.00', 8, 3, 1),
(13, 50, '249000.00', 2, 4, 1),
(14, 100, '289000.00', 8, 5, 1),
(15, 450, '959000.00', 2, 6, 1),
(16, 90, '2549000.00', 8, 7, 1),
(17, 80, '2759000.00', 2, 8, 1),
(18, 70, '250000.00', 8, 9, 1),
(19, 2, '579000.00', 1, 10, 1),
(22, 2, '54000.00', 1, 2, 1),
(23, 41, '54000.00', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` bigint(20) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `password`, `nama_depan`, `nama_belakang`, `no_hp`, `alamat`, `id_akses`) VALUES
(1, 'chihiro_tirta', '482c811da5d5b4bc6d497ffa98491e38', 'Tirta', 'Chihiro', '081234567890', 'Kompl Pd Lestari Bl B/10, Dki Jakarta', 14),
(2, 'morimoto_naomi', '482c811da5d5b4bc6d497ffa98491e38', 'Naomi', 'Morimoto', '081234567891', 'Jl Jatiwaringin Raya, Dki Jakarta', 5),
(3, 'okamoto_chiaki', '482c811da5d5b4bc6d497ffa98491e38', 'Chiaki', 'Okamoto', '081234567892', 'Proy Senen Bl 3/116, Dki Jakarta', 6),
(4, 'kanzaki_asuka', '482c811da5d5b4bc6d497ffa98491e38', 'Asuka', 'Kanzaki', '081234567893', 'Jl Arteri Mangga Dua Raya Mal Mangga Dua Bl B/89, Dki Jakarta', 7),
(5, 'inada_hifumi', '482c811da5d5b4bc6d497ffa98491e38', 'Hifumi', 'Inada', '081234567894', 'JL Raya Pajajaran No.257, Warung Jambu, Bogor', 8),
(6, 'shiratori_kyo', '482c811da5d5b4bc6d497ffa98491e38', 'Kyo', 'Shiratori', '081234567895', 'Jl Kb Jeruk III/25, Dki Jakarta', 9),
(7, 'kohaku_dwi', '482c811da5d5b4bc6d497ffa98491e38', 'Dwi', 'Kohaku', '081234567896', 'Ruko Kota Modern Blok R No. 20, Cikokol, Banten', 4),
(8, 'yuu_shion', '482c811da5d5b4bc6d497ffa98491e38', 'Shion', 'Yuu', '081234567897', 'Jl Sei Merah 6, Sumatera Utara', 5),
(9, 'kaoru_cahaya', '482c811da5d5b4bc6d497ffa98491e38', 'Cahaya', 'Kaoru', '081234567898', 'Jl Jelambar Ilir 2, Jakarta', 6),
(10, 'fujita_yasu', '482c811da5d5b4bc6d497ffa98491e38', 'Yasu', 'Fujita', '081234567899', 'Jl Raden Patah 182-192, Jawa Tengah', 7),
(13, 'MarkLee', '$2y$10$AgbKscWnTi3cnL67bgwFS.Ut2HXGgmidpRBlq8SCI9lfMKA5PiLdW', 'Mark', 'Lee', '085703126352', 'Jl. Sawo Kecik No. 2 RT. 5/RW. 8, Kelurahan Pulogebang, Cakung', 1),
(15, 'JohnnySuh23', '$2y$10$rOz9UbnPszeIhmaoJ3IoGOKiPy1KL6oVFG9Pkx63NfNHr/4lV9b4i', 'Alya', 'maharani', '085703126352', 'Jl. ', 1),
(17, 'JohnnySuh23', '$2y$10$totdRoSsjeXvej.ywclT.eGH4lzKnm/wsINXfaZ3VKmbmiUsiAimG', 'John', 'Suh', '085703126352', 'Jl. Sawo Kecik No. 2 RT. 5/RW. 8, Kelurahan Pulogebang, Cakung', 7),
(18, 'Alya_Maharani2', '$2y$10$phll9mLSGXrXfcgPxKE8HOCImqum6YCKqxqXWLaTUwoxlA2XqFiqy', 'Alu', 'Suh', '085703126352', 'Jl. jl', 8);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` bigint(20) NOT NULL,
  `jumlah_penjualan` int(11) NOT NULL,
  `harga_jual` decimal(13,2) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `id_pengguna` bigint(20) NOT NULL,
  `id_pelanggan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `jumlah_penjualan`, `harga_jual`, `id_barang`, `id_pengguna`, `id_pelanggan`) VALUES
(1, 10, '559000.00', 2, 1, 1),
(2, 20, '559000.00', 2, 9, 1),
(3, 35, '359000.00', 11, 9, 1),
(4, 30, '339000.00', 5, 9, 1),
(5, 50, '1009000.00', 6, 9, 1),
(6, 10, '339000.00', 5, 9, 1),
(7, 5, '1009000.00', 6, 9, 1),
(8, 32, '300000.00', 9, 3, 1),
(9, 8, '629000.00', 10, 3, 1),
(10, 10, '629000.00', 10, 9, 1),
(11, 1, '629000.00', 10, 9, 1),
(12, 5, '299000.00', 4, 3, 1),
(13, 50, '2599000.00', 7, 3, 1),
(14, 55, '299000.00', 4, 3, 1),
(15, 45, '2599000.00', 7, 3, 1),
(16, 90, '2599000.00', 7, 3, 1),
(17, 75, '1009000.00', 6, 9, 1),
(18, 35, '300000.00', 9, 3, 1),
(19, 20, '629000.00', 10, 3, 1),
(28, 1, '54000.00', 13, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` bigint(20) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `email`, `no_hp`, `alamat`) VALUES
(1, 'Supplier167', 'email@supplier.com', '087890987890', 'Jl. Supplier vendor'),
(4, 'Supply235', 'supply2@gmail.com', '085703126352', 'Jl. Sawo'),
(5, 'Supply2336', 'alyamaharanipj@gmail.com', '085703126352', 'Jl. Sawo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `id_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `hak_akses` (`id_akses`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
