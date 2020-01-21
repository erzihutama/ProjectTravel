-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21 Jan 2020 pada 15.25
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
  `forgotten_password_code` varchar(120) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `email`, `username`, `password`, `forgotten_password_code`) VALUES
(1, 'erzi', 'erzihutama1@gmail.com', 'erzi', 'd92f6b7a048044374b42816ac5edd3ef5f404b18', 'kdk51jaw'),
(2, 'Erzi hutama', 'Erzihutama@gmail.com', 'erzihutama', 'b521caa6e1db82e5a01c924a419870cb72b81635', 'fwjkBkf2'),
(4, 'Iqbal', 'Erzihutama@email.unikom.ac.id', 'iqbal', '23e638e46fcecede468000e6e74a816f2199350e', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `nama_agen`, `username`, `password`, `jenis_kelamin`, `email`, `no_telp`) VALUES
(1, 'erzi', 'erziagen', 'adea130ec676587fc109401ebca7a91cf71528ce', 'L', 'erzi@gmail.com', 18237812),
(2, 'ilhamagen', 'ilham', 'd677e7933c6096aff7078724da268899d8fca27f', 'L', 'ilham@gmail.com', 89898877);

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
-- Struktur dari tabel `haji`
--

DROP TABLE IF EXISTS `haji`;
CREATE TABLE IF NOT EXISTS `haji` (
  `id_haji` int(10) NOT NULL AUTO_INCREMENT,
  `harga` int(200) NOT NULL,
  `persyaratan` varchar(225) NOT NULL,
  `jadwal` date NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  PRIMARY KEY (`id_haji`),
  KEY `id_hotel` (`id_hotel`),
  KEY `id_paket` (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `intenary`
--

INSERT INTO `intenary` (`id_intenary`, `hari`, `keterangan`, `id_paket`) VALUES
(1, 'HARI 1', 'JAKARTA - JEDDAH - MAKKAH', 1),
(2, 'HARI 2', 'MAKKAH', 1),
(3, 'HARI 3', 'MAKKAH', 1),
(4, 'HARI 4', 'MAKKAH', 1),
(5, 'HARI 5 ', 'MAKKAH - MADINAH', 1),
(6, 'HARI 6', 'MADINAH', 1),
(7, 'HARI 7', 'MADINAH', 1),
(8, 'HARI 8 ', 'MADINAH - JAKARTA', 1),
(9, 'HARI 9 ', 'JAKARTA', 1),
(10, 'HARI 1', 'JAKARTA - MADINAH', 2),
(11, 'HARI 2', 'MADINAH', 2),
(12, 'HARI 3', 'MADINAH', 2),
(13, 'HARI 4', 'MADINAH', 2),
(14, 'HARI 5', 'MADINAH', 2),
(16, 'HARI 6', 'MADINAH - MAKKAH', 2),
(17, 'HARI 7', 'MAKKAH', 2),
(18, 'HARI 8', 'MAKKAH', 2),
(19, 'HARI 9', 'MAKKAH', 2),
(22, 'HARI 10', 'JAKARTA', 2),
(23, 'Hari 1', 'MADINAH', 3),
(24, 'HARI 1', 'Berjalan menuju mekah ', 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan`) VALUES
(1, 'PAKET 9 HARI', '3 MALAM DI MADINAH DAN 4 MALAM DI MEKAH'),
(2, 'paket 10 hari', '4 MALAM DI MADINAH DAN 4 MALAM DI MEKAH'),
(3, 'Paket 11 Hari', '4 MALAM DI MADINAH DAN 5 MALAM DI MEKAH'),
(4, 'PAKET 12 HARI', '5 MALAM DI MADINAH DAN 5 MALAM DI MEKAH'),
(5, 'Paket Haji', 'paket untuk naik haji\r\n');

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
(4, 'Dreamworld', 'DreamWorld dan Ewaagate Merupakan suatu perusahaan Penyedia Travel haji dan umarah.', 'SELAMAT DATANG', 'TOUR DENGAN AMAN DAN NYAMAN', 'TOUR DAN TRAVEL DENGAN  HARGA MURAH', 'asset2-min1.jpg', 'is1.jpg', 'asset3-min1.jpg', 'Menjadikan agen - agen haji dan umrah nyaman selama menunaikan haji', 'menjadikan dreamworld layanan travel umarah dan haji terbaik ', 'DreamWorld.com', 1);

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
(1, 4, 'Melayani Umat Dengan Sepenuh Hati', 'Pelayana terbaik', 'Dreamworld menyediakan  pelayanan maksimal dengan berbagai program yang menarik agar jamaah menjadi nyaman', 'travel umrah dan haji terbaik di indonesia', 'Penyedia paket Menarik', 'Dreamworld menyediakan paket menarik seputar biaya haji dan umrah dengan hotel berbintang 5.'),
(7, 4, 'travel umrah dan haji terbaik di indonesia', 'melayani umat dengan 3 s', 'Dreamworld akan melyani dengan salam sapa dan senyum  .', 'melayani umat dengan sepenuh hati', 'Simulasi Harga dengan nyata', 'Dreamworld menyediakan simulasi harga dengan transparan dan mampu di hitung sendiri oleh agen'),
(8, 4, 'dreamworld', 'Kualitas di utamakan', 'Dreamworld mengedepankan kualitas dan kenyamanan untuk jamaah sehingga jamaah menjadi nyaman.', 'Naik haji semudah jentikan jari', 'Umrah dengan mudah', 'dreamworld mewujudkan umrah  semudah jentikan jari');

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
(19, 4, 'bandung', '082180373931', 'dreamwordl@gmail.com', 'asda'),
(20, 4, 'Jakarta', '081289874840', 'dreamworldjkt@gmail.com', 'ASD'),
(21, 4, 'Makasar', '089837808779', 'Dreamworldmkr@gmail.com', 'ADFSAD');

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
-- Ketidakleluasaan untuk tabel `haji`
--
ALTER TABLE `haji`
  ADD CONSTRAINT `haji_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `haji_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

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
