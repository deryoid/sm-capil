-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jan 2022 pada 09.09
-- Versi server: 5.7.24
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_smcapil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_barang` int(11) NOT NULL,
  `merk` varchar(150) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_aset` varchar(150) NOT NULL,
  `tahun_perolehan` varchar(75) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `merk`, `nama_barang`, `kode_aset`, `tahun_perolehan`, `sumber_dana`, `jumlah`) VALUES
(1, 'Sanyo', 'Kipas Angin', '13/PAGU.III/2019', '2019', 'PAGU', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_peg` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `golongan` varchar(25) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `agama` varchar(17) NOT NULL,
  `tmp_lhr` varchar(25) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nip`, `nama`, `jabatan`, `golongan`, `jk`, `agama`, `tmp_lhr`, `tgl_lhr`) VALUES
(3, '196503111986022001', 'BARDAMAINI, S.Sos', 'KEPALA DINAS', 'PEMBINA TK.I', 'Laki - Laki', 'Islam', 'Kandangan', '1965-03-11'),
(4, '197012261992031005', 'RACHMAT,S.Sos,MM', 'SEKRETARIS', 'PEMBINA TK.I', 'Laki - Laki', 'Islam', 'Kandangan', '1970-12-26'),
(5, '196411101989031024', 'IDERIS', 'PENGELOLA SARANA DAN PRASARANA KANTOR ', 'PENATA MUDA', 'Laki - Laki', 'Islam', 'Kandangan', '1964-11-10'),
(6, '196809282008011010', 'MURSIDI', 'PETUGAS KEAMANAN ', 'PENGATUR TK. I', 'Laki - Laki', 'Islam', 'Kandangan', '1968-09-28'),
(7, '196605221986022002', 'H. AKHMAD HUDAIBI, S.Pd', 'KEPALA BIDANG PELAYANAN PENCATATAN SIPIL', 'PEMBINA', 'Laki - Laki', 'Islam', 'Kandangan', '1966-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_sk` int(11) NOT NULL,
  `nomor_urut` varchar(150) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` varchar(150) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `pengirim` varchar(150) NOT NULL,
  `ket_surat` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_sk`, `nomor_urut`, `no_surat`, `tgl_surat`, `tgl_kirim`, `uraian`, `pengirim`, `ket_surat`, `file`) VALUES
(7, '1', '123/VII/2021/B', '2022-01-01', '2022-01-13', 'Surat Kepanitian', 'Syarifudin', 'Permohonan tambahan panitia kegiatan', '56292.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_sm` int(11) NOT NULL,
  `nomor_urut` varchar(25) DEFAULT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` varchar(100) NOT NULL,
  `tgl_terima` date DEFAULT NULL,
  `uraian` varchar(255) NOT NULL,
  `pengirim` varchar(150) NOT NULL,
  `ket_surat` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_sm`, `nomor_urut`, `no_surat`, `tgl_surat`, `tgl_terima`, `uraian`, `pengirim`, `ket_surat`, `file`) VALUES
(4, '1', '0182/B.15/SM/DUKCAPIL/2022', '2022-01-01', '2021-12-31', 'Undangan', 'Dinas Pendidikan/ H Jumeran', 'Undangan Peresmian Aplikasi', '56423.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_st` int(11) NOT NULL,
  `nomor_urut` varchar(150) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_st` date NOT NULL,
  `nama_st` varchar(150) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `tujuan_st` varchar(50) NOT NULL,
  `ket_st` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_st`, `nomor_urut`, `no_surat`, `tgl_st`, `nama_st`, `perihal`, `tujuan_st`, `ket_st`, `file`) VALUES
(7, '1', '908/15.B/BUJ/2022', '2022-01-01', 'Syahrani', 'Perjalanan Dinas', 'Ke Jakarta', 'Pelatihan Renstra', '88318.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Irfan Hidayat', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin'),
(2, 'BARDAMAINI, S.Sos\n', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indeks untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_st`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
