-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 02:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dekubitus`
--

CREATE TABLE `dekubitus` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_surveilans` varchar(128) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `kejadian` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `braden_score` varchar(128) NOT NULL,
  `bradenscore_ditemukan` varchar(128) NOT NULL,
  `area_lukatekan` varchar(128) NOT NULL,
  `stadium` varchar(128) NOT NULL,
  `albumin` varchar(10) NOT NULL,
  `hb` varchar(10) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `td` varchar(10) NOT NULL,
  `lainnya` varchar(10) NOT NULL,
  `deskripsi_kejadian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dekubitus`
--

INSERT INTO `dekubitus` (`id`, `nama_pasien`, `jenis_surveilans`, `tgl_kejadian`, `kejadian`, `keterangan`, `braden_score`, `bradenscore_ditemukan`, `area_lukatekan`, `stadium`, `albumin`, `hb`, `suhu`, `td`, `lainnya`, `deskripsi_kejadian`) VALUES
(1, 'Jaka Krishna', 'Dekubitus', '2023-01-04', 'Di Rumah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '15-18', '17', 'Trochanter Minor Dextra', 'Stadium I', '10', '10', '36', '10', '-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `spesialis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialis`) VALUES
(1, 'Dr. Hasroni Sp.U', 'Spesialis Urologi'),
(2, 'Dr. Tomy Sp.U, M.Sc, M.Ked.Klin', 'Spesialis Urologi'),
(3, 'Dr. Tina Sp.DV', 'Spesialis Kulit & Kelamin'),
(4, 'Dr. Epi Sp.KK', 'Spesialis Kulit & Kelamin'),
(5, 'Dr. Winny', 'Dokter Umum'),
(6, 'Dr. Henri', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Table structure for table `isk`
--

CREATE TABLE `isk` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_surveilans` varchar(128) NOT NULL,
  `jenis_pemasangan` int(1) NOT NULL,
  `pemeriksaan` int(1) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_pasang` date NOT NULL,
  `pemasangan_dc` int(1) NOT NULL,
  `hand_hygiene` int(1) NOT NULL,
  `fiksasi_kateter` int(1) NOT NULL,
  `adp_tepat` int(1) NOT NULL,
  `pemasangan_alatsteril` int(1) NOT NULL,
  `segera_dilepas` int(1) NOT NULL,
  `pengisian_balon` int(1) NOT NULL,
  `urine_bag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isk`
--

INSERT INTO `isk` (`id`, `nama_pasien`, `jenis_surveilans`, `jenis_pemasangan`, `pemeriksaan`, `tgl_pemeriksaan`, `keterangan`, `tgl_pasang`, `pemasangan_dc`, `hand_hygiene`, `fiksasi_kateter`, `adp_tepat`, `pemasangan_alatsteril`, `segera_dilepas`, `pengisian_balon`, `urine_bag`) VALUES
(1, 'Rama Hanif', 'ISK', 1, 1, '2023-01-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2023-01-02', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_rm` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_asuransi` varchar(128) NOT NULL,
  `dpjp` varchar(128) NOT NULL,
  `ruang_rawatinap` varchar(128) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `no_rm`, `nik`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `jenis_asuransi`, `dpjp`, `ruang_rawatinap`, `tgl_input`) VALUES
(1, 'Melisa Yohana', '060703', '3985806121158', 'Perempuan', '1999-02-23', 'Jl. Pahlawan, Kota Palembang', 'BPJS', 'Dr. Epi Sp.KK', 'Alamanda', '2023-01-05'),
(2, 'Jaka Krishna', '054066', '9823478873564', 'Laki-Laki', '1995-11-09', 'Jl. Monumen, Kota Palembang', 'BPJS', 'Dr. Tomy Sp.U, M.Sc, M.Ked.Klin', 'Catleya', '2023-01-05'),
(3, 'Rama Hanif', '118505', '9270555291245', 'Laki-Laki', '1997-05-25', 'Jl. Perjuangan, Kota Palembang', 'BPJS', 'Dr. Tina Sp.DV', 'Catleya', '2023-01-05'),
(4, 'Inggita Azmi', '120341', '4519804034679', 'Perempuan', '2002-02-27', 'Jl. Soekarno, Kota Palembang', 'BPJS', '-- Pilih Dokter --', 'Tulip', '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `phlebitis`
--

CREATE TABLE `phlebitis` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_surveilans` varchar(128) NOT NULL,
  `jenis_pemasangan` int(1) NOT NULL,
  `tujuan_pemasangan` int(1) NOT NULL,
  `keterangan` text NOT NULL,
  `lokasi` int(1) NOT NULL,
  `tgl_pasang` date NOT NULL,
  `kebersihan_tangan` int(1) NOT NULL,
  `pengecekan_balutan` int(1) NOT NULL,
  `pengecekan_tmpt` int(1) NOT NULL,
  `lepas_pemasanganKeluhan` int(1) NOT NULL,
  `lepas_pemasanganJam` int(1) NOT NULL,
  `tgl_lepas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phlebitis`
--

INSERT INTO `phlebitis` (`id`, `nama_pasien`, `jenis_surveilans`, `jenis_pemasangan`, `tujuan_pemasangan`, `keterangan`, `lokasi`, `tgl_pasang`, `kebersihan_tangan`, `pengecekan_balutan`, `pengecekan_tmpt`, `lepas_pemasanganKeluhan`, `lepas_pemasanganJam`, `tgl_lepas`) VALUES
(1, 'Melisa Yohana', 'Phlebitis', 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 2, '2023-01-02', 0, 0, 0, 0, 0, '2023-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_rawatinap`
--

CREATE TABLE `ruang_rawatinap` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(128) NOT NULL,
  `kelas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_rawatinap`
--

INSERT INTO `ruang_rawatinap` (`id`, `nama_ruangan`, `kelas`) VALUES
(1, 'Anyelir', 2),
(2, 'ICU', 2),
(3, 'Alamanda', 2),
(4, 'Dahlia', 3),
(5, 'Catleya', 3),
(6, 'Flamboyan', 3),
(7, 'Anggrek', 1),
(8, 'Tulip', 1),
(9, 'Kemuning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scabies`
--

CREATE TABLE `scabies` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_surveilans` varchar(128) NOT NULL,
  `diagnosis` varchar(128) NOT NULL,
  `penatalaksanaan` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `hand_hygiene` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scabies`
--

INSERT INTO `scabies` (`id`, `nama_pasien`, `jenis_surveilans`, `diagnosis`, `penatalaksanaan`, `keterangan`, `tgl_pemeriksaan`, `hand_hygiene`) VALUES
(1, 'Inggita Azmi', 'Scabies', 'Insect Bite', 'Medikamentosa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2023-01-03', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '$2y$10$2XWZH/B4oB302prCVhGgjOmIEEIpdorZhT30QS102qO0Bz4qas2Au', 1, 1, 1672875932),
(2, 'Perawat', 'perawat1@gmail.com', '$2y$10$2cSbr5URn2DZEXtuK2ZnZO3nL9o2ck3yl15UVN4CeBO52nkRVWvqe', 2, 1, 1672880232),
(3, 'Melisa Yohana', 'han@gmail.com', '$2y$10$TschCmEkECZF9zhrYTgtcuT560krpd3VRiPkixKQERHTNzMhyvn76', 3, 1, 1672881958);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dekubitus`
--
ALTER TABLE `dekubitus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isk`
--
ALTER TABLE `isk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phlebitis`
--
ALTER TABLE `phlebitis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_rawatinap`
--
ALTER TABLE `ruang_rawatinap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scabies`
--
ALTER TABLE `scabies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dekubitus`
--
ALTER TABLE `dekubitus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `isk`
--
ALTER TABLE `isk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phlebitis`
--
ALTER TABLE `phlebitis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruang_rawatinap`
--
ALTER TABLE `ruang_rawatinap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scabies`
--
ALTER TABLE `scabies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
