-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2023 pada 04.55
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bid2_pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_gender`
--

CREATE TABLE `pm_gender` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ipm`
--

CREATE TABLE `pm_ipm` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `tgl_kasus` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_kebudayaan`
--

CREATE TABLE `pm_kebudayaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_kemiskinan`
--

CREATE TABLE `pm_kemiskinan` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `tgl_kasus` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_kla`
--

CREATE TABLE `pm_kla` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_pendidikan`
--

CREATE TABLE `pm_pendidikan` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_atm`
--

CREATE TABLE `p_atm` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_germas`
--

CREATE TABLE `p_germas` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_germas`
--

INSERT INTO `p_germas` (`id`, `judul`, `author`, `text`, `data`, `tanggal`) VALUES
(4, 'aku', 'dia', 'aku', 'ppm new.ico', '2023-09-02'),
(5, 'Germas 2021', 'Dhea', 'cbscbajcbucb', 'Transkip.pdf', '2023-09-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_kotasehat`
--

CREATE TABLE `p_kotasehat` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_ranham`
--

CREATE TABLE `p_ranham` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `tgl_kasus` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_sdg`
--

CREATE TABLE `p_sdg` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_stunting`
--

CREATE TABLE `p_stunting` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `tgl_kasus` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `text` varchar(225) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_stunting`
--

INSERT INTO `p_stunting` (`id`, `judul`, `author`, `tgl_kasus`, `jumlah`, `text`, `data`, `tanggal`) VALUES
(1, 'Stunting 2020', 'Firdha Arga', '2020-09-08', 20, 'cdjvdnvdbuxjb', 'TUGAS KAJIAN  JURNAL', '2023-09-12'),
(2, 'Stunting 2020', 'Aku', '2020-02-13', 13, 'cjasnvncjs', '', '2023-09-12'),
(3, 'Stunting 2021', 'Aji Chay', '2021-01-12', 22, 'vfdvkmvjdfnsj', 'isdkkt8b.png', '2023-09-13'),
(4, 'Stunting 2022', 'Ilman Mgang', '2022-11-14', 10, ' jdv jd vjd vjkd vjd', 'ttd.png', '2023-09-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nip`, `password`) VALUES
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pm_gender`
--
ALTER TABLE `pm_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_ipm`
--
ALTER TABLE `pm_ipm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_kebudayaan`
--
ALTER TABLE `pm_kebudayaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_kemiskinan`
--
ALTER TABLE `pm_kemiskinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_kla`
--
ALTER TABLE `pm_kla`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_pendidikan`
--
ALTER TABLE `pm_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_atm`
--
ALTER TABLE `p_atm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_germas`
--
ALTER TABLE `p_germas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_kotasehat`
--
ALTER TABLE `p_kotasehat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_ranham`
--
ALTER TABLE `p_ranham`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_sdg`
--
ALTER TABLE `p_sdg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_stunting`
--
ALTER TABLE `p_stunting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pm_gender`
--
ALTER TABLE `pm_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_ipm`
--
ALTER TABLE `pm_ipm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_kebudayaan`
--
ALTER TABLE `pm_kebudayaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_kemiskinan`
--
ALTER TABLE `pm_kemiskinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_kla`
--
ALTER TABLE `pm_kla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_pendidikan`
--
ALTER TABLE `pm_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_atm`
--
ALTER TABLE `p_atm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_germas`
--
ALTER TABLE `p_germas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `p_kotasehat`
--
ALTER TABLE `p_kotasehat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_ranham`
--
ALTER TABLE `p_ranham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_sdg`
--
ALTER TABLE `p_sdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p_stunting`
--
ALTER TABLE `p_stunting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
