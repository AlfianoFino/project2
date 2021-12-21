-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 02:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccime`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbdatavaksin`
--

CREATE TABLE `dbdatavaksin` (
  `nama` varchar(64) NOT NULL,
  `NIK` int(32) NOT NULL,
  `jenisvaksin` varchar(16) DEFAULT NULL,
  `jadwalvaksin1` varchar(16) DEFAULT NULL,
  `jadwalvaksin2` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbdatavaksin`
--

INSERT INTO `dbdatavaksin` (`nama`, `NIK`, `jenisvaksin`, `jadwalvaksin1`, `jadwalvaksin2`) VALUES
('ad', 0, 'ad', 'ad', 'ad'),
('de', 1, 'de', 'de', 'de'),
('eldo', 2468, 'eldorado', '12/11/2021', '12/12/2022'),
('admin', 12345, NULL, NULL, NULL),
('alfiano', 112233, 'astra zeneca', '12/11/2021', '12/12/2021'),
('joko', 223344, 'astra zeneca', '2021-12-02', '2021-12-31'),
('naruto', 696969, 'astra zeneca', '12/11/2021', '12/12/2021'),
('naruto', 12345678, 'evova', '12/11/2021', '12/12/2021');

-- --------------------------------------------------------

--
-- Table structure for table `dblogin`
--

CREATE TABLE `dblogin` (
  `username` varchar(32) NOT NULL,
  `pw` varchar(32) NOT NULL,
  `NIK` int(32) NOT NULL,
  `nomorhp` int(32) NOT NULL,
  `privilege` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dblogin`
--

INSERT INTO `dblogin` (`username`, `pw`, `NIK`, `nomorhp`, `privilege`) VALUES
('al', 'al', 12, 12, 0),
('el', 'el', 123, 123, 0),
('user', 'user', 11111, 11111, 0),
('admin', 'admin', 12345, 12345, 1),
('alfiano', 'alfiano', 112233, 112233, 0),
('test1', 'test1', 131313, 131313, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbdatavaksin`
--
ALTER TABLE `dbdatavaksin`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `dblogin`
--
ALTER TABLE `dblogin`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
