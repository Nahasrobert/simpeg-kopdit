-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2023 pada 08.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Administrasi', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `tanggal`, `foto`) VALUES
(2, 'Semua Tergantung Kamu', '<p>Pada contoh 2 di atas, string dipotong sampai karakter ke-18 sehingga \r\nstring yang tampil dimulai dari karakter ke-19, jumlah karakter yang \r\nditampilkan hanya 7 sehingga menghasilkan Output sebagai berikut :</p><p>Pada contoh 2 di atas, string dipotong sampai karakter ke-18 sehingga \r\nstring yang tampil dimulai dari karakter ke-19, jumlah karakter yang \r\nditampilkan hanya 7 sehingga menghasilkan Output sebagai berikut :</p><p>Pada contoh 2 di atas, string dipotong sampai karakter ke-18 sehingga \r\nstring yang tampil dimulai dari karakter ke-19, jumlah karakter yang \r\nditampilkan hanya 7 sehingga menghasilkan Output sebagai berikut :</p><p>Pada contoh 2 di atas, string dipotong sampai karakter ke-18 sehingga \r\nstring yang tampil dimulai dari karakter ke-19, jumlah karakter yang \r\nditampilkan hanya 7 sehingga menghasilkan Output sebagai berikut :<br></p>', '2023-08-22', '1137767471_3399681628.jpg'),
(3, 'Pembagian Sembako', '<p><span style=\"color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\">Artikel ini telah diterbitkan di halaman SINDOnews.com pada Selasa, 24 Januari 2023 - 11:51 WIB oleh Puguh Hariyanto dengan judul \"Berbagi Kebaikan, SDG Jogja Salurkan Sembako ke Ibu-ibu Pengajian\". Untuk selengkapnya kunjungi:</span><br style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\">https://daerah.sindonews.com/read/1003963/707/berbagi-kebaikan-sdg-jogja-salurkan-sembako-ke-ibu-ibu-pengajian-1674532864</span><br style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\"><br style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\">Untuk membaca berita lebih mudah, nyaman, dan tanpa banyak iklan, silahkan download aplikasi SINDOnews.</span><br style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\">- Android:&nbsp;</span><a href=\"https://sin.do/u/android\" style=\"-webkit-tap-highlight-color: transparent; font-family: Heebo-Regular, Arial, Tahoma; font-size: medium; background-color: rgb(255, 255, 255);\">https://sin.do/u/android</a><br style=\"-webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Heebo-Regular, Arial, Tahoma; font-size: medium;\">- iOS:&nbsp;</span><a href=\"https://sin.do/u/ios\" style=\"-webkit-tap-highlight-color: transparent; font-family: Heebo-Regular, Arial, Tahoma; font-size: medium; background-color: rgb(255, 255, 255);\">https://sin.do/u/ios</a><br></p>', '2023-03-23', '1182629764_berbagi-kebaikan-sdg-jogja-salurkan-sembako-ke-ibuibu-pengajian-nza.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `lama_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pegawai`, `tanggal_cuti`, `lama_cuti`) VALUES
(2, 1, '2023-04-08', '10 Bulan'),
(3, 2, '2023-03-07', '3 Bulan'),
(7, 13, '2023-03-31', '3 Bulan f'),
(10, 14, '2023-03-21', '2 Bulanm'),
(11, 16, '2023-03-23', '2 Bulan'),
(12, 17, '2023-03-02', '3 Bulan'),
(13, 18, '2023-03-06', '2 Bulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `besar_gaji` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id_pegawai`, `besar_gaji`) VALUES
(2, 16, '656565656'),
(3, 14, '322556333'),
(4, 17, '65852222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(2, 'Kabid'),
(4, 'Kabid Infokom'),
(5, 'Kepala Desa Kuanino');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `tmpt_mutasi` varchar(50) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `sk_mutasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `id_pegawai`, `tmpt_mutasi`, `tgl_mutasi`, `sk_mutasi`) VALUES
(6, 1, 'Jakarta-Surabaya', '2023-05-03', '609581017_adsad.pdf'),
(8, 14, 'Kualin11', '2023-03-14', '1741531870_adsad.pdf'),
(9, 13, 'Kupang', '2023-03-22', '1134893134_adsad.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `pend_terakhir` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `id_jabatan`, `pend_terakhir`, `status`) VALUES
(13, 'Robert Nahas', 'Soe', '2023-03-21', 'Laki-laki', 2, 'TAMAT SD / SEDERAJAT', 'Kawin'),
(14, 'Desi', 'Soekupang', '2023-04-18', 'Perempuan', 4, 'STRATA II', 'Belum Kawin'),
(16, 'Sayang', 'Soe e', '1999-12-12', 'Laki-laki', 5, 'DIPLOMA I / II', 'Kawin'),
(17, 'Paul', 'Soe', '2023-03-04', 'Laki-laki', 4, 'STRATA II', 'Kawin'),
(18, 'Yosua', 'Kupang', '2023-03-15', 'Laki-laki', 2, 'STRATA II', 'Kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE `pensiun` (
  `id_pensiun` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `tgl_pensiun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pensiun`
--

INSERT INTO `pensiun` (`id_pensiun`, `id_pegawai`, `tgl_pensiun`) VALUES
(2, 1, '2023-04-06'),
(3, 14, '2023-03-08'),
(4, 16, '2023-03-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Kopdit Sinar Harapan Kabupaten Ngada', '<div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">KOPDIT Sinar Harapan didirikan pada 1 Januari 1982 </span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">yang dimotori oleh Klemens Kolo salah seorang guru SMP Pancakarsa (kini SMP Negeri Aimere II) dengan modal awal sekitar Rp 234.000. Namun antara tahun 1984-1986 Kopdit Sinar Harapan mengalami mati suri.</span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">Pada tahun 1987 mantan kepala desa Inerie Rofinus Raga (almarhum) mengutus beberapa orang yang dianggap mampu untuk mengikuti pendampingan yang diberikan oleh Perwakilan BK3D Bagian Barat yang sekarang dikenal dengan Puskopdit Bekatigade Ende-Nagekeo-Ngada (BENN). Dengan bekal pendampingan itu Rofinus Raga dan kawan-kawan mulai menata kembali Kopdit Sinar Harapan yang sudah mati suri itu.</span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">Awal tahun 1988 Kopdit Sinar Harapan mengadakan Rapat Anggota Tahunan yang pertama dari kebangkitannya yang kedua. Rofinus Raga dipilih menjadi ketua yang pertama dan Yoseph Madha, salah seorang guru Sekolah Dasar dipinang sebagai wakil ketua. Dari tahun ke tahun anggota terus bertambah dan tidak hanya dalam wilayah desa Inerie tetapi mulai menyebar ke desa-desa lain bahkan sampai ke Mborong Kabupaten Manggarai (Kini Kabupaten Manggarai Timur). Setelah empat tahun TP Mborongberkembang<br>Yoseph Madha,dan berdiri sendiri menjadi Kopdit Hanura dan menjadi satu-satunya Kopdit berbadan hukum serta menjadi embrio berdirinya Puskopdit di Manggarai.</span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">Kopdit Sinar Harapan ibarat gadis cantik yang sedang laris diincar pemerintah kabupaten Ngada untuk diberdayakan sehingga ada dampak lain dari tujuan simpan pinjam. Atas maksud ini tahun 1988 pemerintah kabupaten Ngada memberikan dana bergulir P2LDT sebesar Rp 1.500.000 yang difokuskan untuk perbaikan rumah rakyat. Dana dikelola dengan baik sehingga menjadi dana abadi lembaga.</span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">Akhir tahun 1998 Rofinus Raga meninggal dunia masih dalam statusnya sebagai ketua Kopdit periode IV. Pada saat RAT awal tahun 1999 anggota memilih Yoseph Madha sebagai ketua Kopdit. Pengelolaan Kopdit pun dijalankan sesuai dengan pola manajemen yang berlaku dalam koperasi. Saat ini ketua Kopdit dipercayakan kepada Yoseph Madha, Wakil Ketua Hendrikus keo, Sekretaris Cornelis Rie, Bendahara Philipus Tuga. Pengawas diketuai Aloisius Beo dan anggota masing-masing Aloysius Dea dan Bhara Urbanus sedangkan penasihat diketuai Adrianus Raga dan anggota masing-masing Rm. Paulus Sabu,Pr dan Nikolaus Lange. Manajer Yohanes Soba dengan 9 staf sesuai dengan keahlian masing-masing.</span></div><div style=\"font-size: 15px; border: medium none;\"><span style=\"color: inherit;\">Berbagai prestasi disandang oleh Kopdit Sinar Harapan. Tahun 2000 bersama 4 kopdit lainnya di Kabupaten Ngada dipilih oleh Inkopdit menjadi kopdit model 2000. Sebagai Kopdit model mengikuti pelatihan dengan system modul yang dikenal dengan modul 1 sampai 4, ketua dan manajer diundang mengikuti lokakarya kopdit model tingkat nasional dan studi banding di beberapa kopdit model di Denpasar Bali, Sawiran malang dan Probolinggo dan Gunung Kidul. Tahun 2004 terpilih sebagai salah satu kopdit berprestasi tingkat nasional kategori koperasi simpan pinjam, juara I Kopdit berprestasi tingkat provinsi NTT, juara I Kopdit berprestasi tingkat kabupaten Ngada.***agusg thuru</span></div>', 'Sayanfgmfmglf', 'Semuasajslajsla');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `id_pensiun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
