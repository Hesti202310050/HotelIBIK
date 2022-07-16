-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2022 pada 15.41
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ballroom`
--

CREATE TABLE `tbl_ballroom` (
  `id_ballroom` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ballroom`
--

INSERT INTO `tbl_ballroom` (`id_ballroom`, `nama`, `harga`, `kapasitas`, `jumlah`) VALUES
(1, 'Ballroom Anggrek', 2000000, 100, 2),
(2, 'test1', 1000, 20, 4),
(3, 'test2', 3000, 20, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `kode_booking` varchar(35) NOT NULL,
  `nama_pemesan` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nama_rooms` varchar(35) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `lama` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `kode_booking`, `nama_pemesan`, `email`, `nama_rooms`, `tgl_masuk`, `tgl_keluar`, `lama`, `total_harga`, `status`) VALUES
(4, 'BK00001', 'Hesti', 'Hesti@gmail.com', 'Superior Rooms', '2022-07-15', '2022-07-16', 1, 400000, 'Belum Bayar'),
(28, 'BK00005', 'sad', 'SAdas@asdas', 'Ruang Rinjani', '2022-07-16', '2022-07-18', 2, 900000, 'Belum Bayar'),
(29, 'BK00006', 'hesti', 'SAdas@asdas', 'Ballroom Anggrek', '2022-07-18', '2022-07-22', 4, 8000000, 'Belum Bayar'),
(34, 'BK00007', 'Rizal', 'testakun9890@gmail.com', 'Superior Rooms', '2022-07-16', '2022-07-17', 1, 400000, 'Belum Bayar'),
(35, 'BK00008', 'hesti', 'testakun9890@gmail.com', 'Ruang Rinjani', '2022-07-16', '2022-07-17', 1, 450000, 'Belum Bayar'),
(36, 'BK00009', 'astri', 'testakun9890@gmail.com', 'Ballroom Anggrek', '2022-07-16', '2022-07-18', 2, 4000000, 'Belum Bayar'),
(37, 'BK00010', 'Rizal', 'testakun9890@gmail.com', 'Superior Rooms', '2022-07-16', '2022-07-17', 1, 400000, 'Belum Bayar'),
(38, 'BK00011', 'Rizal', 'testakun9890@gmail.com', 'Superior Rooms', '2022-07-16', '2022-07-17', 1, 400000, 'Belum Bayar'),
(39, 'BK00012', 'thoriq', 'thoriq@gmail.com', 'Deluxe Room', '2022-07-21', '2022-07-23', 2, 1200000, 'Belum Bayar'),
(42, 'BK00015', 'user1', 'kevin@gmail.com', 'Ballroom Anggrek', '2022-07-29', '2022-07-31', 2, 4000000, 'Belum Bayar'),
(43, 'BK00016', 'user1', 'testakun9890@gmail.com', 'Ruang Rinjani', '2022-07-26', '2022-07-28', 2, 900000, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_meeting`
--

CREATE TABLE `tbl_meeting` (
  `id_meeting` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`id_meeting`, `nama`, `harga`, `kapasitas`, `jumlah`) VALUES
(1, 'Ruang Rinjani', 450000, 30, 4),
(2, 'Ruang Kerinci', 300000, 25, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id_rooms` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id_rooms`, `nama`, `jumlah`, `harga`) VALUES
(1, 'Superior Rooms', 3, 400000),
(4, 'Deluxe Room', 4, 600000),
(5, 'Family Room', 4, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `email`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 'Admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'hesti', 'hesti', 'hesti@gmail.com', '9910338267af66a122916bc010f74b20', 'User'),
(3, 'User1', 'user1', 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_ballroom`
--
ALTER TABLE `tbl_ballroom`
  ADD PRIMARY KEY (`id_ballroom`);

--
-- Indeks untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  ADD PRIMARY KEY (`id_meeting`);

--
-- Indeks untuk tabel `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id_rooms`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_ballroom`
--
ALTER TABLE `tbl_ballroom`
  MODIFY `id_ballroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id_rooms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
