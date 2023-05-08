-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 14.59
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
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `Id_mhs` int NOT NULL AUTO_INCREMENT,
  `Nama_mhs` varchar(50) NOT NULL,
  `No_telp` bigint NOT NULL,
  `Alamat` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id_mhs`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`Id_mhs`, `Nama_mhs`, `No_telp`, `Alamat`, `Email`, `Created_date`, `Status`) VALUES
(15, 'joyo', 81316133984, 'griya 3', 'nurdiansyahjoyo@gmail.com', '2023-05-04 18:21:11', 0),
(16, 'joyo', 81316133984, 'griya 3', 'nurdiansyahjoyo@gmail.com', '2023-05-04 18:23:33', 0),
(17, 'joyo', 81316133984, 'griya 3', 'nurdiansyahjoyo@gmail.com', '2023-05-04 18:24:57', 0),
(18, 'adam', 91316663984, 'perum konohagakure', 'adamfahrisal26@gmail.com', '2023-05-04 18:25:42', 0),
(19, 'adam', 91316663984, 'perum konohagakure', 'adamfahrisal26@gmail.com', '2023-05-04 18:27:26', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
