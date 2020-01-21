-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30 Des 2019 pada 08.04
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
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

DROP TABLE IF EXISTS `agen`;
CREATE TABLE IF NOT EXISTS `agen` (
  `id_agen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_agen` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','p','','') NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_telp` int(13) NOT NULL,
  PRIMARY KEY (`id_agen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_umrah`
--

DROP TABLE IF EXISTS `data_umrah`;
CREATE TABLE IF NOT EXISTS `data_umrah` (
  `id_data_umrah` int(11) NOT NULL AUTO_INCREMENT,
  `airport_price` int(11) NOT NULL,
  `logistik` int(11) NOT NULL,
  `bus` int(11) NOT NULL,
  `driver_tip` int(11) NOT NULL,
  `hotel_handling` int(11) NOT NULL,
  `billboy` int(11) NOT NULL,
  `mutawwif` int(11) NOT NULL,
  `mutawwifa` int(11) NOT NULL,
  `muassasa` int(11) NOT NULL,
  `visa` int(11) NOT NULL,
  PRIMARY KEY (`id_data_umrah`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `namahotel` varchar(255) NOT NULL,
  `deskripsi` text,
  `id_kota` int(11) DEFAULT NULL,
  `reguler_quad` int(11) NOT NULL,
  `requler_triple` int(11) NOT NULL,
  `reguler_double` int(11) NOT NULL,
  `high_quad` int(11) NOT NULL,
  `high_triple` int(11) NOT NULL,
  `high_double` int(11) NOT NULL,
  PRIMARY KEY (`id_hotel`),
  KEY `id_kota` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `intenary`
--

DROP TABLE IF EXISTS `intenary`;
CREATE TABLE IF NOT EXISTS `intenary` (
  `id_intenary` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_intenary`),
  KEY `id_paket` (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota_hotel`
--

DROP TABLE IF EXISTS `kota_hotel`;
CREATE TABLE IF NOT EXISTS `kota_hotel` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

DROP TABLE IF EXISTS `paket`;
CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketxhotel`
--

DROP TABLE IF EXISTS `paketxhotel`;
CREATE TABLE IF NOT EXISTS `paketxhotel` (
  `id_paketXhotel` int(11) NOT NULL AUTO_INCREMENT,
  `id_hotel` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paketXhotel`),
  KEY `id_paket` (`id_paket`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `RelasiAdmin` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilweb_config`
--

DROP TABLE IF EXISTS `profilweb_config`;
CREATE TABLE IF NOT EXISTS `profilweb_config` (
  `id_config` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) DEFAULT NULL,
  `service_tagline` varchar(200) DEFAULT NULL,
  `service_judul` varchar(50) NOT NULL,
  `service_deskripsi` varchar(200) NOT NULL,
  `whychoose_tagline` varchar(200) DEFAULT NULL,
  `whychoose_judul` varchar(50) NOT NULL,
  `whychoose_deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_config`),
  KEY `id_profil` (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipehotel`
--

DROP TABLE IF EXISTS `tipehotel`;
CREATE TABLE IF NOT EXISTS `tipehotel` (
  `id_tipehotel` int(11) NOT NULL AUTO_INCREMENT,
  `reguler_quad` int(11) NOT NULL,
  `requler_triple` int(11) NOT NULL,
  `reguler_double` int(11) NOT NULL,
  `high_quad` int(11) NOT NULL,
  `high_triple` int(11) NOT NULL,
  `high_double` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id_tipehotel`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota_hotel` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `intenary`
--
ALTER TABLE `intenary`
  ADD CONSTRAINT `intenary_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `paketxhotel`
--
ALTER TABLE `paketxhotel`
  ADD CONSTRAINT `paketxhotel_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paketxhotel_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profilweb`
--
ALTER TABLE `profilweb`
  ADD CONSTRAINT `RelasiAdmin` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Ketidakleluasaan untuk tabel `tipehotel`
--
ALTER TABLE `tipehotel`
  ADD CONSTRAINT `tipehotel_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
