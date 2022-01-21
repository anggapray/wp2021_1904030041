-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 17.25
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
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'imam setya wardana', 'jl.sukaramai rt02/rw8 no7 gank.guan', 'laki-laki', 'islam', 'smk iqro', 'foto1.jpg'),
(2, 'angga prayoga', 'jl.raya rajeg rt03/rw05 no15 gank.kelinci', 'laki-laki', 'islam', 'permata insani', 'foto1.jpg'),
(3, 'tatang pratama', 'jl.kemarau rt04/rw9 NO1 gank.kodok', 'laki-laki', 'islam', 'tadika mesra', 'foto1.jpg'),
(4, 'eko riyanti', 'jl.kemanusian rt02/rw05 NO12 ', 'laki-laki', 'islam', 'smk iqro', 'foto1.jpg'),
(5, 'susanti', 'jl.kemanusian rt02/rw05 NO11', 'perempuan', 'islam', 'tadika mesra', 'foto2.png'),
(13, 'awaludin', 'jl.baru buat', 'laki-laki', 'islam', 'smk ibu kita', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `foto_dosen` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nidn` int(10) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_rumah` char(200) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan_s1` varchar(30) NOT NULL,
  `pendidikan_s2` varchar(30) NOT NULL,
  `pendidikan_s3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`foto_dosen`, `nama`, `nidn`, `jenis_kelamin`, `email`, `alamat_rumah`, `agama`, `pendidikan_s1`, `pendidikan_s2`, `pendidikan_s3`) VALUES
('foto1.jpg', 'kamaludin', 150403001, 'laki-laki', 'kamaludin123@gmail.com', 'jln.pasar senin rt 04/rw07 No 5 gank.walet', 'islam', 'ekonomi dan bisnis manajemen', 'ekonomi nasional', '-'),
('foto2.png', 'wahyuni', 150403002, 'perempuan', 'wahyuni123@gmail.com', 'jln.pasar selasa rt 02/rw05 No 9 gank.cemara', 'islam', 'ilmu administrasi', 'administrasi bisnis', '-'),
('foto1.jpg', 'awaludin', 150403003, 'laki-laki', 'awaludin123@gmail.com', 'pasar rabu jl.kemerdekaan', 'islam', 'ilmu komputer', 'rekayasa perangkat lunak', '-'),
('foto2.png', 'putri fitri', 150403004, 'perempuan', 'putri123@gmail.com', 'pasar kemis jl.kenari', 'islam', 'kedokteran', 'kedokteran', ''),
('foto1.jpg', 'akhirudin', 150403005, 'laki-laki', 'akhirudin123@gmail.com', 'pasarsabtu', 'islam', 'hukum', 'ilmu hukum', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  MODIFY `nidn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150403006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
