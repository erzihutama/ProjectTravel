-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27 Sep 2019 pada 01.25
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

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'erzi', 'erzihutama1@gmail.com', 'erzi', 'adea130ec676587fc109401ebca7a91cf71528ce'),
(3, 'harrid', 'harrid@gmail.com', 'harrid', 'a317baa5e464a055801c250df6b30c03f754c754');

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

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `nama_agen`, `username`, `password`, `jenis_kelamin`, `email`, `no_telp`) VALUES
(1, 'erzi', 'erziagen', 'adea130ec676587fc109401ebca7a91cf71528ce', 'L', 'erzi@gmail.com', 18237812);

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

--
-- Dumping data untuk tabel `data_umrah`
--

INSERT INTO `data_umrah` (`id_data_umrah`, `airport_price`, `logistik`, `bus`, `driver_tip`, `hotel_handling`, `billboy`, `mutawwif`, `mutawwifa`, `muassasa`, `visa`) VALUES
(1, 90, 6, 2500, 250, 10, 300, 200, 150, 120, 560);

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

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `namahotel`, `deskripsi`, `id_kota`, `reguler_quad`, `requler_triple`, `reguler_double`, `high_quad`, `high_triple`, `high_double`) VALUES
(1, 'Al Marwah Rayhaan By Rotana', 'Hotel Al Marwah Rayhaan By Rotanaaaa', 1, 440, 540, 640, 560, 710, 860),
(2, 'Swissotel Maqam', 'Hotel Swissotel maqam', 1, 440, 540, 640, 560, 710, 860),
(3, 'Safwah Royale Orchid', 'hotel Safwah Royale Orchid', 1, 650, 800, 950, 670, 820, 970),
(4, 'Conrad Makkah', 'Hotel Conrad Makkah', 1, 630, 750, 870, 650, 770, 890),
(5, 'Hilton Convention', 'Hotel Hilton Convention', 1, 640, 550, 470, 490, 570, 660),
(6, 'Frontel (Ex Grand Murquir)', 'Hotel Frontel (Ex Grand Murquir)', 2, 550, 650, 750, 570, 670, 770),
(7, 'Millinium Al Aeqeqq', 'Hotel Millinium Al Aeqeqq', 2, 500, 600, 700, 520, 620, 720),
(8, 'Al Rawda Royal in', 'FB', 2, 450, 500, 550, 470, 520, 570),
(10, 'Leader Kareem', 'FB', 2, 450, 525, 600, 470, 545, 620),
(11, 'Al Haram', 'FB', 2, 600, 525, 450, 470, 545, 620),
(12, 'Red Sea', 'FB', 3, 200, 400, 450, 220, 420, 470),
(13, 'Ansar', 'FB', 3, 300, 400, 450, 320, 420, 470);

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

--
-- Dumping data untuk tabel `intenary`
--

INSERT INTO `intenary` (`id_intenary`, `hari`, `keterangan`, `id_paket`) VALUES
(1, 'HARI 1', 'JALAN- JALAN', 1),
(2, 'HARI 2 ', 'JALAN', 1),
(3, 'HARI 3', 'JALAN', 1),
(4, 'HARI 4', 'JALAN', 1),
(5, 'HARI 5 ', 'JALAN', 1),
(6, 'HARI 6', 'JALAN', 1),
(7, 'HARI 7', 'JALAN', 1),
(8, 'HARI 8 ', 'JALAN', 1),
(9, 'HARI 9 ', 'JALAN', 1),
(10, 'Hari 1', 'Qiyamul Lail dengan ustad', 2),
(11, 'hari 2', 'berjalan ke kota madinah', 2);

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

--
-- Dumping data untuk tabel `kota_hotel`
--

INSERT INTO `kota_hotel` (`id_kota`, `nama_kota`) VALUES
(1, 'MEKAH'),
(2, 'MADINAH'),
(3, 'JEDDAH');

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

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan`) VALUES
(1, 'PAKET 9 HARI', '3 MALAM DI MEKAH DAN 4 MALAM DI MADINAH'),
(2, 'paket 10 hari', '4 MALAM DI MADINAH DAN 4 MALAM DI MEKAH'),
(3, 'Paket 11 Hari', '4 MALAM DI MADINAH DAN 5 MALAM DI MEKAH'),
(4, 'PAKET 12 HARI', '5 MALAM DI MADINAH 5 MALAM DI MEKAH');

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

--
-- Dumping data untuk tabel `paketxhotel`
--

INSERT INTO `paketxhotel` (`id_paketXhotel`, `id_hotel`, `id_paket`) VALUES
(1, 1, 1),
(2, 2, 1);

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

--
-- Dumping data untuk tabel `profilweb`
--

INSERT INTO `profilweb` (`id_profil`, `judul_perusahaan`, `deskripsi_perusahaan`, `taglineweb1`, `taglineweb2`, `taglineweb3`, `taglineimage1`, `taglineimage2`, `taglineimage3`, `visi`, `misi`, `website`, `id_user`) VALUES
(4, 'Dreamworld', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po', 'SELAMAT DATANG', 'TOUR DENGAN AMAN DAN NYAMAN', 'TOUR DAN TRAVEL DENGAN  HARGA MURAH', 'asset2-min.jpg', 'is.jpg', 'asset3-min.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po', 'menjadikan dreamworld lebih baik', 'DreamWorld.com', 1);

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

--
-- Dumping data untuk tabel `profilweb_config`
--

INSERT INTO `profilweb_config` (`id_config`, `id_profil`, `service_tagline`, `service_judul`, `service_deskripsi`, `whychoose_tagline`, `whychoose_judul`, `whychoose_deskripsi`) VALUES
(1, 4, 'melayani sepenuh hati', 'judull choeses', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po', 'travel dan haji terbaik di indonesia', 'chose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po'),
(7, 4, 'melayani umat', 'service 3', 'dLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget p', 'karena kami yang terbaik', 'why 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po'),
(8, 4, 'dreamworld', 'pelayanan terbaik', 'mendapatkan pelayanan terbaik di masanya', 'lebih nyaman', 'mantapp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum, eros nec molestie bibendum, diam sapien eleifend nunc, sed malesuada dolor lacus id metus. Proin imperdiet sodales erat eget po');

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

--
-- Dumping data untuk tabel `profil_alamat`
--

INSERT INTO `profil_alamat` (`id_alamat`, `id_profil`, `alamat_perusahaan`, `telepon_perusahaan`, `email_perusahaan`, `maps`) VALUES
(19, 4, 'bandung', '087777272727', 'dreamwordl@dw.co', 'asda'),
(20, 4, 'ewaa gate', '0889898989', 'EWAGATE', 'ASD'),
(21, 4, 'HENGARAMANA', '098738', 'DEREAEA', 'ADFSAD');

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
-- Dumping data untuk tabel `tipehotel`
--

INSERT INTO `tipehotel` (`id_tipehotel`, `reguler_quad`, `requler_triple`, `reguler_double`, `high_quad`, `high_triple`, `high_double`, `id_hotel`) VALUES
(1, 0, 0, 0, 0, 0, 0, 1),
(2, 0, 0, 0, 0, 0, 0, 2),
(3, 0, 0, 0, 0, 0, 0, 3),
(4, 0, 0, 0, 0, 0, 0, 4),
(5, 0, 0, 0, 0, 0, 0, 5),
(6, 0, 0, 0, 0, 0, 0, 6),
(7, 123, 123, 31, 231, 213, 231, 7);

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
