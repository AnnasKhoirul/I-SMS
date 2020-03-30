-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2018 pada 07.50
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_sms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `icon`, `keterangan`) VALUES
(1, 'fa-home', 'Jl.Kh.Sirojudin Gg.Bharata no.13'),
(2, 'fa-envelope', 'i_sms@gmail.com'),
(3, 'fa-phone', '+ 01 234 484 86'),
(4, 'fa-phone-square', '+ 01 234 484 87');

-- --------------------------------------------------------

--
-- Struktur dari tabel `definisi`
--

CREATE TABLE `definisi` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `definisi`
--

INSERT INTO `definisi` (`id`, `foto`, `judul`, `content`, `content2`) VALUES
(1, '2.jpg', 'I SMS GATEWAY', ' I SMS gateway merupakan sebuah sistem aplikasi yang digunakan untuk mengirim dan atau menerima SMS bisa dalam jumlah yang banyak, dan biasanya digunakan pada aplikasi bisnis, baik untuk kepentingan broadcast promosi, servis informasi terhadap pengguna, penyebaran content produk / jasa dan lain lain.', 'Sistem ini dikembangkan dengan harapan bisa memenuhi ekspektasi dari manajemen Perusahaan, Event Organizer, Organisasi, dll terkait untuk memberi informasi mengenai produk, jasa, dll agar dikenal oleh msyarakat luas untuk mewujudkan target-target tertentu melalui pelayanan yang profesional dan komprehensif.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id`, `icon`, `nama`, `deskripsi`) VALUES
(1, 'fa-laptop', 'USER FRIENDLY', 'Tampilan yang mudah digunakan bagi semua user, bahkan user baru pun bisa langsung menggunakan sistem I SMS GATEWAY'),
(7, 'fa-share', 'AUTO FORWARD SMS', 'Anda bisa memforward semua SMS yang masuk, tujuannya bisa ke nomor tertentu maupun ke anggota grup phonebook'),
(8, 'fa-reply', 'AUTO REPLY SMS', 'Anda bisa membuat balasan otomatis dari semua SMS yang masuk ke inbox dengan ataupun tanpa kata kunci'),
(10, 'fa-calendar', 'SMS TERJADWAL', 'Jadwal pengiriman SMS sesuai dengan tanggal dan waktu yang diinginkan'),
(33, 'fa-envelope-o', 'PENGIRIMAN SMS', 'Memungkinkan untuk melakukan Pengiriman SMS ke 1 Kontak, Banyak Kontak, dan Group'),
(34, 'fa-paper-plane', 'PENGIRIMAN CEPAT', 'Pengiriman SMS hingga 9000 SMS/Jam (Paket Reguler)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `icon1` varchar(100) NOT NULL,
  `spesifikasi1` varchar(255) NOT NULL,
  `icon2` varchar(100) NOT NULL,
  `spesifikasi2` varchar(255) NOT NULL,
  `icon3` varchar(100) NOT NULL,
  `spesifikasi3` varchar(255) NOT NULL,
  `icon4` varchar(100) NOT NULL,
  `spesifikasi4` varchar(255) NOT NULL,
  `icon5` varchar(100) NOT NULL,
  `spesifikasi5` varchar(255) NOT NULL,
  `icon6` varchar(100) NOT NULL,
  `spesifikasi6` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `warna_tabel` enum('pricingTable','pricingTable green') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `nama`, `harga`, `satuan`, `icon1`, `spesifikasi1`, `icon2`, `spesifikasi2`, `icon3`, `spesifikasi3`, `icon4`, `spesifikasi4`, `icon5`, `spesifikasi5`, `icon6`, `spesifikasi6`, `button`, `warna_tabel`) VALUES
(1, 'SMS REGULER', 'Rp80', 'sms', 'fa-check', 'SEMI 2 ARAH', 'fa-check', 'NOMOR GSM ACAK(RANDOM)', 'fa-check', '100 SMS / MENIT', 'fa-check', 'SMS INBOX', 'fa-times', ' AUTOREPLY SMS', 'fa-times', 'AUTOFORWARD SMS', 'PESAN', 'pricingTable'),
(3, 'SMS CENTER', 'Rp165', 'bulan', 'fa-check', '2 ARAH', 'fa-check', 'NOMER GSM TETAP (FIXED)', 'fa-check', '10 SMS / MENIT', 'fa-check', 'SMS INBOX', 'fa-check', 'AUTOREPLY SMS', 'fa-check', 'AUTOFORWARD SMS', 'PESAN', 'pricingTable green'),
(4, 'SMS MASKING', 'Rp250', 'sms', 'fa-check', '1 ARAH', 'fa-check', 'ALPHANUMERIC(CUSTOMIZE)', 'fa-check', '1200 SMS / MENIT', 'fa-times', 'SMS INBOX', 'fa-times', 'AUTOREPLY SMS', 'fa-times', 'AUTOFORWARD SMS', 'PESAN', 'pricingTable');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `background` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `background`, `judul`, `nama_button`) VALUES
(1, 'sms-bg.jpg', 'I SMS GATEWAY', 'READ MORE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `icon_sosialmed`
--

CREATE TABLE `icon_sosialmed` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `icon_sosialmed`
--

INSERT INTO `icon_sosialmed` (`id`, `icon`, `nama`) VALUES
(1, 'fa-facebook', 'facebook'),
(2, 'fa-twitter', 'Twitter'),
(3, 'fa-google-plus', 'Google-plus'),
(4, 'fa-linkedin', 'Linkedin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `i_sms`
--

CREATE TABLE `i_sms` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `i_sms`
--

INSERT INTO `i_sms` (`id`, `deskripsi`) VALUES
(1, 'Kami menyediakan layanan sms yang bisa anda nikmati, kami menyediakan beberapa produk dan fitur menarik yang bisa anda dapatkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_page`
--

CREATE TABLE `judul_page` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `subs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul_page`
--

INSERT INTO `judul_page` (`id`, `judul`, `subs`) VALUES
(2, 'FITUR', 'Kami menyediakan beberapa fitur menarik diantaranya sebagai  berikut'),
(3, 'PRODUK', 'Kami Memiliki Beberapa Produk Yang Tersedia'),
(4, 'HARGA ', 'Daftar Harga Yang Telah Kami Sediakan'),
(5, 'PESAN', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `nama_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_multi`
--

CREATE TABLE `login_multi` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_multi`
--

INSERT INTO `login_multi` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'khoirul', 'annas', 'user'),
(4, 'annas', '12345', 'user'),
(5, 'asd', 'asad', 'user'),
(6, 'admin', 'admin', 'user'),
(7, 'admin', 'adminn', 'user'),
(8, 'admin', 'admin', 'user'),
(9, 'annas', 'annas', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_footer`
--

CREATE TABLE `nama_footer` (
  `id` int(11) NOT NULL,
  `footer1` varchar(255) NOT NULL,
  `footer2` varchar(255) NOT NULL,
  `footer3` varchar(255) NOT NULL,
  `footer4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_footer`
--

INSERT INTO `nama_footer` (`id`, `footer1`, `footer2`, `footer3`, `footer4`) VALUES
(1, 'I SMS', 'Products', 'Useful links', 'Contact');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `nama_logo` varchar(255) NOT NULL,
  `menu_nav` varchar(255) NOT NULL,
  `menu_nav2` varchar(255) NOT NULL,
  `menu_nav3` varchar(255) NOT NULL,
  `menu_nav4` varchar(255) NOT NULL,
  `menu_nav5` varchar(255) NOT NULL,
  `menu_nav6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `navbar`
--

INSERT INTO `navbar` (`id`, `nama_logo`, `menu_nav`, `menu_nav2`, `menu_nav3`, `menu_nav4`, `menu_nav5`, `menu_nav6`) VALUES
(1, 'I SMS', 'Home', 'Definisi', 'Fitur', 'Produk', 'Harga', 'Pesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama_products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_products`) VALUES
(1, 'SMS REGULER'),
(2, 'SMS CENTER'),
(3, 'SMS MASKING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `foto`, `nama`, `content`) VALUES
(1, 'sms_reguler.jpg', 'SMS REGULER', 'Layanan SMS Gateway Online dengan menggunakan nomor GSM acak dari server\r\nMedanSMS untuk kebutuhan kirim SMS Massal berupa pengumuman/informasi '),
(26, 'sms_center.jpg', 'SMS CENTER', 'Layanan SMS Gateway Online dengan menggunakan nomor SMS Center khusus yang bersifat 2 Arah untuk kebutuhan Kirim dan Terima SMS pada Perusahaan Anda'),
(27, 'sms_masking.jpg', 'SMS MASKING', 'Layanan SMS dengan menampilkan identitas (Sender ID) berupa AlphaNumeric yang dapat di customize menjadi nama usaha Anda. SMS ini bersifat 1 Arah (tidak dapat dibalas)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `useful_links`
--

CREATE TABLE `useful_links` (
  `id` int(11) NOT NULL,
  `nama_link` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `useful_links`
--

INSERT INTO `useful_links` (`id`, `nama_link`, `nama`) VALUES
(1, 'intro', 'Home'),
(2, 'about', 'About'),
(3, 'services', 'Services');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `definisi`
--
ALTER TABLE `definisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `icon_sosialmed`
--
ALTER TABLE `icon_sosialmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `i_sms`
--
ALTER TABLE `i_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `judul_page`
--
ALTER TABLE `judul_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_multi`
--
ALTER TABLE `login_multi`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `nama_footer`
--
ALTER TABLE `nama_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `useful_links`
--
ALTER TABLE `useful_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `definisi`
--
ALTER TABLE `definisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `icon_sosialmed`
--
ALTER TABLE `icon_sosialmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `i_sms`
--
ALTER TABLE `i_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `judul_page`
--
ALTER TABLE `judul_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_multi`
--
ALTER TABLE `login_multi`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `nama_footer`
--
ALTER TABLE `nama_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `useful_links`
--
ALTER TABLE `useful_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
