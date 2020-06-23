-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2020 pada 09.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panti_asuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `nip`, `nama_lengkap`, `username`, `password`, `level`, `stat`) VALUES
(1, 'NIP123', 'Riyan', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'administrator', 'aktif'),
(2, '1241asdas', 'Bagas', 'bagas', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `idanak` int(11) NOT NULL,
  `nis` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`idanak`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`) VALUES
(1, 'asdas', 'Adi Dermawan', 'Jakarta', '1999-01-01', 'Laki-laki', 'Jakarta'),
(3, 'asfd', 'dfsd', 'sdf', '1999-01-01', 'fsd', 'sdfwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asrama`
--

CREATE TABLE `asrama` (
  `idasrama` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `nama_asrama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asrama`
--

INSERT INTO `asrama` (`idasrama`, `idadmin`, `nama_asrama`, `alamat`, `no_telp`) VALUES
(1, 1, 'Asrama 11', 'satu', '0798'),
(2, 2, 'Asrama 12', 'a2', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `iddonatur` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`iddonatur`, `email`, `password`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'andre@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Andre A', 'Jakarta Selatan', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_donasi`
--

CREATE TABLE `konfirmasi_donasi` (
  `idkonfirmasi` int(11) NOT NULL,
  `idtrans` int(11) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `norek` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi_donasi`
--

INSERT INTO `konfirmasi_donasi` (`idkonfirmasi`, `idtrans`, `tgl_transfer`, `nama_bank`, `norek`) VALUES
(1, 1, '2020-06-16', 'BNIa', 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `gbr`) VALUES
(6, 'a', '<div class=\"card-body\">\r\n<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis</p>\r\n<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis</p>\r\n<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis</p>\r\n<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis</p>\r\n</div>', '2020-06-16', '1592548075_light_bulb_by_vvolny_d1s0ob2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_donasi`
--

CREATE TABLE `trans_donasi` (
  `idtrans` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `iddonatur` int(11) NOT NULL,
  `akad` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `doa` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nominal` int(200) NOT NULL,
  `amanah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trans_donasi`
--

INSERT INTO `trans_donasi` (`idtrans`, `tanggal`, `iddonatur`, `akad`, `status`, `doa`, `ket`, `jenis_barang`, `nominal`, `amanah`) VALUES
(1, '2020-06-16', 1, 'aaa', 'b', 'c', 'd', 'e', 2000000, 'f');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`idanak`);

--
-- Indeks untuk tabel `asrama`
--
ALTER TABLE `asrama`
  ADD PRIMARY KEY (`idasrama`),
  ADD KEY `fk_asrama_admin` (`idadmin`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`iddonatur`);

--
-- Indeks untuk tabel `konfirmasi_donasi`
--
ALTER TABLE `konfirmasi_donasi`
  ADD PRIMARY KEY (`idkonfirmasi`),
  ADD KEY `fk_trans_donasi_konfirmasi` (`idtrans`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trans_donasi`
--
ALTER TABLE `trans_donasi`
  ADD PRIMARY KEY (`idtrans`),
  ADD KEY `fk_donasi_donatur` (`iddonatur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `idanak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `asrama`
--
ALTER TABLE `asrama`
  MODIFY `idasrama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `iddonatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_donasi`
--
ALTER TABLE `konfirmasi_donasi`
  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `trans_donasi`
--
ALTER TABLE `trans_donasi`
  MODIFY `idtrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `asrama`
--
ALTER TABLE `asrama`
  ADD CONSTRAINT `fk_asrama_admin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi_donasi`
--
ALTER TABLE `konfirmasi_donasi`
  ADD CONSTRAINT `fk_trans_donasi_konfirmasi` FOREIGN KEY (`idtrans`) REFERENCES `trans_donasi` (`idtrans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `trans_donasi`
--
ALTER TABLE `trans_donasi`
  ADD CONSTRAINT `fk_donasi_donatur` FOREIGN KEY (`iddonatur`) REFERENCES `donatur` (`iddonatur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
