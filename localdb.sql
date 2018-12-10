-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:49269
-- Generation Time: Dec 10, 2018 at 05:25 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kartta`
--

CREATE TABLE `kartta` (
  `Kartta_ID` int(11) NOT NULL,
  `Nimi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kartta`
--

INSERT INTO `kartta` (`Kartta_ID`, `Nimi`) VALUES
(12, 'cache'),
(13, 'dust2'),
(14, 'inferno'),
(15, 'mirage'),
(16, 'nuke'),
(17, 'overpass'),
(18, 'train');

-- --------------------------------------------------------

--
-- Table structure for table `kuvaus`
--

CREATE TABLE `kuvaus` (
  `Kuvaus_ID` int(11) NOT NULL,
  `Kuvaus` varchar(200) DEFAULT NULL,
  `Ase` varchar(45) DEFAULT NULL,
  `Tapot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kuvaus`
--

INSERT INTO `kuvaus` (`Kuvaus_ID`, `Kuvaus`, `Ase`, `Tapot`) VALUES
(1, 'clutch', 'ak', 4),
(12, 'clutc', 'ak', 2),
(13, 'clutc', 'ak', 3),
(14, 'clutc', 'ak', 4),
(15, 'clutc', 'ak', 5),
(21, 'clutc', 'awp', 1),
(22, 'clutc', 'awp', 2),
(23, 'clutc', 'awp', 3),
(24, 'clutc', 'awp', 4),
(25, 'clutc', 'awp', 5),
(31, 'clutc', 'deagle', 1),
(32, 'clutc', 'deagle', 2),
(33, 'clutc', 'deagle', 3),
(34, 'clutc', 'deagle', 4),
(35, 'clutc', 'deagle', 5),
(41, 'clutc', 'm4', 1),
(42, 'clutc', 'm4', 2),
(43, 'clutc', 'm4', 3),
(44, 'clutc', 'm4', 4),
(45, 'clutc', 'm4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pelaajat`
--

CREATE TABLE `pelaajat` (
  `Pelaaja_ID` int(11) NOT NULL,
  `Nimi` varchar(45) DEFAULT NULL,
  `Nick` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelaajat`
--

INSERT INTO `pelaajat` (`Pelaaja_ID`, `Nimi`, `Nick`) VALUES
(12, 'jööns', 'JöönsMO'),
(13, 'pullis', 'PulliS');

-- --------------------------------------------------------

--
-- Table structure for table `tiedostot`
--

CREATE TABLE `tiedostot` (
  `Tiedosto_ID` int(11) NOT NULL,
  `Pelaajat_Pelaaja_ID` int(11) NOT NULL,
  `Kartta_Kartta_ID` int(11) NOT NULL,
  `Kuvaus_Kuvaus_ID` int(11) NOT NULL,
  `Nimi` varchar(90) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `Ase` varchar(45) NOT NULL,
  `Tapot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiedostot`
--

INSERT INTO `tiedostot` (`Tiedosto_ID`, `Pelaajat_Pelaaja_ID`, `Kartta_Kartta_ID`, `Kuvaus_Kuvaus_ID`, `Nimi`, `Ase`, `Tapot`) VALUES
(1, 12, 16, 1, 'youtube.com', 'AWP', 13),
(2, 13, 14, 1, 'https://www.youtube.com/watch?v=Ad_Pr5y3N0I', 'AK-47', 14),
(3, 13, 15, 1, 'https://www.youtube.com/watch?v=zL3pMOZOvRE', 'AK-47', 15),
(4, 12, 14, 1, 'https://www.youtube.com/watch?v=RpAqL7l8ai8', 'AWP M4', 15),
(5, 12, 12, 1, 'https://www.youtube.com/watch?v=R7k3nZHCzf4', 'AK-47', 15),
(6, 12, 18, 1, 'https://www.youtube.com/watch?v=EQXgSDXPljM', 'AWP', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartta`
--
ALTER TABLE `kartta`
  ADD PRIMARY KEY (`Kartta_ID`);

--
-- Indexes for table `kuvaus`
--
ALTER TABLE `kuvaus`
  ADD PRIMARY KEY (`Kuvaus_ID`);

--
-- Indexes for table `pelaajat`
--
ALTER TABLE `pelaajat`
  ADD PRIMARY KEY (`Pelaaja_ID`);

--
-- Indexes for table `tiedostot`
--
ALTER TABLE `tiedostot`
  ADD PRIMARY KEY (`Tiedosto_ID`),
  ADD KEY `fk_Tiedostot_Pelaajat1` (`Pelaajat_Pelaaja_ID`),
  ADD KEY `fk_Tiedostot_Kartta1` (`Kartta_Kartta_ID`),
  ADD KEY `fk_Tiedostot_Kuvaus1` (`Kuvaus_Kuvaus_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
