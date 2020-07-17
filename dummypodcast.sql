-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 05:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummypodcast`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `essay` text NOT NULL,
  `foto1` varchar(32) NOT NULL,
  `foto2` varchar(32) NOT NULL,
  `foto3` varchar(32) NOT NULL,
  `jenis_artikel` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `fk_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `komentar` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL,
  `fk_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spotify`
--

CREATE TABLE `spotify` (
  `id_spotify` int(11) NOT NULL,
  `link_spotify` varchar(512) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tangga_lagu`
--

CREATE TABLE `tangga_lagu` (
  `id_lagu` int(11) NOT NULL,
  `link_lagu` text NOT NULL,
  `judul_lagu` varchar(128) NOT NULL,
  `genre_lagu` varchar(64) NOT NULL,
  `artist_lagu` varchar(64) NOT NULL,
  `kategori_lagu` varchar(32) NOT NULL,
  `status_lagu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangga_lagu`
--

INSERT INTO `tangga_lagu` (`id_lagu`, `link_lagu`, `judul_lagu`, `genre_lagu`, `artist_lagu`, `kategori_lagu`, `status_lagu`) VALUES
(1, '7ytR5pFWmSjzHJIeQkgog4?si=cpla3_ZWR1SLBGLtx89NlA', 'When I was Your Man', 'POP', 'Jeson Nerullo', 'Romans', 1),
(2, '0ZoBl7pWhdjnj4eIe9I11o?si=mxPrDpLzTGazonvMnm0j8g', 'Rockstar', 'Rock', 'Roddy Rich', 'Indie', 0),
(3, '0ZoBl7pWhdjnj4eIe9I11o?si=mxPrDpLzTGazonvMnm0j8g', 'MariPosa', 'POP', 'Bunga Cinta Lest', 'Romans', 2),
(4, '466cKvZn1j45IpxDdYZqdA?si=O2So-ZjRTkWrBA-v_87KuQ', 'Los Dol', 'Dangdut', 'Deny Ceguk', 'Dangdut', 1),
(5, '7ksK7gpPDFdY4JLHr1hKfY?si=b34aApdJSXyMzAoEwYQOlg', 'Lathi', 'Pop', 'suhadi', 'syahdu', 2),
(6, '3XJ9dvjhpxh49PyjRdn1Lu?si=x5TU9R3XTvOADbDLytHlew', 'Closure', 'pop', 'twenty', 'Indie', 0),
(7, '4msighkG4nKOw60aoN7lV7?si=B94QNV5fT-G_q3vG_0UXRw', 'HINGGA', 'POP', 'Michael', 'Senja', 1),
(8, '4bZzHFP9VFX7HsyPomDwuE?si=LLy-3jUbQ66YakhL7cUuLQ', 'Dada Sayang', 'Pop Rock', 'saggy dog', 'senjamu', 2),
(9, '6cqIxECF2y28W51gAdvzmU?si=AK5D6dztQbqdwBUH3iN7Eg', 'Semua Sayang', 'dangdut', 'denny caknun', 'Siang malam', 0),
(10, '0ZoBl7pWhdjnj4eIe9I11o?si=mxPrDpLzTGazonvMnm0j8g', 'Eoke', 'alm Mbah Surip', 'Suripku', 'reggea', 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id_youtube` int(11) NOT NULL,
  `link_youtube` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `FK_akun` (`fk_akun`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_artikel` (`fk_artikel`);

--
-- Indexes for table `spotify`
--
ALTER TABLE `spotify`
  ADD PRIMARY KEY (`id_spotify`);

--
-- Indexes for table `tangga_lagu`
--
ALTER TABLE `tangga_lagu`
  ADD PRIMARY KEY (`id_lagu`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id_youtube`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spotify`
--
ALTER TABLE `spotify`
  MODIFY `id_spotify` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangga_lagu`
--
ALTER TABLE `tangga_lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id_youtube` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_akun` FOREIGN KEY (`fk_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_artikel` FOREIGN KEY (`fk_artikel`) REFERENCES `artikel` (`id_artikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
