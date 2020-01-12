-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2020 at 06:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `londri`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_absensi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_karyawan`, `tgl_absensi`) VALUES
(22, 22, '04-01-2020'),
(23, 22, '04-01-2020'),
(24, 22, '06-01-2020 05:53:10'),
(25, 23, '06-01-2020 11:58:39'),
(26, 1, '11-01-2020 09:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(50) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `gaji` varchar(8) NOT NULL,
  `uang_lembur` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `no_tlp`, `gaji`, `uang_lembur`) VALUES
(1, 'null', 'null', 'null', 'null', 'null'),
(22, 'kus', 'sumenep', '0809', '600000', '2000'),
(23, 'lia', 'sumeneo', '987', '77', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `ttl`, `nohp`) VALUES
(12, 'erik', 'sumnep', '2018-12-31', '0982409230000'),
(13, 'kaos', 'kaos', 'jkdsfkjsdfkjs', '2387237'),
(14, 'noah', 'noah', '23231', '23423'),
(15, 'bb', 'b', '2020-01-07', '978'),
(16, 'eriko', 'BATANG BATANG', '2020-01-09', '12');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id_master` int(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id_master`, `jenis`, `harga`) VALUES
(4, 'cuci kilat', '2000'),
(5, 'cuci kering', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nominal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `nama`, `nominal`) VALUES
(3, '2019-12-02', 'benisn00', '1000000'),
(4, '2020-01-11', 'oo', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_nota` int(50) NOT NULL,
  `id_transaksi` varchar(255) NOT NULL,
  `nama_R` varchar(100) NOT NULL,
  `id_master` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `berat` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `dp` int(11) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `status_pengambilan` varchar(20) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_nota`, `id_transaksi`, `nama_R`, `id_master`, `id_karyawan`, `tgl_transaksi`, `tgl_selesai`, `berat`, `jumlah_bayar`, `dp`, `status_pembayaran`, `status_pengambilan`, `catatan`) VALUES
(12, '-', 'erik', 0, 1, '2020-01-05', '2020-01-09', 0, 0, 12, 'Belum Bayar', 'Belum Selesai', '12'),
(13, '-', 'noah', 4, 1, '2020-01-01', '2020-01-11', 0, 0, 12, 'Belum Bayar', 'Belum Selesai', ''),
(14, '-', 'noah', 4, 1, '2020-01-02', '2020-01-03', 12, 0, 12, 'Belum Bayar', 'Belum Selesai', '12'),
(16, '-', 'noah', 5, 1, '2020-01-05', '2020-01-09', 0, 2000, 0, 'Belum Lunas', 'Belum Selesai', ''),
(17, '-', 'eriko', 4, 23, '2020-01-19', '2020-01-20', 12, 2000, 0, 'Belum Lunas', 'Belum Selesai', '2'),
(18, '-', 'eriko', 4, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(19, '-', 'eriko', 0, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(20, '-', 'eriko', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Sudah Selesai', ''),
(21, '-', 'eriko', 0, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(22, '-', 'eriko', 4, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(23, '-', 'eriko', 0, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(24, '-', 'eriko', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(25, '-', 'eriko', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(26, '-', 'noah', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(27, '-', 'eriko', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(28, '-', 'noah', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', ''),
(29, '-', 'bb', 5, 1, '2020-01-09', '2020-01-09', 0, 0, 0, 'Belum Bayar', 'Belum Selesai', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_nota` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
