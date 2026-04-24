-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2026 pada 18.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_hp`) VALUES
(1, 'caca', 'bandung', 'o85798270577'),
(2, 'kanii', 'pamarisen', 'o85798270578'),
(3, 'oranggg', 'sumedang', 'o85798270579'),
(4, 'noer', 'tanjungsari', 'o85790270579'),
(5, 'aprilll', 'garuttt', 'o85798270575'),
(13, 'khikaaaa', 'pamarisen', 'o85798270577');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `descripsi` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `id_rak` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `harga`, `id_kategori`, `id_penulis`, `id_penerbit`, `tahun_terbit`, `jumlah`, `tersedia`, `descripsi`, `cover`, `id_rak`, `deskripsi`) VALUES
(32, 'agrava', NULL, 5, 3, 3, '2002', 2, 2, '', '1777044302_6055340af20e5aa2bdbb.jpg', 10, 'gggg'),
(33, 'bintang', NULL, 3, 1, 2, '2004', 9, 7, '', '1777044373_b8bf2c423fb2e006f38c.jpg', 11, 'eeeee'),
(35, 'agrava', NULL, 1, 3, 6, '2007', 8, 9, '', '1777044603_8cb959d8868b4aa8c07c.jpg', 10, 'setr4'),
(36, 'agrava', NULL, 3, 3, 3, '2006', 3, -1, '', '1777044861_53f5f16a9f2d96c9adb9.jpg', 10, 'qqq'),
(37, 'agrava', NULL, 3, 3, 3, '2002', 1, 1, '', '1777046053_7586713a1cfe6f994403.jpg', 11, '111frtre');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_rak`
--

CREATE TABLE `buku_rak` (
  `id_` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku_rak`
--

INSERT INTO `buku_rak` (`id_`, `id_buku`, `id_rak`) VALUES
(9, 7, 5),
(11, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `id_pengembalian` int(11) NOT NULL,
  `jumlah_denda` decimal(10,0) NOT NULL,
  `status` enum('belum bayar','sudah bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail`, `id_peminjaman`, `id_buku`, `jumlah`) VALUES
