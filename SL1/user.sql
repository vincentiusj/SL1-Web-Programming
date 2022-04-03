-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 09:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `id` int(11) NOT NULL,
  `namaDepan` varchar(30) NOT NULL,
  `namaTengah` varchar(30) NOT NULL,
  `namaBelakang` varchar(30) NOT NULL,
  `tempatLahir` varchar(15) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nik` int(30) NOT NULL,
  `wargaNegara` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noHp` varchar(12) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `kodePos` int(5) NOT NULL,
  `fotoProfil` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`id`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `nik`, `wargaNegara`, `email`, `noHp`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password`) VALUES
(3, 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2022-03-31', 979765986, 'KJHGHJG', 'vincentius.johnathan@gmail.com', '0123123', 'asdfasdf', 11111, 'Array', 'asdfasdf', 'asdasd'),
(4, 'vin', 'vinj', 'vinj', 'martin', '2022-03-10', 1, 'lusia', 'martin.jelek@gmail.com', '2', 'lusia', 22222, 'upload/messageImage_1648828950599.jpg', 'vinj', 'vinj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
