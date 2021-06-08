-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2021 pada 07.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_grup`
--

CREATE TABLE `tm_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_grup`
--

INSERT INTO `tm_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_user`
--

CREATE TABLE `tm_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_user`
--

INSERT INTO `tm_user` (`id`, `username`, `password`, `nama`, `id_grup`) VALUES
(1, 'admin1', '$2y$10$e7zXh3RO.46On1jp0zRzLuB7il5qg/rD3ZPquBtXbvB6On9WxuNhy', 'admin', 1),
(3, 'zoro', '$2y$10$/K3rgncAqYRq3I1lQjEtjeS3QgCxWXJCJMScdsbIBQahG.nsit6Z2', 'roronoa zoro', 2),
(4, 'sanji', '$2y$10$FbNHSCdITgoSr7YHd3FPFOXwCvo2RNcmieEJ18HsWx2MbNfH6uQjO', 'sanji vinsmoke', 2),
(6, 'e31191848', '$2y$10$jz/0GItGof3Iszz.TcZE5.ZTQmnYdm5//KqPmHv5QZgEezuZ6tCiG', 'Vian Azis', 2),
(9, 'vian', '$2y$10$8O5gtfY52Q2zm6t1D8ws7.Uni6rgvOeYtJiwLdodwqNwenvp3O1rK', 'vian', 1),
(10, 'user', '$2y$10$KBmnR5ExF226TgbzhJ85DervigXtKwXYHKv7T0ZFndsUS/o.M/VUu', 'Karyawan Vian', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grup` (`id_grup`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  ADD CONSTRAINT `tm_user_ibfk_1` FOREIGN KEY (`id_grup`) REFERENCES `tm_grup` (`id_grup`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
