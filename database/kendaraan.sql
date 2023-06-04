-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 00.30
-- Versi server: 8.0.31
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE IF NOT EXISTS `kendaraan` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Merk` varchar(50) DEFAULT NULL,
  `Tipe` varchar(50) DEFAULT NULL,
  `Harga` decimal(18,2) DEFAULT NULL,
  `Warna` varchar(20) DEFAULT NULL,
  `Tahun` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`ID`, `Merk`, `Tipe`, `Harga`, `Warna`, `Tahun`) VALUES
(1, 'Toyota', 'Avanza', '200000000.00', 'putih', '2023'),
(2, 'Honda', 'CR-V', '350000000.00', 'merah', '2022'),
(3, 'Suzuki', 'Swift', '150000000.00', 'silver', '2021'),
(4, 'BMW', 'X5', '1000000000.00', 'doff', '2023'),
(5, 'Ford', 'Mustang', '700000000.00', 'abu', '2023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
