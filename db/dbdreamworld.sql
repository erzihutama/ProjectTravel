-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01 Sep 2019 pada 09.18
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
  `judul_perusahaan` varchar(20) NOT NULL,
  `deskripsi_perusahaan` varchar(200) NOT NULL,
  `taglineweb1` varchar(50) NOT NULL,
  `taglineweb2` varchar(50) NOT NULL,
  `taglineweb3` varchar(50) NOT NULL,
  `taglineimage1` varchar(255) NOT NULL,
  `taglineimage2` varchar(255) NOT NULL,
  `taglineimage3` varchar(255) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `website` varchar(20) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profilweb`
--

INSERT INTO `profilweb` (`id_profil`, `judul_perusahaan`, `deskripsi_perusahaan`, `taglineweb1`, `taglineweb2`, `taglineweb3`, `taglineimage1`, `taglineimage2`, `taglineimage3`, `visi`, `misi`, `website`) VALUES
(4, 'Kostlab id saja', 'asda', 'asda', 'asd', 'asda', 'asda', 'sada', 'dsa', 'sadasd', 'masju', 'www.kostlab.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilweb_config`
--

DROP TABLE IF EXISTS `profilweb_config`;
CREATE TABLE IF NOT EXISTS `profilweb_config` (
  `id_config` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) DEFAULT NULL,
  `service_tagline` varchar(200) NOT NULL,
  `service_judul` varchar(50) NOT NULL,
  `service_deskripsi` varchar(200) NOT NULL,
  `whychoose_tagline` varchar(200) NOT NULL,
  `whychoose_judul` varchar(50) NOT NULL,
  `whychoose_deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_config`),
  KEY `id_profil` (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profilweb_config`
--

INSERT INTO `profilweb_config` (`id_config`, `id_profil`, `service_tagline`, `service_judul`, `service_deskripsi`, `whychoose_tagline`, `whychoose_judul`, `whychoose_deskripsi`) VALUES
(1, 4, 'sasa', 'sasa', 'sassa', 'sasa', 'msam', 'sadsd'),
(4, 4, 'asa', 'asas', 'as', 'as', 'as', 'as'),
(5, 4, 'memudahkan penerbangan', 'fleksibe', 'dramworld fleksiblel karena banyak hal', 'berupa isi dari sana', 'skaka', 'dfafsdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_alamat`
--

DROP TABLE IF EXISTS `profil_alamat`;
CREATE TABLE IF NOT EXISTS `profil_alamat` (
  `id_alamat` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) DEFAULT NULL,
  `alamat_perusahaan` varchar(200) NOT NULL,
  `telepon_perusahaan` varchar(200) NOT NULL,
  `email_perusahaan` varchar(200) NOT NULL,
  `maps` text NOT NULL,
  PRIMARY KEY (`id_alamat`),
  KEY `id_profil` (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_alamat`
--

INSERT INTO `profil_alamat` (`id_alamat`, `id_profil`, `alamat_perusahaan`, `telepon_perusahaan`, `email_perusahaan`, `maps`) VALUES
(14, 4, 'as', 'dasd', 'sad', 'sad'),
(17, 4, 'kp rambutan sayur', '08981660', 'dksafsa@gmail.com', 'adsf');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profilweb_config`
--
ALTER TABLE `profilweb_config`
  ADD CONSTRAINT `profilweb_config_ibfk_1` FOREIGN KEY (`id_profil`) REFERENCES `profilweb` (`id_profil`);

--
-- Ketidakleluasaan untuk tabel `profil_alamat`
--
ALTER TABLE `profil_alamat`
  ADD CONSTRAINT `profil_alamat_ibfk_1` FOREIGN KEY (`id_profil`) REFERENCES `profilweb` (`id_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
