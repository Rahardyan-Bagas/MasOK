-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2025 at 04:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodnesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `Id_Daerah` int(11) NOT NULL,
  `Nama_Daerah` varchar(100) NOT NULL,
  `Provinsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `Id_Lokasi` int(11) NOT NULL,
  `Nama_Tempat` varchar(100) NOT NULL,
  `Kota` varchar(100) DEFAULT NULL,
  `Provinsi` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `Id_Makanan` int(11) NOT NULL,
  `Nama_Makanan` varchar(100) NOT NULL,
  `Deskripsi` text DEFAULT NULL,
  `Id_Daerah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `makanan_lokasi`
--

CREATE TABLE `makanan_lokasi` (
  `Id_Makanan` int(11) NOT NULL,
  `Id_Lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `Id_Resep` int(11) NOT NULL,
  `Id_Makanan` int(11) NOT NULL,
  `Bahan` text NOT NULL,
  `Cara_Memasak` text NOT NULL,
  `Waktu_Memasak` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `Id_Ulasan` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Makanan` int(11) NOT NULL,
  `Komentar` text DEFAULT NULL,
  `Tanggal_Ulasan` date DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL CHECK (`Rating` between 1 and 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Nama_User` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`Id_Daerah`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`Id_Lokasi`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`Id_Makanan`),
  ADD KEY `Id_Daerah` (`Id_Daerah`);

--
-- Indexes for table `makanan_lokasi`
--
ALTER TABLE `makanan_lokasi`
  ADD PRIMARY KEY (`Id_Makanan`,`Id_Lokasi`),
  ADD KEY `Id_Lokasi` (`Id_Lokasi`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`Id_Resep`),
  ADD KEY `Id_Makanan` (`Id_Makanan`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`Id_Ulasan`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Makanan` (`Id_Makanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `Id_Daerah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `Id_Lokasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `Id_Makanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `Id_Resep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `Id_Ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`Id_Daerah`) REFERENCES `daerah` (`Id_Daerah`);

--
-- Constraints for table `makanan_lokasi`
--
ALTER TABLE `makanan_lokasi`
  ADD CONSTRAINT `makanan_lokasi_ibfk_1` FOREIGN KEY (`Id_Makanan`) REFERENCES `makanan` (`Id_Makanan`),
  ADD CONSTRAINT `makanan_lokasi_ibfk_2` FOREIGN KEY (`Id_Lokasi`) REFERENCES `lokasi` (`Id_Lokasi`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`Id_Makanan`) REFERENCES `makanan` (`Id_Makanan`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`Id_Makanan`) REFERENCES `makanan` (`Id_Makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
