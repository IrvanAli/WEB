-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Januari 2017 jam 03:30
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pw2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(1) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`idlogin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL DEFAULT '',
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `jenkel` enum('0','1') NOT NULL DEFAULT '0',
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`) VALUES
('0111500382', 'Abdul Malik', '1970-01-01', '0', 'Jakarta Bagian Selatan'),
('0411534000', 'Budiono', '1986-01-01', '0', 'Bandung'),
('5222222222', 'sds', '1970-01-01', '0', 'dsdsd'),
('3712987398', 'julianto', '1994-05-06', '0', 'jl.tengraklek'),
('4832678462', 'samsul', '1981-11-08', '0', 'jl.redial');
