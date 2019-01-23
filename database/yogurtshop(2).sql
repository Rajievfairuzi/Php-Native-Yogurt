-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2019 pada 15.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogurtshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `username`, `password`) VALUES
(1, 'rajief ', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `judulBlog` varchar(255) NOT NULL,
  `isiBlog` varchar(500) NOT NULL,
  `tglBlog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fotoBlog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`idBlog`, `judulBlog`, `isiBlog`, `tglBlog`, `fotoBlog`) VALUES
(7, 'NEW CHILLS FOR SUMMER', 'You can replace all this text with your own text. You can remove any link to our website from this website template', '2019-01-23 08:52:40', '23012019155240new-chills.png'),
(8, 'BERRIES ON THE GROVE', 'You can replace all this text with your own text. You can remove any link to our website from this website template', '2019-01-23 08:53:03', '23012019155303berries.png'),
(11, 'ON THE DIET', 'You can replace all this text with your own text. You can remove any link to our website from this website template', '2019-01-23 08:53:26', '23012019155326on-diet.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(255) NOT NULL,
  `ketKategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`, `ketKategori`) VALUES
(6, 'All Time Classic', 'This website template has been designed by freewebsitetemplates.com for you, for free.'),
(8, 'Berry Special', 'This website template has been designed by freewebsitetemplates.com for you, for free.'),
(9, 'Fruit Blast', 'This website template has been designed by freewebsitetemplates.com for you, for free.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `idPesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`idPesan`, `nama`, `email`, `subject`, `isi`, `tgl`) VALUES
(5, 'rajief', 'arajief@gmail.com', 'sdfa', 'adfadf', '2019-01-23 07:48:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(255) NOT NULL,
  `ketProduk` text NOT NULL,
  `fotoProduk` varchar(255) NOT NULL,
  `idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `ketProduk`, `fotoProduk`, `idKategori`) VALUES
(46, 'Mango', '100% dari indonesia', '23012019154048mango.jpg', 6),
(47, 'Cantaloupe', 'Terbuat dari susu', '23012019154207cantaloupe.jpg', 8),
(48, 'Kiwi', '100% dari indonesia', '23012019154302kiwi.jpg', 9),
(49, 'BLACKBERRY', 'Terbuat dari susu dan buah blackberry', '23012019154326blackberry.jpg', 9),
(50, 'STRAWBERRY 	', 'Terbuat dari bahan pilihan dan sehat', '23012019154353strawberry.jpg', 9),
(51, 'BLUEBERRY 	', 'Terbuat dari bahan pilihan dan hiegenis', '23012019154438blueberry.jpg', 9),
(52, 'GRAPES 	', 'Terbuat dari bahan pilihan berkualitas Tingg', '23012019154508grapes.jpg', 9),
(53, 'GREEN APPLE 	', 'Terbuat dari susu dan buah segar', '23012019154523green-apple.jpg', 9),
(54, 'PINEAPPLE 	', 'Terbuat dari susu dan buah import', '23012019154540pineapple.jpg', 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `produk_ibfk_1` (`idKategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
