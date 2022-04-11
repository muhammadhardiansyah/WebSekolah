-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2022 pada 17.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi`, `gambar`, `kategori`, `penulis`, `created_at`) VALUES
(29, 'Orientation Programme For New Students', '                                                                                                                                                 Orientation Programme For New Students. Orientation Programme For New Students. Orientation Programme For New Students.                                                                                        ', 'latest-new-img_1649047515.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(34, 'Orientation Programme For New Students.', '                                                Orientation Programme For New Students. Orientation Programme For New Students. Orientation Programme For New Students.                                            ', 'latest-new-img_1649047542.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(35, 'Orientation Programme For New Students.', '                                                Orientation Programme For New Students.Orientation Programme For New Students.Orientation Programme For New Students.                                            ', 'latest-new-img_1649047571.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(36, 'Orientation Programme For New Students.', '                                                Orientation Programme For New Students.Orientation Programme For New Students.Orientation Programme For New Students.                                            ', 'latest-new-img_1649047589.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(38, 'Perayaan Ulang Tahun SMP Negeri 2 Patikraja', '                                                                                                                                                Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. 											                                                                                                                                    ', 'gallery-img3_1649047785.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(39, 'Perayaan Ulang Tahun SMP Negeri 2 Patikraja. ', '                                                Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. 											                                            ', 'gallery-img2_1649047671.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(40, 'Perayaan Ulang Tahun SMP Negeri 2 Patikraja. ', '                                                Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. 											                                            ', 'gallery-img3_1649047702.jpg', 'Berita Sekolah', 'Admin', '2022-04-06'),
(41, 'Perayaan Ulang Tahun SMP Negeri 2 Patikraja. ', '                                                Perayaan Ulang Tahun SMP Negeri 2 Patikraja. Perayaan Ulang Tahun SMP Negeri 2 Patikraja. 											                                            ', 'gallery-img3_1649047713.jpg', 'Berita Sekolah', 'Admin', '2022-04-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `nomor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gmaps` varchar(510) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `deskripsi`, `nomor`, `email`, `gmaps`) VALUES
(6, '                                                                                                                                                                                                                                                                                                                                                <p style=\"box-sizing: inherit; outline: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(64, 64, 64); font-family: Raleway, sans-serif;\"><span style=\"font-size: 1rem;\">JL. Balai Desa, Desa Kedungwuluh&nbsp;</span><span style=\"font-size: 1rem;\">Lor&nbsp;</span><span style=\"font-size: 1rem;\">Patikraja, Clibur, Kec,Banyumas,&nbsp;</span><span style=\"font-size: 1rem;\">Kab.Banyumas, Jawa Tengah 53171</span></p><p style=\"box-sizing: inherit; outline: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(64, 64, 64); font-family: Raleway, sans-serif;\"><span style=\"font-size: 1rem;\">                                            </span></p>                                                                                                                                                                                                                                                                        ', '(0281) 6574601', 'smpn2patikraja@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.9821591647383!2d109.20853791530527!3d-7.467221175683686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655d8dbfdd3a37%3A0xad34d9ded11bd022!2sSMP%20N%202%20Patikraja!5e0!3m2!1sid!2sid!4v1646690082010!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`, `kategori`) VALUES
(1, 'gallery-img1_1649044802.jpg', 'Extravaganza'),
(2, 'gallery-img3_1649044879.jpg', 'Extravaganza'),
(3, 'gallery-img4_1649044904.jpg', 'Extravaganza'),
(4, 'gallery-img2_1649044990.jpg', '17 Agustus'),
(5, 'gallery-img9_1649045005.jpg', '17 Agustus'),
(6, 'gallery-img10_1649045018.jpg', '17 Agustus'),
(7, 'gallery-img5_1649045048.jpg', 'Ulang Tahun'),
(8, 'gallery-img6_1649045061.jpg', 'Ulang Tahun'),
(9, 'gallery-img8_1649045073.jpg', 'Osis'),
(10, 'gallery-img11_1649045095.jpg', 'Osis'),
(11, 'gallery-img12_1649045108.jpg', 'Osis'),
(12, 'gallery-img7_1649045133.jpg', 'Osis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `id_jabatan`, `gambar`) VALUES
(13, '', 0, 'course3-img_1649045586.jpg'),
(14, 'Bibek Basnet', 4, 'developer-img_1649046057.jpg'),
(15, 'Bibek Basnet', 4, 'developer-img_1649046067.jpg'),
(16, 'Bibek Basnet', 4, 'developer-img_1649046082.jpg'),
(17, 'Bibek Basnet', 4, 'developer-img_1649046090.jpg'),
(18, 'Bibek Basnet', 4, 'developer-img_1649046097.jpg'),
(19, 'Bibek Basnet', 4, 'developer-img_1649046105.jpg'),
(20, 'Bibek Basnet', 4, 'developer-img_1649046117.jpg'),
(21, 'Bibek Basnet', 4, 'developer-img_1649046126.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `judul`, `deskripsi`) VALUES
(1, 'Sambutan Kepala Sekolah', 'Assalamualaikum Wr.Wb. Selamat datang di Website resmi SMP Negeri 9 Purwokerto. Media website ini kami buat sebagai media informasi, pembelajaran dan digitalisasi sistem informasi manajemen sekolah, serta dalam upaya mendukung pembelajaran online di masa pandemi ini.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Guru Pertama'),
(2, 'Guru Muda'),
(3, 'Guru Madya'),
(4, 'Guru Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_tenaga`
--

CREATE TABLE `jabatan_tenaga` (
  `id_tenaga` int(11) NOT NULL,
  `tenaga_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan_tenaga`
--

INSERT INTO `jabatan_tenaga` (`id_tenaga`, `tenaga_kerja`) VALUES
(1, 'Tata Usaha'),
(2, 'IT'),
(3, 'Penjaga Lab'),
(4, 'Satpam'),
(5, 'Petugas Kebersihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE `kepsek` (
  `id_kepsek` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `nama`, `gambar`) VALUES
(1, 'Debby Bisnet', 'customer-img_1649510016.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`gambar`) VALUES
('site-logo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `urutan`, `judul`, `deskripsi`, `gambar`) VALUES
('1', 1, 'SMP NEGERI 2 PATIKRAJA', '                                                                                                                                                                                            \r\nSekolah Berwawasan Budi Pekerti                                                                                        ', 'DSC_0730_1649046447.jpg'),
('2', 2, 'SMP NEGERI 2 PATIKRAJA', '                                                Sekolah Berwawasan Budi Pekerti                                            ', 'DSC_0910.JPG_1649046602.jpg'),
('3', 3, 'SMP NEGERI 2 PATIKRAJA', '                                                                                                                                                Sekolah Berwawasan Budi Pekerti                                            ', 'DSC_1009_1649046609.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kerja`
--

CREATE TABLE `tenaga_kerja` (
  `id_tenaga_kerja` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_tenaga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tenaga_kerja`
--

INSERT INTO `tenaga_kerja` (`id_tenaga_kerja`, `nama`, `id_tenaga`, `gambar`) VALUES
(13, 'Bibek Basnet', 2, 'developer-img_1649046181.jpg'),
(14, 'Bibek Basnet', 2, 'developer-img_1649046187.jpg'),
(15, 'Bibek Basnet', 2, 'developer-img_1649046196.jpg'),
(16, 'Bibek Basnet', 2, 'developer-img_1649046204.jpg'),
(17, 'Bibek Basnet', 2, 'developer-img_1649046210.jpg'),
(18, 'Bibek Basnet', 2, 'developer-img_1649046217.jpg'),
(19, 'Bibek Basnet', 2, 'developer-img_1649046224.jpg'),
(20, 'Bibek Basnet', 2, 'developer-img_1649046229.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`) VALUES
(1, '                                                                                                                                                                                                                                                                                                                                                                                                                                                <div><span style=\"color: rgb(100, 100, 100); font-family: Raleway, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></div>                                                                                        ', '                                                                                                                                                                                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proidents                                                                                                                                                                                ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `jabatan_tenaga`
--
ALTER TABLE `jabatan_tenaga`
  ADD PRIMARY KEY (`id_tenaga`);

--
-- Indeks untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id_kepsek`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tenaga_kerja`
--
ALTER TABLE `tenaga_kerja`
  ADD PRIMARY KEY (`id_tenaga_kerja`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatan_tenaga`
--
ALTER TABLE `jabatan_tenaga`
  MODIFY `id_tenaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id_kepsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tenaga_kerja`
--
ALTER TABLE `tenaga_kerja`
  MODIFY `id_tenaga_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
