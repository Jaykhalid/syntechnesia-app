-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 02:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humas`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `idLaporan` int(11) NOT NULL,
  `tglPelaporan` date NOT NULL,
  `nik` int(17) NOT NULL,
  `kategoriLaporan` enum('Politik','Sosial','Ekonomi','Keagamaan','Bencana','Kriminalitas') NOT NULL,
  `isiLaporan` longtext NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`idLaporan`, `tglPelaporan`, `nik`, `kategoriLaporan`, `isiLaporan`, `foto`, `status`) VALUES
(11, '1945-08-17', 9001, 'Politik', 'MERDEKA! MERDEKA! MERDEKA!\r\nDIRGAHAYU TANAH AIR KITA BANGSA YANG BESAR INDONESIA\r\nJepang sudah menyerah tanpa syarat dari Indonesia\r\nBerakhir sudah masa kelam bangsa kita semua bung!', 'debate.png', 'selesai'),
(13, '2018-08-23', 9001, 'Bencana', 'Telah terjadi gempa bumi di Sukabumi berskala 6,9 SR \r\nberpotensi tsunami terjadi', 'gempa.jpg', 'proses'),
(21, '2022-04-05', 9002, 'Kriminalitas', 'Lapor! Baru saja terjadi aksi curanmor disekitar daerah Antapani Kidul.\r\nkronologis kejadian berlangsung pada pukul 00:30 WIB\r\nKorban menderita kerugian -+ Rp. 31.500.000,00-, ', 'loginB.png', '0'),
(22, '2024-07-06', 9003, 'Ekonomi', 'Hebat! kinerja SYNTECHNESIA dalam menyampaikan aspirasi dan keluhan saya soal Ekonomi Seniman Indonesia sudah selesai dituntaskan dalam jangka waktu yang diluar dugaan.\r\nTeruskan perjuangan kalian! semoga media pengaduan masyarakat berbasis website ini berkembang dengan cepat dan menjadi mahakarya berpengaruh abad ini untuk INDONESIA. ', 'dashboard.png', 'selesai'),
(23, '2039-08-08', 9003, 'Keagamaan', 'Ramadhan sebentar lagi, tapi harga-harga kebutuhan pokok seperti sandang &amp; pangan kenapa semakin meroket?\r\nAyo dong di normalisasi lagi harga-harganya, kasihan kami kamin yang rakyat kecil ini.', 'politik.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(17) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `jkel` enum('PRIA','WANITA') NOT NULL,
  `telp` varchar(17) NOT NULL,
  `email` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `image`, `domisili`, `jkel`, `telp`, `email`, `role_id`, `is_active`, `date_created`) VALUES
(9001, 'James Riady', 'jriady', '$2y$10$6U6w5FyFUbIeT0q20M8Wh.LeeTATlgXVsqKcyWdtErvXNgJ8wjH.y', 'default.png', 'Cisaranten Kulon No.17 ~ DKI JAKARTA ~ 40293', 'PRIA', '084235842324', 'jriady@gmail.com', 3, 1, 1617267495),
(9002, 'Andrea Hirata', 'andreahirata', '$2y$10$tlHpT8Ik.Q4NEggpvlrzZe.gjLRyIjtj.Rg5qAoIZinZKUN9nX0f6', 'andreahirata.png', 'Jl. Kebayoran Lama, Kav.12 ~ DKI Jakarta ~ 10012', 'PRIA', '084235842112', 'andreahirata12@gmail.com', 3, 1, 1617247824),
(9003, 'Viola Destyn', 'destynvi', '$2y$10$.CqD8DuqrYVWB09JHa1B9eLfbhtBsPIAX5GvNiZfW9dUqd13f82ti', 'viodestyn.png', 'Jl. Kapten Sulaiman, No.23, Kav. 321 ~ Depok ~ 23019', 'WANITA', '087549632498', 'viodestyn@gmail.com', 3, 1, 1617636564),
(9004, 'Axel Quinn', 'quinnaxel', '$2y$10$eMPhJ/VSeebKe4Uvvf/9TuVEwNWuxPatqjPj8E2Hi5uy27PmJrKsi', 'default.png', 'Jl. Supratman, No.17 ~ BOGOR ~ 80331', 'WANITA', '084235842390', 'axelquinn17@gmail.com', 3, 1, 1617863594);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nip` int(17) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(225) NOT NULL,
  `telp` varchar(17) NOT NULL,
  `email` varchar(225) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nip`, `nama`, `username`, `password`, `image`, `telp`, `email`, `level`, `role_id`, `is_active`, `date_created`) VALUES
(181910015, 'Wina Febriana', 'winnafbrn', '$2y$10$MGzJ7qiyo68pPlklrenANOITjte4nZL639.oZz/YpK2d4VmEsL06S', 'officer.png', '085952675880', 'winafebriana15@gmail.com', 'petugas', 2, 1, 1617247379),
(181910017, 'JAYDANE KHALID', 'jaydanekhalid', '$2y$10$zafIuCx1DWX94XC8kb9jpO68qoe.xChgn7Rv5cncZCxTldgdfnBxa', 'me.png', '085851675880', 'jaydanekhalid@gmail.com', 'admin', 1, 1, 1617247233),
(181910018, 'Jessica Ardelia', 'jessiedelia18', '$2y$10$VAXx3FaLrbVAhh46NyvqS.S9KHn7.P0qxXnKzI49Ya3KH7q1b8Jeq', 'officer.png', '084235842122', 'jessiedelia18@gmail.com', 'petugas', 2, 1, 1617863796);

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `idTanggapan` int(11) NOT NULL,
  `idLaporan` int(11) NOT NULL,
  `tglTanggapan` date NOT NULL,
  `tanggapan` longtext NOT NULL,
  `nip` int(17) NOT NULL,
  `nik` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`idTanggapan`, `idLaporan`, `tglTanggapan`, `tanggapan`, `nip`, `nik`) VALUES
(3, 21, '2022-12-31', 'Terima Kashi atas laporan anda, pengaduan yang diajukan valid dan benar adanya. Maka dari itu kami akan segera menindaklanjuti masalah ini secepat mungkin, agar prosesnya cepat terselesaikan.\r\nMohon kesabaran nya untuk menunggu prosedur aksi selanjutnya dari pihak Kepolisian. ', 181910017, 9002),
(9, 23, '2038-08-10', 'Terima Kasih atas laporan pengaduan anda :)\r\nBaiklah, selanjutnya kami akan meneruskan laporan ini ke Departemen Keagamaan &amp; Ekonomi.\r\nMohon untuk menunggu prosesnya ya,\r\n- Petugas Wina', 181910015, 9003),
(30, 22, '2023-11-11', 'Terima Kasih atas masukannya :)\r\nKami akan selalu melakukan upgrade &amp; evaluasi dalam segala aspek demi berkembangnya SYNTECHNESIA menjadi media penyampaian pengaduan masyarakat nomor satu di Indonsia.\r\nSemoga harimu menyenangkan Masyarakat! ', 181910017, 9003),
(31, 11, '2021-08-17', 'Sekali MERDEKA! \r\ntetap MERDEKA!', 181910017, 9001),
(32, 13, '2022-08-06', 'Siap laporan diterima! \r\nkami akan secepatnya meneruskan laporan pengaduan ini ke Departemen Geologi Darurat Tanggap Bencana seperti BMKG &amp; BNPB.\r\nDimohon untuk segera mengungsi ke tempat yang tinggi dan aman sembari menunggu respons aksi dari pihak yang berwenang.', 181910017, 9001);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(24, 1, 1),
(25, 1, 2),
(27, 1, 4),
(28, 2, 2),
(30, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Petugas'),
(3, 'Masyarakat'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'petugas'),
(3, 'masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard ENV Admin', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Generate Laporan', 'admin/generateLaporan', 'far fa-file-alt', 1),
(3, 2, 'Validasi & Verifikasi Laporan Pengaduan', 'petugas/vvlp', 'far fa-calendar-check', 1),
(4, 2, 'Tanggapi Laporan Valid', 'petugas/validasiLaporanIndex', 'fas fa-reply-all', 1),
(5, 3, 'Halaman Laporan Pengaduan', 'masyarakat/buatLaporanPengaduan', 'fas fa-bullhorn', 1),
(6, 3, 'Hallo Masyarakat!', 'masyarakat', 'fas fa-fw fa-user', 1),
(7, 2, 'Dashboard ENV Petugas', 'petugas', 'fas fa-fw fa-user-tie', 1),
(8, 3, 'Tanggapan', 'masyarakat/tanggapan', 'fas fa-reply-all', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`idLaporan`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`idTanggapan`),
  ADD UNIQUE KEY `idLaporan` (`idLaporan`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `idLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `nip` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181910072;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `idTanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
