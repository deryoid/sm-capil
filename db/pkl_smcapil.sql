-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 07:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `inventaris`
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
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `merk`, `nama_barang`, `kode_aset`, `tahun_perolehan`, `sumber_dana`, `jumlah`) VALUES
(1, 'Sanyo', 'Kipas Angin', '13/PAGU.III/2019', '2019', 'PAGU', '1'),
(2, 'Panasonic', 'AC', '002', '2010', 'APBD', '4'),
(3, 'Canon', 'Printer', '1.3.2.10.002.003.003', '2021', 'APBD', '4'),
(4, 'Simbadda', 'PC', '02.06.03.02.001.0042', '2018', 'APBD', '3'),
(5, 'Canon', 'Kamera Digital', '3.06.01.02.003', '2013', 'APBD', '5'),
(6, 'LG', 'AC', '02.06.02.04.04.00.15', '2015', 'APBD', '8'),
(7, '-', 'Meja Kerja', '1.3.2.10.005.003.011', '2017', 'APBD', '3'),
(8, '-', 'Kursi Kerja', '1.3.2.10.005.001.014', '2017', 'APBD', '30'),
(9, '-', 'Proyektor', '02.03.01.02.001.0017', '2018', 'APBD', '2'),
(10, 'Panasonic', 'TV', '3.06.01.02.003.001', '2020', 'APBD', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
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
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nip`, `nama`, `jabatan`, `golongan`, `jk`, `agama`, `tmp_lhr`, `tgl_lhr`) VALUES
(10, '196503111986022001', 'BARDAMAINI, S.Sos', 'KEPALA DINAS', 'PEMBINA TK.I    IV/b', 'Perempuan', 'Islam', 'HSS', '1965-03-11'),
(11, '197012261992031005', 'RACHMAT,S.Sos,MM', 'SEKRETARIS', 'PEMBINA TK.I    IV/b', 'Laki - Laki', 'Islam', 'HSS', '1970-12-26'),
(12, '196411101989031024', 'IDERIS', 'PENGELOLA SARANA DAN PRASARANA KANTOR ', 'PENATA MUDA    III/A', 'Laki - Laki', 'Islam', 'HSS', '1964-11-10'),
(13, '196809282008011010', 'MURSIDI', 'PETUGAS KEAMANAN ', 'PENGATUR TK. I    II/d', 'Laki - Laki', 'Islam', 'HSS', '1968-09-28'),
(14, '198106032009012002', 'RIHANATUL KIPTIAH', 'PENGADMINISTRASI UMUM', 'PENGATUR TK. I    II/d', 'Perempuan', 'Islam', 'HST', '1981-06-03'),
(15, '197103092006041014', 'ALFIAN', 'PENGEMUDI', 'PENGATUR MUDA TK. I  II/b', 'Perempuan', 'Islam', 'HSS', '1971-03-09'),
(16, '196809051989031010', 'ZIADI, A.Md', 'KASUBAG PERENCANAAN DAN KEUANGAN', 'PENATA TK. I  III/d', 'Laki - Laki', 'Islam', 'TAPIN', '1968-09-05'),
(17, '198112042010011010', 'SUPRIYADI SUFIAN, S,IP', 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN ', 'PENATA MUDA   III/a', 'Laki - Laki', 'Islam', 'HSS', '1981-12-04'),
(18, '196806071993031007', 'SYAMSI, S.Sos', 'PENGELOLA KEPEGAWAIAN ', 'PENATA TK. I  III/d', 'Laki - Laki', 'Islam', 'HSS', '1968-06-07'),
(19, '197710102009011007', 'ABDUL SALAM', 'BENDAHARA ', 'PENGATUR TK. I    II/d', 'Laki - Laki', 'Islam', 'HSS', '1977-10-10'),
(20, '198002272010012002', 'NORLIANI', 'PENGELOLA KEUANGAN ', 'PENGATUR  II/c', 'Perempuan', 'Islam', 'HSS', '1980-02-27'),
(21, '196911281994031005', 'HAIRIN FAHMI, S.Sos,MPA', 'KEPALA BIDANG PELAYANAN PENDAFTARAN PENDUDUK', 'PEMBINA  IV/a', 'Laki - Laki', 'Islam', 'BJM', '1969-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
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
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_sk`, `nomor_urut`, `no_surat`, `tgl_surat`, `tgl_kirim`, `uraian`, `pengirim`, `ket_surat`, `file`) VALUES
(9, '01', '470/256/Dukcapil', '2021-08-26', '2021-08-26', 'Pengadaan ASN Tahun 2022', 'Staf Dukcapil', 'Tujuan Surat BKPSDM Kab. HSS', '87932.pdf'),
(10, '02', '470/300/Dukcapil', '2021-09-10', '2021-09-10', 'Laporan ASN Dukcapil yang mengikuti Bimtek/Sosialisasi', 'Staf Dukcapil', 'Tujuan Surat BKPSDM Kab. HSS', '82402.pdf'),
(11, '03', '470/318/Dukcapil', '2021-09-24', '2021-09-24', 'Laporan Kegiatan Hari peduli Sampah Nasional', 'Staf Dukcapil', 'Tujuan Surat Dispera KPLH Kab. HSS', '80118.pdf'),
(12, '04', '700/347/Disdukcapil', '2021-10-22', '2021-10-22', 'Alasan Penambahan Anggaran Dinas Dukcapil Tahun 2022', 'Staf Dukcapil', 'Tujuan Surat BKPSDM Kab. HSS', '67533.pdf'),
(13, '05', '800/440/Disdukcapil', '2021-11-15', '2021-11-15', 'Kesediaan Menerima Penelitian', 'Staf Dukcapil', 'Sekolah Tinggi Ilmu Administrasi Amuntai', '24486.pdf'),
(14, '06', '800/391/Disdukcapil', '2021-11-30', '2021-11-30', 'Usulan Pejabat dan Bendahara SKPD Tahun Anggaran 2022', 'Staf Dukcapil', 'Tujuan Surat BPKPD Kab. HSS', '62091.pdf'),
(15, '07', '800/399/Disdukcapil', '2021-12-06', '2021-12-06', 'Pergantian Verifikator Aktivitas Kinerja ASN', 'Staf Dukcapil', 'Tujuan Surat BKPSDM Kab. HSS', '68877.pdf'),
(16, '08', '470/409/Dukcapil', '2021-12-13', '2021-12-13', 'Permohonan Penggunaan Pakaian Seragam Khusus Layanan', 'Staf Dukcapil', 'Tujuan Surat Sekretaris Daerah Kab. HSS U.Tujuan Surat BKPSDM Kab. HSS U.p Bagian Organisasi Setda Kab. HSS', '4947.pdf'),
(17, '09', '800/427/Disdukcapil', '2021-12-27', '2021-12-27', 'Usulan Pejabat Pengelola Barang Milik Daerah TA 2022', 'Staf Dukcapil', 'Tujuan Surat Badan Pengelolaan Keuangan dan Pendapatan Daerah Kab. HSS', '96505.pdf'),
(18, '10', '470/439/Dukcapil', '2021-12-31', '2021-12-31', 'Mohon Data Penduduk Luar Daerah', 'Staf Dukcapil', 'Tujuan  Lurah se Kecamatan Kandangan dan Kepala desa se Kabupaten  HSS', '81940.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
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
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_sm`, `nomor_urut`, `no_surat`, `tgl_surat`, `tgl_terima`, `uraian`, `pengirim`, `ket_surat`, `file`) VALUES
(8, '01', '005/57-PE/Bappelitbangda', '2021-09-13', '2021-09-14', 'Undangan', 'Bappelitbangda', 'Undangan', '66768.pdf'),
(9, '02', '562/462/DisnakerKUKMP', '2021-09-15', '2021-09-15', 'Keikutsertaan Non ASN pada Program BPJS Ketenagakerjaan', 'Sekretariat Daerah', '', '4682.pdf'),
(10, '03', '470/323/Disdukcapil', '2021-09-29', '2021-09-29', 'Peningkatan Cakupan Akta Kematian', 'Sekretariat Daerah', '', '61719.pdf'),
(11, '04', '427/144-P/Disporapar', '2021-10-07', '2021-10-08', 'Pemasangan Spanduk Hari Sumpah Pemuda', 'Sekretariat Daerah', '', '54141.pdf'),
(12, '05', '032/1555/BPKPD', '2021-10-13', '2021-10-14', 'Pemberitahuan Pengumuman Lelang', 'Sekretariat Daerah', '', '36415.pdf'),
(14, '06', '065/256/ORG', '2021-10-22', '2021-10-22', 'Data Penandatangan Kesepakatan Bersama dan PKS Penyelenggaraan Pelayanan Pada Mal Pelayanan Publik', 'Sekretariat Daerah', '', ''),
(15, '07', '890/1857/PSDM', '2021-10-29', '2021-10-29', 'Seminar Pelatihan Dasar CPNS Golongan II Angkatan I Tahun 2021', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kab. HSS', '', '46661.pdf'),
(16, '08', '870/1922/ADIKASN', '2021-11-09', '2021-11-10', 'Perpanjangan Waktu PDM', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kab. HSS', '', '60846.pdf'),
(18, '09', '861/1928/BPKPEKASN', '2021-11-10', '2021-11-10', 'Penganugerahan Tanda Kehormatan Satyalancana Karya Satya', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kab. HSS', '', '62748.pdf'),
(19, '10', '900/435/B.Kesbangpol', '2021-12-17', '2021-12-17', 'Sosialisasi Peringatan Hari Bela Negara Ke-73 Tahun 2021', 'Sekretariat Daerah', '', '69568.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
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
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_st`, `nomor_urut`, `no_surat`, `tgl_st`, `nama_st`, `perihal`, `tujuan_st`, `ket_st`, `file`) VALUES
(7, '1', '908/15.B/BUJ/2022', '2022-01-01', 'Syahrani', 'Perjalanan Dinas', 'Ke Jakarta', 'Pelatihan Renstra', '88318.pdf'),
(8, '02', '19992', '0000-00-00', 'Bardamaini', 'Mengikuti Rapat Konsultasi KTP Elekronik', 'Hotel Roditha, Banjarmasin', '', '24337.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Irfan Hidayat', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin'),
(2, 'BARDAMAINI, S.Sos\n', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