(5, 34, 13, 100),
(30, 30, 30, 30),
(35, 54, 20, 5),
(37, 56, 21, 4),
(41, 60, 20, 2),
(42, 61, 32, 2),
(43, 62, 35, 1),
(44, 63, 33, 2),
(45, 64, 33, 33),
(46, 65, 33, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'caca'),
(3, 'Novel'),
(5, 'kaliddd'),
(13, 'rikaaaa'),
(55, 'nunu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_anggota`, `id_petugas`, `sampul`) VALUES
(54, NULL, '2026-04-22', NULL, 'dipinjam', 0, 0, NULL),
(56, NULL, '2026-04-22', NULL, 'dipinjam', 0, 0, NULL),
(60, NULL, '2026-04-24', NULL, 'dipinjam', 13, 0, NULL),
(61, NULL, '2026-04-24', NULL, 'dipinjam', 2, 0, NULL),
(62, NULL, '2026-04-24', NULL, 'dipinjam', 4, 0, NULL),
(63, NULL, '2026-04-24', NULL, 'dipinjam', 3, 0, NULL),
(64, NULL, '2026-04-24', NULL, 'dipinjam', 2, 0, NULL),
(65, NULL, '2026-04-24', NULL, 'dipinjam', 3, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penarikan`
--

CREATE TABLE `penarikan` (
  `id_penarikan` int(11) NOT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `petugas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penarikan`
--

INSERT INTO `penarikan` (`id_penarikan`, `id_peminjaman`, `alamat`, `biaya`, `status`, `tanggal_ambil`, `petugas_id`) VALUES
(1, 1, 'bandung', 13000, 'anomali', '2026-04-13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat`) VALUES
(2, 'kafri', 'dusun cilembu'),
(3, 'Gramedia', 'kampung durian runtuh'),
(6, 'lailatul', 'kampung cinta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `denda_per_hari` int(11) DEFAULT NULL,
  `maksimal_pinjam` int(11) DEFAULT NULL,
  `lama_pinjam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama_aplikasi`, `denda_per_hari`, `maksimal_pinjam`, `lama_pinjam`) VALUES
(1, 'perpustakaan', 1, 1, 3),
(2, 'buku', 8, 10, 3),
(6, 'perpus', 4, 5, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tgl_di kembali` date NOT NULL,
  `denda` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tgl_di kembali`, `denda`) VALUES
(2, 4, '2026-04-01', 6.00),
(3, 0, '0000-00-00', 2000.00),
(4, 0, '0000-00-00', 1000.00),
(5, 0, '0000-00-00', 3000.00),
(6, 0, '0000-00-00', 3000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_peminjaman`, `alamat`, `biaya`, `status`, `tanggal_kirim`, `id_anggota`, `tanggal_ambil`, `id_petugas`) VALUES
(3, 3, 'erfwererf', 400, 'sehat', '2026-04-01', 6, '2026-04-02', 9),
(7, 7, 'bandung', 23000, 'anomali', '2026-04-08', 7, '2026-04-07', 9),
(13, NULL, 'sumedang', 200, 'dikirim', '2026-04-21', NULL, NULL, NULL),
(16, NULL, 'bandung', 3, 'belum menikah', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`) VALUES
(1, 'aprill'),
(3, 'Tere Liye'),
(5, 'riqa'),
(13, 'lidkaaaa'),
(14, 'rika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(2, 'kanii', 'khika', '$2y$10$FMQRdH0ecCbZZVWtN2n7/u1YZN/gr7X98Er4NG4sqDAWCXlZwmB6S'),
(5, 'orang', 'orang', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`, `lokasi`) VALUES
(2, 'kaaa', 'bndung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak_buku`
--

CREATE TABLE `rak_buku` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rak_buku`
--

INSERT INTO `rak_buku` (`id_rak`, `nama_rak`, `lokasi`) VALUES
(6, 'ri', 'der'),
(10, 'olid', 'bandung'),
(11, 'loker 01', 'pamarisen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tanggal_reservasi` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_anggota`, `id_buku`, `tanggal_reservasi`, `status`) VALUES
(1, 1, 1, '2026-04-13', 'anomali'),
(2, 2, 7, '2026-04-13', 'anomali'),
(3, 1, 19, '2026-04-01', 'janda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_peminjaman`, `jenis`, `jumlah`, `status`, `tanggal`) VALUES
(1, 35, 'perempuan', 2, 'wrwq', '2026-04-13'),
(2, 50, 'perempuan', 2, 'belum menikah', '2026-04-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_buku`, `id_anggota`, `rating`, `komentar`, `tanggal`) VALUES
(1, 1, 1, 1, 'ngga ada', '2026-04-13'),
(2, 7, 2, 1, 'nggatau', '2026-04-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','petugas','anggota','user') DEFAULT 'anggota',
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `role`, `foto`, `status`, `created_at`) VALUES
(1, 'rikaapriliani', 'rika.apriliani85@smk.belajar.id', 'khika', '$2y$10$FMQRdH0ecCbZZVWtN2n7/u1YZN/gr7X98Er4NG4sqDAWCXlZwmB6S', 'admin', '1776536439_4e10bb2ba9c933608c22.jpg', 'aktif', '2026-04-11 04:29:11'),
(8, 'RikaCantip', 'rika@gmail.com', 'khikaaaaa', '$2y$10$r7JLxvyM8JTbvUc2AB1mFuSGjmDlQxgzuYGBCF9ilxZucA.BhL2Ia', 'petugas', '1775890384_3cd5b2d3a538a223f06f.jpg', 'aktif', '2026-04-11 06:53:04'),
(9, 'muti', 'rika@gmail.com', 'mutinurul', '$2y$10$yboEs6jw8G94jdqKyoiX1.ygQSVLWpng1reNvZPT/uiwwUHCuk6b6', 'anggota', '1775890572_88c1d1aa2121dad27afe.png', 'aktif', '2026-04-11 06:56:12'),
(10, 'gheisya', 'rika@gmail.com', 'gheisya', '$2y$10$vegg1AIQDIjC3MLsJKdtcuLLzLBAOIDqV1.E6BexZmNApfopIdK1y', 'anggota', '1775890742_f46f17987dbcd46ad591.jpg', 'aktif', '2026-04-11 06:59:03'),
(12, 'RikaCantip', 'rika@gmail.com', 'rikaa', '$2y$10$WjJ4giQAOHe31GtDVlWxU.N.33Q6Z0ioy3yElsdww26pJ9bMBXoNy', 'admin', '1776481283_b28f53c8a371d1e4285c.jpg', 'aktif', '2026-04-18 03:01:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `buku_rak`
--
ALTER TABLE `buku_rak`
  ADD PRIMARY KEY (`id_`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `penarikan`
--
ALTER TABLE `penarikan`
  ADD PRIMARY KEY (`id_penarikan`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `rak_buku`
--
ALTER TABLE `rak_buku`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `buku_rak`
--
ALTER TABLE `buku_rak`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `penarikan`
--
ALTER TABLE `penarikan`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rak_buku`
--
ALTER TABLE `rak_buku`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
