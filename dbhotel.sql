-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 09.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `idjeniskamar` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`idjeniskamar`, `jenis`) VALUES
(1, 'Single Deluxe Room'),
(2, 'Double Deluxe Room'),
(3, 'Honeymoon Sweet'),
(4, 'Economy Double');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` int(11) NOT NULL,
  `idjeniskamar` int(11) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`idkamar`, `idjeniskamar`, `nama_kamar`, `harga`) VALUES
(1, 1, 'SD1', '500000'),
(3, 1, 'SD2', '500000'),
(4, 1, 'SD3', '500000'),
(5, 1, 'SD4', '500000'),
(6, 2, 'DD1', '900000'),
(7, 2, 'DD2', '900000'),
(8, 2, 'DD3', '900000'),
(12, 2, 'DD4', '900000'),
(13, 3, 'HS1', '1500000'),
(14, 3, 'HS2', '1500000'),
(15, 3, 'HS3', '1500000'),
(16, 3, 'HS4', '1500000'),
(17, 4, 'ED1', '600000'),
(18, 4, 'ED2', '600000'),
(19, 4, 'ED3', '600000'),
(21, 4, 'ED4', '600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `email`, `telepon`) VALUES
(35, 'NAUFAL ASYRAF ', 'naufalasyraf68@gmail.com', '081372720114'),
(36, 'Rita', 'rita@gmail.com', '081372720114'),
(37, 'NAUFAL ASYRAF IDRISA', 'naufalasyraf68@gmail.com', '081372720114'),
(38, 'Mak Buyuang', 'naufalasyraf68@gmail.com', '3242334'),
(39, 'NAUFAL ASYRAF ', 'naufalasyraf68@gmail.com', '081372720114'),
(40, 'haaha', 'jahaa@yahoo.com', '08124612324'),
(41, 'Abdul Muthalib', 'abdul@gmail.com', '081234424284'),
(42, 'NAUFAL ASYRAF ', 'naufalasyraf68@gmail.com', '081372720114'),
(43, 'Seuhendra Setiawan', 'seuuuu@gmail.com', '081238482848'),
(44, 'Dinani', 'dinnai@gmail.com', '082453483498'),
(45, 'AHMAD DARMAWAN', 'darmawan@gmail.com', '083657384734'),
(46, 'MAYANG DODY', 'maydod@gmail.com', '08127598395'),
(47, 'RATNA MAYU', 'ratmay@gmail.com', '081263728472'),
(48, 'TOMO YAMA', 'tmoy@yahoo.com', '08135462843'),
(49, 'YASUKE IBAWA', 'yasbuw@yahoo.com', '085263535655'),
(50, 'ASTUTI MILA SARI', 'astutmil@yahoo.com', '085958593956'),
(51, 'Ridho Fachrozi', 'rido@gmail.com', '081247462843'),
(52, '', '', ''),
(53, 'vicky', 'piki@gmail.com', '087429492473'),
(54, 'NAUFAL ASYRAF IDRISA', 'naufalasyraf68@gmail.com', '081372720114');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpembayaran` int(11) NOT NULL,
  `idreservasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `norek` varchar(15) NOT NULL,
  `namarek` varchar(50) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `idreservasi`, `nama`, `norek`, `namarek`, `total_bayar`) VALUES
(12, 17, 'Rita', '23432', 'djqswkd', 24000000),
(19, 23, 'NAUFAL ASYRAF ', '110209375932', 'NAUFAL ASYRAF IDRISA', 1000000),
(20, 24, 'Seuhendra Setiawan', '083472848284', 'SEUHENDRA SETI', 600000),
(21, 25, 'Dinani', '54829473487', 'DINNINA', 1800000),
(22, 26, 'AHMAD DARMAWAN', '5548394758', 'AHMAD DARMAWAN', 1500000),
(24, 28, 'RATNA MAYU', '82374038234', 'RATNA MAYU', 900000),
(25, 29, 'TOMO YAMA', '76638483841', 'TOMO YAMA', 1200000),
(26, 30, 'YASUKE IBAWA', '875382364', 'YASUKE IBAWA NATSUMARI', 4500000),
(27, 31, 'ASTUTI MILA SARI', '88875347254', 'ASTUTI MILA SARI', 500000),
(28, 32, 'NAUFAL ASYRAF IDRISA', '110278352842', 'NAUFAL ASYRAF IDRISA', 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `idreservasi` int(11) NOT NULL,
  `idkamar` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tglcheckin` date NOT NULL,
  `tglcheckout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`idreservasi`, `idkamar`, `idpelanggan`, `tglcheckin`, `tglcheckout`) VALUES
(17, 14, 36, '2022-01-03', '2022-01-19'),
(23, 3, 35, '2022-01-14', '2022-01-16'),
(24, 18, 43, '2022-01-22', '2022-01-23'),
(25, 6, 44, '2022-01-29', '2022-01-31'),
(26, 5, 45, '2022-01-13', '2022-01-16'),
(28, 8, 47, '2022-01-07', '2022-01-08'),
(29, 19, 48, '2022-01-14', '2022-01-16'),
(30, 13, 49, '2022-01-12', '2022-01-15'),
(31, 3, 50, '2022-01-15', '2022-01-16'),
(32, 15, 37, '2022-01-13', '2022-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('admin', 'admin', 'admin@gmail.com'),
('naufalasyraf', '12345678', 'naufalasyraf@gmail.com'),
('user', 'user', 'user1@gmail.com'),
('user2', 'user2', 'user2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`idjeniskamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`),
  ADD KEY `idjeniskamar` (`idjeniskamar`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`),
  ADD KEY `idreservasi` (`idreservasi`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idreservasi`),
  ADD KEY `idkamar` (`idkamar`),
  ADD KEY `idpelanggan` (`idpelanggan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `idjeniskamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `idkamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `idreservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`idjeniskamar`) REFERENCES `jenis_kamar` (`idjeniskamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idreservasi`) REFERENCES `reservasi` (`idreservasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_3` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_4` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
