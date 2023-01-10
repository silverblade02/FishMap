-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2022 pada 15.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_tangkap`
--

CREATE TABLE `alat_tangkap` (
  `id_altang` int(11) NOT NULL,
  `jenis_altang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_tangkap`
--

INSERT INTO `alat_tangkap` (`id_altang`, `jenis_altang`) VALUES
(1, 'Pancing Ulur'),
(2, 'Rawai Dasar'),
(4, 'Bouke Ami'),
(5, 'Bubu'),
(6, 'Jaring Insang Hanyut, Jaring Gillnet Oseanik'),
(7, 'Bagan Berperahu'),
(8, 'Jaring Insang Berlapis, Jaring Klitik'),
(9, 'Pukat Cincin Pelagis Besar Dengan Satu Kapal'),
(10, 'Pukat Cincin Grup Pelagis Kecil'),
(11, 'Jaring Insang Kombinasi Dengan Trammel Net'),
(12, 'Pukat Cincin Pelagis Kecil Dengan Satu Kapal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(11) NOT NULL,
  `nama_ikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `nama_ikan`) VALUES
(20, 'Bandeng'),
(21, 'Bilis'),
(23, 'Bawal'),
(24, 'Alu-Alu'),
(26, 'Tuna'),
(27, 'Biji Nangka'),
(28, 'Peperek'),
(29, 'Gerot-gerot'),
(30, 'Kapas-kapas'),
(31, 'Ekor Kuning'),
(32, 'Golok-golok'),
(33, 'Talang-talang'),
(34, 'Manyung'),
(35, 'Selar'),
(36, 'Kembung'),
(37, 'Baronang'),
(38, 'Cakalang'),
(39, 'Haring'),
(40, 'Lemuru'),
(41, 'Tongkol'),
(42, 'Kuwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_produksi`
--

CREATE TABLE `jumlah_produksi` (
  `id_jumpro` int(11) NOT NULL,
  `ikan` varchar(50) NOT NULL,
  `thn` int(11) NOT NULL,
  `lp` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabkot` varchar(50) NOT NULL,
  `pelabuhan` varchar(50) NOT NULL,
  `kapal` varchar(50) NOT NULL,
  `altang` varchar(50) NOT NULL,
  `wp` varchar(50) NOT NULL,
  `vol_produksi` float NOT NULL,
  `nil_produksi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumlah_produksi`
--

INSERT INTO `jumlah_produksi` (`id_jumpro`, `ikan`, `thn`, `lp`, `provinsi`, `kabkot`, `pelabuhan`, `kapal`, `altang`, `wp`, `vol_produksi`, `nil_produksi`) VALUES
(48, 'Biji Nangka', 2020, 'Pelabuhan', 'Daerah Istimewa Yogyakarta', 'Gunung Kidul', 'Sadeng', 'MT_0005', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-573', 8078, 161560000),
(49, 'Peperek', 2020, 'Pelabuhan', 'Banten', 'Tangerang', 'Tanjung Pasir', 'KM_0005', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-712', 1994, 19940000),
(50, 'Tongkol', 2020, 'Pelabuhan', 'Nanggroe Aceh Darussalam', 'Aceh Barat Daya', 'Ujung', 'KM_0030_0050', 'Rawai Dasar', 'WPP-RI-572', 1130360, 33910800000),
(51, 'Gerot-gerot', 2020, 'Pelabuhan', 'Jawa Barat', 'Bekasi', 'Muara Jaya', 'MT_0005', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-712', 297, 8910000),
(52, 'Kapas-kapas', 2020, 'Pelabuhan', 'JAWA TENGAH', 'REMBANG', 'PP. Tasik Agung', 'KM_0020_0030', 'Pukat Cincin Pelagis Kecil Dengan Satu Kapal', 'WPP-RI-712', 4081700, 40817020000),
(53, 'Ekor Kuning', 2020, 'Pelabuhan', 'JAWA TIMUR', 'BANGKALAN', 'PP. Banyusangkah', 'KM_0005', 'Jaring Insang Kombinasi Dengan Trammel Net', 'WPP-RI-712', 177600, 1953600000),
(54, 'Golok-golok', 2020, 'Pelabuhan', 'KALIMANTAN SELATAN', 'TANAH BUMBU', 'PP. Batulicin', 'KM_0010_0020', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-713', 152, 2584000),
(55, 'Talang-talang', 2020, 'Pelabuhan', 'KALIMANTAN TENGAH', 'KOTAWARINGIN BARAT', 'PP. Kumai', 'KM_0005_0010', 'Pukat Cincin Grup Pelagis Kecil', 'WPP-RI-712', 3900, 71760000),
(56, 'Manyung', 2020, 'Pelabuhan', 'KALIMANTAN BARAT', 'SAMBAS', 'PP. Pemangkat', 'KM_0030_0050', 'Pukat Cincin Pelagis Kecil Dengan Satu Kapal', 'WPP-RI-711', 2056, 42398597),
(57, 'Alu-alu', 2020, 'Pelabuhan', 'KEPULAUAN BANGKA BELITUNG', 'BANGKA', 'PPN. Sungailiat', 'KM_0005_0010', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-711', 599, 10687508),
(58, 'Selar', 2020, 'Pelabuhan', 'LAMPUNG', 'KOTA BANDAR LAMPUNG', 'PP. Lempasing', 'KM_0010_0020', 'Jaring Insang Berlapis, Jaring Klitik', 'WPP-RI-572', 851, 17020000),
(59, 'Alu-alu', 2020, 'Pelabuhan', 'MALUKU', 'KEPULAUAN ARU', 'PP. Dobo', 'KM_0050_0100', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-718', 4950, 99000000),
(60, 'Kembung', 2020, 'Pelabuhan', 'MALUKU UTARA', 'HALMAHERA UTARA', 'PP. Tobelo', 'MT_0005_0010', 'Pukat Cincin Pelagis Besar Dengan Satu Kapal', 'WPP-RI-715', 210, 2310000),
(61, 'Alu-alu', 2020, 'Pelabuhan', 'NUSA TENGGARA BARAT', 'BIMA', 'PP. Sape', 'KM_0005', 'Pancing Ulur', 'WPP-RI-573', 2589, 64725000),
(62, 'Baronang', 2020, 'Pelabuhan', 'PAPUA', 'MERAUKE', 'PP. Merauke', 'KM_0030_0050', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-718', 22868, 686040000),
(63, 'Cakalang', 2020, 'Pelabuhan', 'PAPUA BARAT', 'MANOKWARI', 'PP. Sanggeng', 'MT_0005_0010', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-717', 96000, 2688000000),
(64, 'Haring', 2020, 'Pelabuhan', 'RIAU', 'KOTA DUMAI', 'PP. Dumai', 'KM_0005', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-571', 2045, 71575000),
(65, 'Cakalang', 2020, 'Pelabuhan', 'SULAWESI BARAT', 'MAMUJU', 'PP. Kasiwah', 'KM_0010_0020', 'Pukat Cincin Pelagis Besar Dengan Satu Kapal', 'WPP-RI-713', 325, 6500000),
(66, 'Lemuru', 2020, 'Pelabuhan', 'SULAWESI TENGGARA', 'BUTON', 'PP. Pasar Wajo', 'KM_0005_0010', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-714', 11487, 114870000),
(67, 'Tongkol', 2020, 'Pelabuhan', 'SULAWESI UTARA', 'KEPULAUAN SANGIHE', 'PP. Dagho (SULUT, KAB. KEP. SANGIHE)', 'KM_0005_0010', 'Pukat Cincin Pelagis Kecil Dengan Satu Kapal', 'WPP-RI-716', 5839, 58390000),
(68, 'Kuwe', 2020, 'Pelabuhan', 'SUMATERA BARAT', 'KOTA PADANG', 'PP. Bungus', 'KM_0030_0050', 'Jaring Insang Hanyut, Jaring Gillnet Oseanik', 'WPP-RI-572', 400, 14379669);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten_kota`
--

CREATE TABLE `kabupaten_kota` (
  `id_kabkot` int(11) NOT NULL,
  `nama_kabkot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten_kota`
--

INSERT INTO `kabupaten_kota` (`id_kabkot`, `nama_kabkot`) VALUES
(1, 'Aceh Barat Daya'),
(2, 'Aceh Jaya'),
(3, 'Jakarta Utara'),
(4, 'Gunung Kidul'),
(5, 'Tangerang'),
(6, 'Bekasi'),
(7, 'Rembang'),
(8, 'Bangkalan'),
(9, 'Tanah Bumbu'),
(10, 'Kotawaringin Barat'),
(11, 'Sambas'),
(12, 'Bangka'),
(13, 'Kota Bandar Lampung'),
(14, 'Kepulauan Aru'),
(15, 'Halmahera Utara'),
(16, 'Bima'),
(17, 'Merauke'),
(18, 'Manokwari'),
(19, 'Kota Dumai'),
(20, 'Mamuju'),
(21, 'Buton'),
(22, 'Kepulauan Sangihe'),
(23, 'Kota Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `jenis_kapal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `jenis_kapal`) VALUES
(1, 'KM_0005'),
(2, 'KM_0005_0010'),
(3, 'KM_0010_0020'),
(5, 'KM_0010'),
(8, 'MT_0005'),
(9, 'KM_0020_0030'),
(25, 'KM_0030_0050');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_pendaratan`
--

CREATE TABLE `lokasi_pendaratan` (
  `id_lopen` int(11) NOT NULL,
  `lopen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi_pendaratan`
--

INSERT INTO `lokasi_pendaratan` (`id_lopen`, `lopen`) VALUES
(1, 'Pelabuhan'),
(2, 'Non-Pelabuhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelabuhan`
--

CREATE TABLE `pelabuhan` (
  `id_pelabuhan` int(11) NOT NULL,
  `nama_pelabuhan` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelabuhan`
--

INSERT INTO `pelabuhan` (`id_pelabuhan`, `nama_pelabuhan`, `lat`, `lon`) VALUES
(1, 'Ujung', 3.718785, 96.812080),
(2, 'Cikidang', -6.925674, 106.650909),
(3, 'Nizam Zachman', -6.099706, 106.799728),
(5, 'Tanjung Pasir', -6.029135, 106.661797),
(6, 'Muara Jaya', -6.715206, 106.814728),
(7, 'Tasikagung', -6.704983, 111.342270),
(8, 'Banyu Sangkah', -6.890382, 113.027267),
(9, 'Batulicin', -3.448914, 116.002243),
(11, 'Kumai', -2.739634, 111.728500),
(12, 'Pemangkat', 1.156069, 108.971291),
(13, 'Sungailiat', -1.847727, 106.119202),
(14, 'Lempasing', -5.483877, 105.194878),
(15, 'Dobo', -5.760765, 134.233475),
(16, 'Tobelo', 1.726284, 127.999947),
(17, 'Sap', -8.572601, 119.021782),
(18, 'Merauke', -7.870832, 140.008179),
(19, 'Sanggeng', -0.863631, 134.063614),
(20, 'Dumai', 1.663197, 101.447037),
(21, 'Kasiwa', -2.675630, 118.884796),
(22, 'Pasar Wajo', -5.464240, 122.837135),
(23, 'Dagho', 3.455725, 125.585312),
(24, 'Bungus', -1.030823, 100.398819),
(25, 'Sadeng', -8.190439, 110.798393);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Nanggroe Aceh Darussalam'),
(3, 'Sumatera Barat'),
(4, 'Sumatera Selatan'),
(27, 'Daerah Istimewa Yogyakarta'),
(28, 'Banten'),
(29, 'Jawa Barat'),
(30, 'Jawa Tengah'),
(31, 'Jawa Timur'),
(32, 'Kalimantan Selatan'),
(33, 'Kalimantan Tengah'),
(34, 'Kalimantan Barat'),
(35, 'Kepulauan Bangka Belitung'),
(36, 'Lampung'),
(37, 'Maluku'),
(38, 'Maluku Utara'),
(39, 'Nusa Tenggara Barat'),
(40, 'Papua'),
(41, 'Papua Barat'),
(42, 'Riau'),
(43, 'Sulawesi Barat'),
(44, 'Sulawesi Tenggara'),
(45, 'Sulawesi Utara'),
(46, 'Sumatera Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, 2019),
(2, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_unit` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_email`, `user_username`, `user_password`, `user_unit`, `user_foto`, `user_level`) VALUES
(1, 'Ahmad Jhony', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '482937136_avatar.png', 'administrator'),
(12, 'cidut', '', 'cidutbesar', '6b9611669f31f2a9a2c9e80d185b127e', '', '14302310_Screenshot+2021-12-01+160728.jpg', 'administrator'),
(14, 'snowy', '', 'buldut', 'c336212aedab150261c56b51dd07eec5', '', '1660934118_Screenshot 2022-05-17 224912.jpg', 'administrator'),
(15, 'Miftah Andriansyah', '', 'Didi', '52ff7c4bd8bc5a813401dc57b730814c', '', '', 'administrator'),
(16, 'Kiko', 'kiko@gmail.com', 'kopit', '461e43a2ee89252686f4b2ca272b4200', 'provinsi', '977310044_Screenshot 2021-12-01 160629.png', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wpp`
--

CREATE TABLE `wpp` (
  `id_WPP` int(11) NOT NULL,
  `WPP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wpp`
--

INSERT INTO `wpp` (`id_WPP`, `WPP`) VALUES
(1, 'WPP-RI-572'),
(2, 'WPP-RI-571'),
(3, 'WPP-RI-573'),
(4, 'WPP-RI-711'),
(5, 'WPP-RI-712'),
(6, 'WPP-RI-713'),
(17, 'WPP-RI-718'),
(18, 'WPP-RI-715'),
(21, 'WPP-RI-717'),
(24, 'WPP-RI-714'),
(25, 'WPP-RI-716');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_tangkap`
--
ALTER TABLE `alat_tangkap`
  ADD PRIMARY KEY (`id_altang`);

--
-- Indeks untuk tabel `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indeks untuk tabel `jumlah_produksi`
--
ALTER TABLE `jumlah_produksi`
  ADD PRIMARY KEY (`id_jumpro`);

--
-- Indeks untuk tabel `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  ADD PRIMARY KEY (`id_kabkot`);

--
-- Indeks untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `pelabuhan`
--
ALTER TABLE `pelabuhan`
  ADD PRIMARY KEY (`id_pelabuhan`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `wpp`
--
ALTER TABLE `wpp`
  ADD PRIMARY KEY (`id_WPP`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_tangkap`
--
ALTER TABLE `alat_tangkap`
  MODIFY `id_altang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `jumlah_produksi`
--
ALTER TABLE `jumlah_produksi`
  MODIFY `id_jumpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `kabupaten_kota`
--
ALTER TABLE `kabupaten_kota`
  MODIFY `id_kabkot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pelabuhan`
--
ALTER TABLE `pelabuhan`
  MODIFY `id_pelabuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `wpp`
--
ALTER TABLE `wpp`
  MODIFY `id_WPP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
