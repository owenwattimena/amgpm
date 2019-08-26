-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Agu 2019 pada 03.08
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amgpm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_bidang_3`
--

CREATE TABLE `informasi_bidang_3` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` varchar(2000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_bidang_3`
--

INSERT INTO `informasi_bidang_3` (`id`, `judul`, `konten`, `tanggal`) VALUES
(1, 'Informasi Ibadah', 'Syaloom civitas amgpm ...', '2019-08-16'),
(2, 'Ibadah Alfa Omega', 'Sehubungan dengan akan di ada adakan ibadah yang di laksanakan pada hari: \r\n\r\ndiharapkan untuk seluruh anggota untuk hadir, atas perhatianya saya ucapkan terima kasih.', '2019-08-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(11) NOT NULL,
  `bidang` varchar(225) NOT NULL,
  `konten` varchar(2000) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `bidang`, `konten`, `tanggal`, `waktu`) VALUES
(1, 'bidang 1', 'jangan lupa membawa database', '2019-08-08', '20:47:00'),
(2, 'bidang 2', 'angkat sampah hari ini jam 5 sore. diharap jangan terlambat', '2019-08-16', '08:38:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` int(1) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nama`, `username`, `password`, `level`, `time`) VALUES
(1, 'Charla', 'Charlie', '$2y$10$yZEil887Ng0oII7iWrP6QO3.mXVwv0tK4/ZHUw3Q1iRRgY8tetSvu', 1, '2019-08-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi_bidang_3`
--
ALTER TABLE `informasi_bidang_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi_bidang_3`
--
ALTER TABLE `informasi_bidang_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
