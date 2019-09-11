-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 08:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwalmengajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(3) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `periode` varchar(25) NOT NULL,
  `tahun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Folder` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `Filename`, `Detail`, `nomor_surat`, `periode`, `tahun`, `username`, `Folder`, `DateUpload`) VALUES
(63, 'Assalamualaikum wr.docx', 'LaporanBulanan(LAPBUL)', 'ffd', 'April', 2019, 'kemenkumham', './upload/', '2018-09-03'),
(62, 'Assalamualaikum wr.docx', 'LaporanBulanan(LAPBUL)', 'dg', 'Maret', 2018, 'kemenkumham', './upload/', '2018-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `laporanbulanan`
--

CREATE TABLE `laporanbulanan` (
  `id` int(11) NOT NULL,
  `bulanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporanbulanan`
--

INSERT INTO `laporanbulanan` (`id`, `bulanan`) VALUES
(1, 'LaporanBulanan(LAPBUL)');

-- --------------------------------------------------------

--
-- Table structure for table `laporansemester`
--

CREATE TABLE `laporansemester` (
  `id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporansemester`
--

INSERT INTO `laporansemester` (`id`, `semester`) VALUES
(1, 'LKIP');

-- --------------------------------------------------------

--
-- Table structure for table `laporantahunan`
--

CREATE TABLE `laporantahunan` (
  `id` int(11) NOT NULL,
  `tahunan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporantahunan`
--

INSERT INTO `laporantahunan` (`id`, `tahunan`) VALUES
(1, 'SistemPengendalianInternPemerintah(SPIP)');

-- --------------------------------------------------------

--
-- Table structure for table `laporantriwulan`
--

CREATE TABLE `laporantriwulan` (
  `id` int(11) NOT NULL,
  `triwulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporantriwulan`
--

INSERT INTO `laporantriwulan` (`id`, `triwulan`) VALUES
(1, 'UnitPemberantasanPungli(UPP)'),
(2, 'UnitPengendalianGratifikasi(UPG)'),
(3, 'UnitLayananPengaduanMasyarakat(ULP)'),
(4, 'LayananAspirasi&PengaduanOnlineRakyat(E-LAPOR)'),
(5, 'LaporanStandarPelayananPublik(SPP)'),
(6, 'SistemPengendalianInternPemerintah(SPIP)'),
(7, 'LaporanHasilPemeriksaan(LHP_IRJEN)'),
(8, 'LaporanHasilPemeriksaan(LHP_BPKP)'),
(9, 'LaporanHasilPemeriksaan(LHP_BPK)'),
(10, 'StandarPelayananPublik(SPP)');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `bulan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(5, 'April'),
(6, 'Mei'),
(7, 'Juni'),
(8, 'Juli'),
(9, 'Agustus'),
(10, 'September'),
(11, 'Oktober'),
(12, 'November'),
(13, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `periodesemester`
--

CREATE TABLE `periodesemester` (
  `id` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodesemester`
--

INSERT INTO `periodesemester` (`id`, `semester`) VALUES
(1, 'SemesterPertama'),
(2, 'SemesterKedua');

-- --------------------------------------------------------

--
-- Table structure for table `periodetriwulan`
--

CREATE TABLE `periodetriwulan` (
  `id` int(11) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodetriwulan`
--

INSERT INTO `periodetriwulan` (`id`, `periode`) VALUES
(1, 'TriwulanPertama'),
(2, 'TriwulanKedua'),
(3, 'TriwulanKetiga'),
(4, 'TriwulanKeempat');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(3) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Folder` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `situasional`
--

CREATE TABLE `situasional` (
  `id` int(11) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `Folder` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`) VALUES
(1, 2018),
(2, 2019),
(3, 2020),
(4, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tahunan`
--

CREATE TABLE `tahunan` (
  `id` int(3) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `Folder` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunan`
--

INSERT INTO `tahunan` (`id`, `Filename`, `Detail`, `nomor_surat`, `username`, `tahun`, `Folder`, `DateUpload`) VALUES
(1, 'Happy National Napping Day.docx', 'SistemPengendalianInternPemerintah(SPIP)', 'dd', 'kemenkumham', '2018', './upload/', '2018-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id` int(3) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `Detail` varchar(100) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `periode` varchar(25) NOT NULL,
  `tahun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Folder` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triwulan`
--

INSERT INTO `triwulan` (`id`, `Filename`, `Detail`, `nomor_surat`, `periode`, `tahun`, `username`, `Folder`, `DateUpload`) VALUES
(1, 'JARKOM 4A3 216.pdf', 'UnitPemberantasanPungli(UPP)', 'ssf', 'TriwulanPertama', 2018, 'kemenkumham', './upload/', '2018-09-04'),
(2, 'JARKOM 4A3 216.pdf', 'UnitPemberantasanPungli(UPP)', 'baru', 'TriwulanPertama', 2018, 'kemenkumham', './upload/', '2018-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'admin', 'admin'),
(18, 'superadmin', '1234'),
(34, 'kemenkumham', '1234'),
(37, 'BPHSurabaya', 'jatimpastihebat11'),
(38, 'LapasMalang', 'jatimpastihebat123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanbulanan`
--
ALTER TABLE `laporanbulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporansemester`
--
ALTER TABLE `laporansemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporantahunan`
--
ALTER TABLE `laporantahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporantriwulan`
--
ALTER TABLE `laporantriwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodesemester`
--
ALTER TABLE `periodesemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodetriwulan`
--
ALTER TABLE `periodetriwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situasional`
--
ALTER TABLE `situasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahunan`
--
ALTER TABLE `tahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `laporanbulanan`
--
ALTER TABLE `laporanbulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporansemester`
--
ALTER TABLE `laporansemester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporantahunan`
--
ALTER TABLE `laporantahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporantriwulan`
--
ALTER TABLE `laporantriwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `periodesemester`
--
ALTER TABLE `periodesemester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periodetriwulan`
--
ALTER TABLE `periodetriwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `situasional`
--
ALTER TABLE `situasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahunan`
--
ALTER TABLE `tahunan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
