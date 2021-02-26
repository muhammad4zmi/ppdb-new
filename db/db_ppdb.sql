-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 21 Feb 2021 pada 07.29
-- Versi server: 5.7.30
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$cjA4.YY5L/zOujLnV0pOf.wiKBumgGb0Kjc/68mv4g1dB1RHyoudq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `info` text,
  `tgl_post` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `slug`, `info`, `tgl_post`) VALUES
(19, 'Informasi Pendaftaran', 'informasi-pendaftaran', '<ol><li><strong>GELOMBANG 1 (</strong>18 Februari 2021 s/d 10 April 2021)</li><li><strong>GELOMBANG 2 (</strong>14 April 2021 s/d 30 Juni 2021)</li><li>Calon Peserta Didik Baru pada 08 Juli 2021</li><li>Orientasi PDB 09 s/d 12 Juli 2021</li><li>Awal masuk sekolah 15 Juli 2021</li><li>Jika terjadi perubahan agenda akan di hubungi oleh panitia dan tetap pantau website <a href=\"https://mamualliminnwanjani.sch.id/\">https://mamualliminnwanjani.sch.id/</a></li></ol>', '2020-04-10 20:05:08'),
(20, 'Informasi Syarat Pendaftaran', 'informasi-syarat-pendaftaran', '<ol><li>Mengisi Formulir Pendaftaran Online di <a href=\"http://ppdb.mamualliminnwanjani.sch.id/\"><i>http://ppdb.mamualliminnwanjani.sch.id/</i></a></li><li><i>Foto Copy </i>Ijazah &amp; SKHUN SMP/MTs format JPG/PDF yang sudah dilegalisir</li><li>Pas Foto terbaru</li><li><i>Foto Copy </i>Akta Lahir dalam format JPG/PDF</li><li><i>Foto Copy </i>Kartu Keluarga format JPG/PDF</li><li><i>Foto Copy </i>Bukti Pembayaran administrasi Rp. 80.000 (JPG/PDF)</li></ol>', '2020-04-10 20:10:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(200) DEFAULT NULL,
  `nama_pt` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `tahun_akademik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama_aplikasi`, `nama_pt`, `alamat`, `slug`, `tahun_akademik`) VALUES
(1, 'SiPPDB', 'MA Mu\'allimin NW Anjani', 'Jalan Raya Mataram-Lb. Lombok KM 49 Desa Anjani-Suralaga, Lombok Timur - NTB', 'sippdb', '2021 / 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_panitia`
--

CREATE TABLE `tbl_panitia` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_panitia`
--

INSERT INTO `tbl_panitia` (`id`, `nama`, `jabatan`, `username`, `password`, `no_hp`) VALUES
(9, 'asdas', 'asdas', 'asdsad', 'sadasd', '324234'),
(10, 'Azmi', 'Panitia Guru', 'azmi', '1234', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `no_daftar` char(50) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nik` char(50) NOT NULL,
  `pil_jurusan1` varchar(50) NOT NULL DEFAULT '',
  `pil_jurusan2` varchar(50) NOT NULL DEFAULT '',
  `nisn` char(50) DEFAULT NULL,
  `nama_lengkap` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `kip` enum('Ya','Tidak') DEFAULT NULL,
  `no_kip` char(50) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(45) DEFAULT NULL,
  `pekerjaan_ayah` varchar(45) DEFAULT NULL,
  `pendidikan_ayah` varchar(45) DEFAULT NULL,
  `nama_ibu` varchar(45) DEFAULT NULL,
  `pekerjaan_ibu` varchar(45) DEFAULT NULL,
  `pendidikan_ibu` varchar(45) DEFAULT NULL,
  `alamat_ortu` varchar(50) DEFAULT NULL,
  `no_ortu` varchar(50) DEFAULT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat_sekolah` text,
  `foto` char(50) DEFAULT NULL,
  `ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`no_daftar`, `tgl_daftar`, `nik`, `pil_jurusan1`, `pil_jurusan2`, `nisn`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `kip`, `no_kip`, `alamat`, `telpon`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `alamat_ortu`, `no_ortu`, `nama_sekolah`, `alamat_sekolah`, `foto`, `ukuran`) VALUES
('202102190001', '2021-02-19 20:18:09', '123123123', 'IPA', 'IPS', '21312321', 'Muhammad Azmi', 'qweqweqwe', '2021-02-22', NULL, NULL, 'Tidak', '0', 'dasdasd', '123123123', 'asdasdaa', NULL, NULL, 'sdasd', NULL, NULL, 'asdasd', '123123123', 'qweqweqwe', 'qweqweqw', '1613737089_dcd9aff1e13db9df1943.png', 'XL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_syarat`
--

CREATE TABLE `tbl_syarat` (
  `id` int(11) NOT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `no_daftar` char(50) DEFAULT NULL,
  `syarat` varchar(100) DEFAULT NULL,
  `tandai` enum('0') DEFAULT NULL,
  `status` enum('0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indeks untuk tabel `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_syarat_tbl_siswa` (`no_daftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
  ADD CONSTRAINT `FK_tbl_syarat_tbl_siswa` FOREIGN KEY (`no_daftar`) REFERENCES `tbl_siswa` (`no_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
