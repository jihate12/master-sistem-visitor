-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2021 pada 07.06
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_visitor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `id` int(255) NOT NULL,
  `ktp` varchar(16) NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `tanggal` date NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kegiatan` text NOT NULL,
  `bertemu` varchar(50) NOT NULL,
  `plat` varchar(50) NOT NULL,
  `status` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`id`, `ktp`, `jam_datang`, `jam_pulang`, `tanggal`, `departemen`, `lokasi`, `kegiatan`, `bertemu`, `plat`, `status`) VALUES
(1, '360405', '16:30:00', '17:00:00', '2021-08-25', 'HRD', 'Main Office', 'Pelatihan Kerja', 'Ibu Mia', 'A 4323 CD', ''),
(2, '827584', '08:20:00', '08:25:00', '2021-08-24', 'HSE', 'Main Office', 'Safety Induction', 'Pak mamat', 'A 5523 CD', ''),
(3, '896446', '08:50:00', '10:00:00', '2021-08-25', 'Purchasing', 'Main Office', 'Menawarkan Produk', 'pak antoni', 'B 4719 RTU', ''),
(4, '138877', '10:05:00', '10:30:00', '2021-08-26', 'Boards of Directors', 'Main Office', 'Meeting pemegang saham', 'Mr. Yoshida', 'C 6081 CD', ''),
(5, '827584', '10:40:00', '11:05:00', '2021-08-27', 'General Affairs', 'Main Office', 'Meeting vendor', 'Pak Muhid', 'A 5523 CD', ''),
(6, '827584', '11:20:00', '11:50:00', '2021-08-28', 'Fin, Acc, Tax', 'Main Office', 'Audit keuangan', 'Pak amir', 'A 5523 CD', ''),
(7, '360405220899', '16:00:00', '17:00:00', '2021-08-31', 'PTL', 'Site', 'Studi banding', 'Pak Arief', 'D 8909 FD', ''),
(8, '360405220899', '14:00:00', '17:00:00', '2021-09-10', 'Quality Assurance', 'Site', 'inspeksi produk', 'pak riyadi', 'AB 7658 DKA', 'Pulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `ktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jkelamin` varchar(10) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `scan_ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`ktp`, `nama`, `jkelamin`, `tlp`, `jabatan`, `perusahaan`, `alamat`, `scan_ktp`) VALUES
('138877', 'Austin Adkins', 'Laki-Laki', '0891658', 'Supervisior', 'PT Serba Guna', 'Jl. Raya serang - cilego no 190', ''),
('360405', 'Arief', 'Laki-Laki', '081285356535', 'Pegawai', 'PT Pfrum', 'Komplek Bpp G1 no 1', ''),
('360405220899', 'Muhammad Arief Kasyfurrahman', 'Laki-Laki', '08129683754', 'Pemagang', 'PT. Cilegon Fabricators', 'Desa Argawana', 'Scan_KTP1.jpg'),
('827584', 'Rylee Francis', 'Laki-Laki', '0872025', 'Manager', 'PT Candra Asih', 'komplek permata hijau', ''),
('896446', 'Fergus Albert', 'Laki-Laki', '0883644', 'Shop Leader', 'PT Aztra Moneca', 'Komplek serang city', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ktp` (`ktp`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`ktp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `data_kegiatan_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `data_user` (`ktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
