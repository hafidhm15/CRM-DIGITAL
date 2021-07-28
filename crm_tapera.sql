-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 10:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_tapera`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alamat`
--

CREATE TABLE `data_alamat` (
  `NIK` varchar(35) NOT NULL,
  `Alamat1` varchar(35) NOT NULL,
  `Alamat2` varchar(35) NOT NULL,
  `Alamat3` varchar(35) NOT NULL,
  `Alamat4` varchar(6) NOT NULL,
  `Kelurahan` varchar(6) NOT NULL,
  `Kecamatan` varchar(6) NOT NULL,
  `Kab_Kota` varchar(6) NOT NULL,
  `Provinsi` varchar(6) NOT NULL,
  `Kode_Pos` int(8) NOT NULL,
  `update_dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_individu`
--

CREATE TABLE `data_individu` (
  `nomor_peserta` varchar(10) NOT NULL,
  `Nama_Peserta` varchar(35) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Tempat_Lahir` varchar(35) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(1) NOT NULL,
  `Jenis_Kelamin` varchar(1) NOT NULL,
  `Status_Nikah` varchar(1) NOT NULL,
  `Pekerjaan` varchar(2) NOT NULL,
  `Kwarganegaraan` varchar(1) NOT NULL,
  `Negara_Kelahiran` varchar(2) NOT NULL,
  `Pendidikan` varchar(1) NOT NULL,
  `NPWP` varchar(32) NOT NULL,
  `Tanggal_NPWP` date NOT NULL,
  `Nomor_Paspor` int(10) NOT NULL,
  `Tgl_Kedaluwarsa_paspor` date NOT NULL,
  `nomor_ponsel` int(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `update_dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `NIK` varchar(16) NOT NULL,
  `Nomor_KK` varchar(16) NOT NULL,
  `Hubungan_Keluarga` varchar(1) NOT NULL,
  `Nama_Pasangan` varchar(35) NOT NULL,
  `Nama_Ibu_Kandung` varchar(35) NOT NULL,
  `Jumlah_Anak` int(2) NOT NULL,
  `update_dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pekerjaan`
--

CREATE TABLE `data_pekerjaan` (
  `NIK` varchar(16) NOT NULL,
  `Nomor_Pegawai` varchar(35) NOT NULL,
  `Jabatan` varchar(35) NOT NULL,
  `Tanggal_mulai_kerja` date NOT NULL,
  `Batas_usia_pensiun` varchar(2) NOT NULL,
  `Status_Kerja` varchar(6) NOT NULL,
  `Instansi_kerja` varchar(35) NOT NULL,
  `Penghasilan_Bersih` int(16) NOT NULL,
  `Rekening_Bank` int(16) NOT NULL,
  `Nama_Bank` varchar(35) NOT NULL,
  `update_dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alamat`
--
ALTER TABLE `data_alamat`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_individu`
--
ALTER TABLE `data_individu`
  ADD PRIMARY KEY (`nomor_peserta`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
