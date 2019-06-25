-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2019 pada 17.18
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `binaandankaderldft`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bbq`
--

CREATE TABLE IF NOT EXISTS `bbq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `namamentor` varchar(100) NOT NULL,
  `waktubelajar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `bbq`
--

INSERT INTO `bbq` (`id`, `nama`, `jurusan`, `angkatan`, `nohp`, `namamentor`, `waktubelajar`) VALUES
(10, 'yuyu', 'S1-Teknik Informatika', 'Angkatan 2014', '990909', 'kjkj', 'jkjk'),
(12, 'rrr', 'S1-Teknik Elektro', 'Angkatan 2015', '56777777', 'ggg', 'hhh'),
(13, 'Alba purnama', 'S1-Teknik Informatika', 'Angkatan 2015', '555', 'Ikram', 'senin, pukul 08:00 Wita'),
(14, 'Alba purnama', 'S1-Teknik Informatika', 'Angkatan 2015', 'yyyy', 'Ikram', 'senin, pukul 08:00 Wita'),
(15, 'junaid', 'S1-Teknik Informatika', 'Angkatan 2015', '999999999', 'kamu', 'senin, pukul 08:00 Wita'),
(17, '', '------Pilih Jurusan------', 'Angkatan 2017', '', '', ''),
(19, 'www', 'S1-Teknik Elektro', 'Angkatan 2016', '123', 'ddd', 'ddd'),
(22, 'aco', 'sipil', '2018', '999', 'jjjj', '455'),
(23, 'Al-al', 's1-teknik informatika', '2015', '082316632502', 'ikram', 'kamis,pukul 21:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
