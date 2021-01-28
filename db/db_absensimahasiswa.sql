-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 05:53 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_absensimahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absen`
--

CREATE TABLE IF NOT EXISTS `tbl_absen` (
`id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(225) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `tbl_absen`
--

INSERT INTO `tbl_absen` (`id`, `nim`, `nama_mhs`, `hari`, `tanggal`, `keterangan`) VALUES
(112, '17220110', 'Wirda', 'senin', '2021-01-25', 'Hadir'),
(113, '17220082', 'Ranggiyupanda', 'senin', '2021-01-25', 'Tidak Hadir'),
(114, '17220091', 'Nurbaiti', 'selasa', '2021-01-26', 'Hadir'),
(116, '17220297', 'Nia Maudia', 'Rabu', '2021-01-27', 'Hadir'),
(117, '17220187', 'Harly Diana', 'Kamis', '2021-01-28', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mtkuliah`
--

CREATE TABLE IF NOT EXISTS `tbl_mtkuliah` (
`nidn` int(25) NOT NULL,
  `nama_dosen` varchar(20) NOT NULL,
  `jm_masuk` varchar(25) NOT NULL,
  `jm_keluar` varchar(20) NOT NULL,
  `mt_kuliah` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=208903424 ;

--
-- Dumping data for table `tbl_mtkuliah`
--

INSERT INTO `tbl_mtkuliah` (`nidn`, `nama_dosen`, `jm_masuk`, `jm_keluar`, `mt_kuliah`) VALUES
(200808902, 'Rian Apriansyah', '08:00', '10:00', 'Mobile Programing'),
(200917601, 'Ibnu Achmad', '08:00', '10:00', 'Bisnis Manajemen'),
(200917700, 'Reza Rahardian', '10:45', '12:00', 'E-COMMERS'),
(200998702, 'Ranti Maya', '13:30', '15:00', 'Tata Kelola'),
(201003421, 'Dian Wahyuni', '11:00', '13:00', 'Audit'),
(208903423, 'Rima Andayani', '11:45', '14:00', 'Etika Profesi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama`
--

CREATE TABLE IF NOT EXISTS `tbl_nama` (
`id` int(5) NOT NULL,
  `nim` int(25) NOT NULL,
  `nama_mhs` varchar(25) NOT NULL,
  `kelas` varchar(22) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `tbl_nama`
--

INSERT INTO `tbl_nama` (`id`, `nim`, `nama_mhs`, `kelas`, `alamat`, `ttl`) VALUES
(115, 17220091, 'Nurbaiti', 'si_7c', 'Tanjungbalai', '2021-04-26'),
(117, 17220110, 'Wirda', 'si_7c', 'Tanjungbalai', '2021-07-13'),
(118, 17220297, 'Nia Maudia', 'si_7c', 'Tanjungbalai', '2021-08-08'),
(119, 17220187, 'Harly Diana', 'si_7c', 'Air Batu', '2021-05-03'),
(120, 17220082, 'Ranggi Yupanda', 'si_7k ', 'Air Batu', '2021-05-11'),
(121, 17220092, 'Baastian', 'si_7d ', 'Kisaran', '2021-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekap`
--

CREATE TABLE IF NOT EXISTS `tbl_rekap` (
  `nim` int(25) NOT NULL,
  `nama_mhs` varchar(20) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `smester` varchar(5) NOT NULL,
  `total` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekap`
--

INSERT INTO `tbl_rekap` (`nim`, `nama_mhs`, `kelas`, `smester`, `total`) VALUES
(17220092, 'Baastian', 'si_7c', '7', ''),
(17220091, 'Nurbaiti', 'si_7c', '7', ''),
(17220187, 'Harly Diana', 'si_7c', '7', ''),
(17220110, 'Wirda', 'si_7c', '7', ''),
(17220082, 'Ranggi Yupanda', 'si_7c', '7', ''),
(17220297, 'Nia Maudia', 'si_7c', '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mtkuliah`
--
ALTER TABLE `tbl_mtkuliah`
 ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `tbl_mtkuliah`
--
ALTER TABLE `tbl_mtkuliah`
MODIFY `nidn` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=208903424;
--
-- AUTO_INCREMENT for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
