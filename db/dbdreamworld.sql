-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30 Agu 2019 pada 04.51
-- Versi Server: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdreamworld`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilweb`
--

DROP TABLE IF EXISTS `profilweb`;
CREATE TABLE IF NOT EXISTS `profilweb` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `id_config` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `judul_perusahaan` varchar(20) NOT NULL,
  `deskripsi_perusahaan` varchar(200) NOT NULL,
  `taglineweb1` varchar(50) NOT NULL,
  `taglineweb2` varchar(50) NOT NULL,
  `taglineweb3` varchar(50) NOT NULL,
  `taglineimage1` text NOT NULL,
  `taglineimage2` text NOT NULL,
  `taglineimage3` text NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `website` varchar(20) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `RelasiProfilConfig` (`id_config`),
  KEY `RelasiProfilAlamat` (`id_alamat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilweb_config`
--

DROP TABLE IF EXISTS `profilweb_config`;
CREATE TABLE IF NOT EXISTS `profilweb_config` (
  `id_config` int(11) NOT NULL AUTO_INCREMENT,
  `service_tagline` varchar(200) NOT NULL,
  `service_judul` varchar(50) NOT NULL,
  `service_deskripsi` varchar(200) NOT NULL,
  `whychoose_tagline` varchar(200) NOT NULL,
  `whychoose_judul` varchar(50) NOT NULL,
  `whychoose_deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_config`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_alamat`
--

DROP TABLE IF EXISTS `profil_alamat`;
CREATE TABLE IF NOT EXISTS `profil_alamat` (
  `id_alamat` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_perusahaan` varchar(200) NOT NULL,
  `telepon_perusahaan` varchar(200) NOT NULL,
  `email_perusahaan` varchar(200) NOT NULL,
  `maps` text NOT NULL,
  PRIMARY KEY (`id_alamat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profilweb`
--
ALTER TABLE `profilweb`
  ADD CONSTRAINT `RelasiProfilAlamat` FOREIGN KEY (`id_alamat`) REFERENCES `profil_alamat` (`id_alamat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RelasiProfilConfig` FOREIGN KEY (`id_config`) REFERENCES `profilweb_config` (`id_config`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
