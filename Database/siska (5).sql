-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2018 pada 16.33
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siska`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `uid` int(11) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_user` int(10) NOT NULL,
  `id_Unit` int(10) NOT NULL,
  `status` tinyint(5) DEFAULT '1',
  `session_id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`uid`, `picture`, `nama`, `username`, `password`, `email`, `jenis_user`, `id_Unit`, `status`, `session_id`) VALUES
(1, NULL, 'reza saputra', 'reza', 'd2000021daf73bd16714d014fed9ea81', 'rejax.adinur@gmail.com', 4, 0, 1, '588e9cccf05edc9290e5a77ba49adf8ed42bcaf5'),
(2, NULL, 'Pusaka', 'pusaka', 'bbef9fc45ede898c5faf5ca5f51c3566', 'analiskebijakan@gmail.com', 5, 0, 1, 'aa80e5f72508746001497ba6b8ccd4a7b3070404'),
(3, NULL, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rejax.adinur@gmail.com', 1, 0, 1, '588e9cccf05edc9290e5a77ba49adf8ed42bcaf5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(20) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `url` varchar(255) NOT NULL,
  `author` int(10) NOT NULL,
  `categories` int(10) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `views` int(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_awal` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `deskripsi`, `url`, `author`, `categories`, `tag`, `views`, `tanggal`, `tgl_awal`, `active`) VALUES
(6, 'img_1534241190.jpg', 'Seminar Berbagi Pengetahuan dan Pengalaman tentang Kebijakan Berbasis Bukti', 'sadassd', '', 5, 10, 'asdd', 3, '2018-08-14 02:27:36', '2018-08-14 16:08:36', 1),
(7, 'img_1534382763.jpg', '61 Tahun LAN : Terus Berkarya Untuk Menyiapkan Gen', '<p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">Jakarta - Kepala Lembaga Administrasi Negara (LAN) Dr. Adi Suryanto mengajak seluruh komponen bangsa untuk terus berkomitmen melakukan berbagai terobosan dan inovasi untuk menjawab tantangan jaman dalam upaya pengembangan kapasitas Aparatur Sipil Negara (ASN). Hal itu disampaikannya saat memberikan sambutan pada acara pembukaan puncak peringatan HUT LAN yang Ke-61 di Auditorium Prof. Dr. Agus Dwiyanto, MPA, LAN Jakarta, Senin (6/8).</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\"><br></p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">”Saya mengajak seluruh komponen bangsa untuk terus berikhtiar mencari terobosan guna menjawab berbagai tantangan jaman untuk melahirkan sejumlah agenda-agenda perubahan di bidang pengembangan kompetensi ASN,” kata dia.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">Adi Suryanto mengatakan, sejumlah langkah strategis telah ditempuh LAN dalam pengembangan kapasitas ASN dengan digagasnya konsep ASN Corporate University.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">“Konsep ini diawali dari pemikiran bahwa saat ini kita memiliki kurang lebih 737 lembaga diklat yang tersebar di seluruh instansi pemerintah baik daerah maupun pusat. Namun lembaga diklat itu tidak terintegrasi sebagai suatu kekuatan yang luar biasa sehingga perlu direformulasi ulang,” jelasnya.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">Adi Suryanto juga mengajak seluruh pegawai LAN untuk bersama-sama meningkatkan komitmen, dedikasi dan semangat dalam mengabdi dan mendedikasikan diri demi kemajuan bangsa dan negara.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">“Usia 61 tahun merupakan usia yang cukup matang bagi perjalanan sebuah institusi pemerintah. LAN telah mengalami perjalanan yang cukup panjang dengan berbagai dinamika dan perubahan yang terjadi. Semakin hari tantangannnya semakin luar biasa,” tambahnya.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">Dalam kesempatan tersebut, Kepala LAN juga menyampaikan penghargaan dan apresiasi kepada seluruh mitra kerja, pegawai, widyaiswara, analis kebijakan serta seluruh Kementerian, Lembaga dan Daerah atas dedikasinya untuk bersama-sama mengembangkan penguatan kapasitas ASN melalui beberapa penghargaan, yaitu: Penganugerahan Widyaiswara Ahli Utama Kehormatan kepada Gubernur Jawa Timur Soekarwo dan Gubernur Sumatera Selatan Alex Noerdin.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">“Apresiasi kepada Gubernur Provinsi Jawa Timur dan Gubernur Provinsi Sumatera Selatan yang kita undang secara khusus karena LAN punya pertimbangan khusus untuk memberikan penghargaan atas dedikasi dan perhatiannya yang luar biasa terhadap upaya pengembangan kompetensi ASN. Keduanya juga sebagai alumni terbaik diklatpim. Terima kasih atas progress pengelolaan BPSDM di jatim yang semakin baik. Mudah-mudahan pemikiran karyanya bisa ditularkan,” jelasnya.</p><p style=\"margin-top: 0px; margin-bottom: 10px; color: rgb(136, 136, 136); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 14px; text-align: justify;\">Selain itu LAN juga memberikan penghargaan kepada &nbsp;Widyaiswara Terbaik, pemenang Inovasi Administrasi Negara (INAGARA), Penganugerahan Analis Kebijakan Untuk Indonesia (AKUI) Award, Penganugerahan Lembaga Diklat Terbaik dengan tema&nbsp;<em>Techno Training Center</em>, mahasiswa STIA LAN terbaik untuk program sarjana dan magister dan unit kerja terbaik dalam pengelolaan anggaran, teknologi informasi dan media sosial. Penganugerahan tersebut merupakan puncak dari seluruh rangkaian acara peringatan HUT Ke-61 LAN. (irena/budiprayitno)</p>', '', 5, 12, '', 3, '2018-08-15 18:26:03', '2018-08-16 08:08:03', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah_download` int(10) NOT NULL,
  `kategori` int(10) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `judul`, `file`, `ukuran`, `ext`, `tgl`, `jumlah_download`, `kategori`, `active`) VALUES
(0, 'Renstra PKDOD 2015-2019', 'doc_1535179363.pdf', '574719', 'application/pdf', '2018-08-25 06:42:43', 0, 9, 0),
(0, 'Renstra Praksis 2015-2019', 'doc_1535179401.pdf', '1559424', 'application/pdf', '2018-08-25 06:43:21', 0, 9, 0),
(0, 'Renstra PKSANHAN 2015-2019', 'doc_1535179479.pdf', '860837', 'application/pdf', '2018-08-25 06:44:39', 0, 9, 0),
(0, 'Renstra Pusaka 2015-2019', 'doc_1535179592.pdf', '1275087', 'application/pdf', '2018-08-25 06:46:33', 0, 9, 0),
(0, 'Renstra DKK 2015-2019', 'doc_1535179681.pdf', '793065', 'application/pdf', '2018-08-25 06:48:01', 0, 9, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_form`
--

CREATE TABLE `download_form` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `nomor` int(30) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `id_down` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download_form`
--

INSERT INTO `download_form` (`id`, `nama`, `email`, `instansi`, `nomor`, `keperluan`, `id_down`, `active`) VALUES
(1, 'reza', 'xaaxa', 'axaxa', 0, 'Keperluadsfdn', 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `status`, `timestamp`) VALUES
(1, 'img_1505279764.jpg', 1, '2017-09-12 22:16:04'),
(2, 'img_1505283172.jpg', 1, '2017-09-12 23:12:52'),
(4, 'img_1505318738.jpg', 1, '2017-09-13 09:05:38'),
(7, 'img_1505318787.png', 1, '2017-09-13 09:06:27'),
(8, 'img_1505318807.jpg', 1, '2017-09-13 09:06:47'),
(9, 'img_1505318813.jpg', 1, '2017-09-13 09:06:53'),
(10, 'img_1505318825.jpg', 1, '2017-09-13 09:07:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `web` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian`
--

CREATE TABLE `kajian` (
  `id` int(10) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Abstrak` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `Penyusun` varchar(255) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `id_unit` int(10) NOT NULL,
  `Tahun` int(10) NOT NULL,
  `File` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `jumlah_view` int(10) NOT NULL,
  `jumlah_download` int(10) NOT NULL,
  `nilai_kemanfaatan` float NOT NULL,
  `status` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kajian`
--

INSERT INTO `kajian` (`id`, `Judul`, `Abstrak`, `keyword`, `Penyusun`, `id_jenis`, `id_unit`, `Tahun`, `File`, `cover`, `jumlah_view`, `jumlah_download`, `nilai_kemanfaatan`, `status`, `Tanggal`) VALUES
(7, 'sippp', 'okokokoko', 'sip', '1', 1, 1, 2018, 'doc_1534664533.docx', '', 0, 0, 0, 5, '2018-08-19 07:42:13'),
(8, 'okoko', 'sippp', 'po', '1', 1, 1, 2019, 'doc_1534691386.docx', '', 0, 0, 0, 1, '2018-08-19 15:09:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian_lampiran`
--

CREATE TABLE `kajian_lampiran` (
  `id` int(11) NOT NULL,
  `id_kajian` int(11) NOT NULL,
  `id_tahap` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kajian_lampiran`
--

INSERT INTO `kajian_lampiran` (`id`, `id_kajian`, `id_tahap`, `judul`, `file`, `tanggal`) VALUES
(1, 1, 1, 'dicoba', 'doc_1534684078.docx', '2018-08-19 13:07:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian_tahap`
--

CREATE TABLE `kajian_tahap` (
  `id` int(10) NOT NULL,
  `id_kajian` int(10) NOT NULL,
  `id_tahap` int(10) NOT NULL,
  `uraian` text NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `google_drive` varchar(100) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_verif` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kajian_tahap`
--

INSERT INTO `kajian_tahap` (`id`, `id_kajian`, `id_tahap`, `uraian`, `berkas`, `google_drive`, `tgl_dibuat`, `tgl_verif`, `status`) VALUES
(4, 1, 1, 'sippp ndaaa', 'doc_1534682740.docx', 'www.google.com', '2018-08-19 00:00:00', '0000-00-00 00:00:00', 1),
(5, 8, 1, 'popo', 'doc_1534692602.docx', 'reja.com', '2018-08-19 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian_ulasan`
--

CREATE TABLE `kajian_ulasan` (
  `id` int(10) NOT NULL,
  `id_kajian` int(10) NOT NULL,
  `id_tahap` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `komentar` text NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kajian_ulasan`
--

INSERT INTO `kajian_ulasan` (`id`, `id_kajian`, `id_tahap`, `id_user`, `komentar`, `Tanggal`) VALUES
(1, 1, 1, 0, 'seeprti ini', '2018-08-19 13:45:03'),
(2, 8, 1, 4, 'cukup bagus', '2018-08-19 15:48:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `id_beritaa` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(20) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `gambar`, `judul`, `deskripsi`, `timestamp`) VALUES
(1, 'img_1505270256.jpg', 'Dicoba', 'apa saja lah', '2017-09-12 19:37:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_aspek`
--

CREATE TABLE `master_aspek` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bobot` double NOT NULL,
  `eksternal` tinyint(4) NOT NULL,
  `internal` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_aspek_interval`
--

CREATE TABLE `master_aspek_interval` (
  `id` int(10) NOT NULL,
  `awal` double NOT NULL,
  `akhir` double NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_aspek_nilai`
--

CREATE TABLE `master_aspek_nilai` (
  `id` int(10) NOT NULL,
  `id_aspek` int(10) NOT NULL,
  `skor` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_category`
--

CREATE TABLE `master_category` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `jenis_category` enum('download','berita','','') NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_category`
--

INSERT INTO `master_category` (`id`, `category`, `jenis_category`, `active`) VALUES
(2, 'Perturan Kepala LAN', 'download', 0),
(3, 'Petunjuk Teknis', 'download', 0),
(4, 'Presentasi', 'download', 0),
(5, 'Module', 'download', 0),
(6, 'Notulen', 'download', 0),
(7, 'Policy Note', 'download', 0),
(8, 'Jurnal', 'download', 0),
(9, 'Rencana Strategis', 'download', 1),
(10, 'Event', 'berita', 0),
(11, 'Seleksi', 'berita', 0),
(12, 'Umum', 'berita', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_instansi`
--

CREATE TABLE `master_instansi` (
  `id` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kajian`
--

CREATE TABLE `master_kajian` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kajian`
--

INSERT INTO `master_kajian` (`id`, `nama`, `jumlah`) VALUES
(1, 'kajian', 1),
(2, 'jurnal', 1),
(3, 'policybrief', 1),
(4, 'policynote', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_keperluan`
--

CREATE TABLE `master_keperluan` (
  `id` int(10) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_menu`
--

CREATE TABLE `master_menu` (
  `id` int(10) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `url` varchar(255) NOT NULL,
  `levelmenu` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `posisi` int(10) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_menu`
--

INSERT INTO `master_menu` (`id`, `nama_menu`, `icon`, `url`, `levelmenu`, `id_admin`, `posisi`, `active`) VALUES
(3, 'Master', 'glyphicon glyphicon-briefcase', '#', 0, 1, 4, 1),
(4, 'Master Menu', 'fas fa-bars', 'M_menu', 3, 1, 0, 1),
(5, 'Master Menu Depan', 'glyphicon glyphicon-option-ver', 'MMenudepan', 3, 1, 0, 1),
(6, 'Dashboard', 'icon-home', 'Dashboard', 0, 1, 0, 1),
(7, 'Master Patner', 'fa', 'MPatner', 3, 1, 2, 1),
(9, 'Master Sosial Media', 'fa', 'MSosmed', 3, 1, 3, 0),
(10, 'Berita ', 'glyphicon glyphicon-bullhorn', '#', 0, 1, 1, 1),
(11, 'Manajemen Berita', 'glyphicon glyphicon-book', 'Berita', 10, 1, 0, 1),
(12, 'Kategori', 'glyphicon glyphicon-th', 'Kategori', 0, 1, 2, 1),
(14, 'Manajemen Tampilan', 'glyphicon glyphicon-list-alt', '#', 0, 1, 5, 1),
(15, 'Pengguna', 'fa fa-users', 'User', 0, 1, 6, 1),
(16, 'Pengaduan', 'fa', 'Pengaduan', 0, 1, 0, 0),
(17, 'Komentar ', 'fa', 'Komentar', 10, 1, 2, 0),
(18, 'Slider', 'fa', 'Media/slider', 14, 1, 0, 1),
(19, 'Galery', 'fa ', 'Media/galeri', 14, 1, 0, 1),
(20, 'Download', 'glyphicon glyphicon-download', '#', 0, 1, 3, 1),
(21, 'Manajemen Download', 'fa', 'download', 20, 1, 0, 1),
(23, 'survei', 'fa', 'Download_form', 20, 1, 2, 1),
(25, 'Penyusunan Kajian', 'icon-book2', 'siska/SusunKajian', 0, 4, 1, 1),
(26, 'Dashboard Deputi', 'icon-home4', 'Dashboard', 0, 4, 0, 1),
(27, 'Hasil Kajian', 'icon-book', 'siska/HasilKajian', 0, 4, 2, 1),
(28, 'Pengukuran Kemanfaatan', 'icon-reading', 'siska/Pengukuran', 0, 4, 3, 1),
(29, 'Kajian Unit', 'icon', 'siska/SusunKajian', 0, 5, 1, 1),
(30, 'Kajian Semua Unit', 'icon', 'siska/SusunKajian', 0, 5, 2, 0),
(31, 'Hasil Kajian', 'icon', 'siska/HasilKajian', 0, 5, 3, 1),
(32, 'Pengukuran Kemanfaatan', 'icon', 'siska/Pengukuran', 0, 5, 4, 1),
(33, 'Dasboard Unit', 'icon-home4', 'Dashboard', 0, 5, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_menu_depan`
--

CREATE TABLE `master_menu_depan` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `menu_induk` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_patner`
--

CREATE TABLE `master_patner` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `active` tinyint(4) NOT NULL,
  `website` varchar(30) NOT NULL,
  `subjudul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_patner`
--

INSERT INTO `master_patner` (`id`, `judul`, `gambar`, `deskripsi`, `active`, `website`, `subjudul`) VALUES
(3, 'Asosisasi Analis Kebijakan Indonesia', 'img_1534092140.jpg', '<div style=\"text-align: justify;\"><font face=\"Open Sans, Helvetica, Arial\">AAKI lahir dan hadir sebagai “kebutuhan” bagi para analis kebijakan di Indonesia, yang merupakan negara demokrasi yang semakin maju menuju kejayaan bangsa dan negara di tengah pergaulan internasional. Sangat disadari bahwa “kualitas kebijakan” menjadi sangat strategis dan peran para analis kebijakan sangat diharapkan untuk menghasilkan dan mengawal implementasi kebijakan yang berkualitas.</font><br></div>', 1, 'http://aaki.or.id/aaki/', 'AAKI'),
(4, 'Knowlegde Sector Initiative', 'img_1534092160.png', 'KSI adalah kemitraan antara pemerintah Indonesia dan Australia yang didanai oleh Departemen Luar Negeri dan Perdagangan Australia (DFAT) dan dilaksanakan bekerjasama dengan Kementerian Perencanaan Pembangunan Nasional/ Badan Perencanaan Pembangunan Nasional (Bappenas) Republik Indonesia.<div><br></div><div>KSI dikelola oleh RTI International, bekerja sama dengan Nossal Institute dari University of Melbourne, Overseas Development Institute dan Australian National University.</div>', 1, 'http://www.ksi-indonesia.org', 'KSI'),
(5, 'Australia Indonesia Partnership for Economic Governance', 'img_1534092326.png', '', 1, '', 'AIPEG'),
(6, 'SMERU Research Institude', 'img_1534092349.jpg', '', 1, '', 'SMERU'),
(7, 'Department of Foreign Affairs and Trade', 'img_1534092376.png', '', 1, '', 'DFAT'),
(8, 'Pusat Kajian Desentralisasi dan Otonomi Daerah', 'img_1534092482.jpg', '', 1, '', 'PKDOD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pekerjaan`
--

CREATE TABLE `master_pekerjaan` (
  `id` int(10) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_sosmed`
--

CREATE TABLE `master_sosmed` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tahap`
--

CREATE TABLE `master_tahap` (
  `id` int(10) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `urutan` int(10) NOT NULL,
  `Nama_tahap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tahap`
--

INSERT INTO `master_tahap` (`id`, `id_jenis`, `urutan`, `Nama_tahap`) VALUES
(1, 1, 1, 'Usulan Judul'),
(2, 1, 2, 'Persiapan'),
(3, 1, 3, 'Analisis Data dan Informasi'),
(4, 1, 4, 'Pengolahan Data'),
(5, 1, 5, 'Analisis data dan penyusunan Laporan'),
(6, 1, 6, 'Publikasi'),
(7, 2, 1, 'Usulan Judul'),
(8, 2, 2, 'Publikasi'),
(9, 3, 1, 'Usulan Judul'),
(10, 3, 1, 'Publikasi'),
(11, 4, 1, 'Usulan Judul'),
(12, 4, 2, 'Publikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tahap_status`
--

CREATE TABLE `master_tahap_status` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_unit`
--

CREATE TABLE `master_unit` (
  `id` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `id_induk` int(10) NOT NULL,
  `eselon` enum('Eselon I','Eselon II','Eselon III','Eselon IV') NOT NULL,
  `singkatan` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  `jml_pegawai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_unit`
--

INSERT INTO `master_unit` (`id`, `Nama`, `id_induk`, `eselon`, `singkatan`, `id_user`, `jml_pegawai`) VALUES
(1, 'Deputi Kajian Kebijakan', 123, 'Eselon I', 'DKK', 0, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user`
--

CREATE TABLE `master_user` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`id`, `nama`, `active`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 1),
(3, 'anggota', 1),
(4, 'deputi', 1),
(5, 'unit', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `id_unit` int(10) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `Nama`, `NIP`, `id_unit`, `golongan`, `jabatan`, `email`, `username`, `password`, `tanggal`, `status`) VALUES
(1, 'reza', '', 0, '', '', '', '', '', '2018-08-19 06:53:15', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `tag_line` varchar(200) DEFAULT NULL,
  `tampil` tinyint(5) DEFAULT '1',
  `url` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `judul`, `tag_line`, `tampil`, `url`, `deskripsi`, `status`, `timestamp`) VALUES
(1, 'img_1535180632.jpg', 'Sekilas Tentang Praksis', '', 1, 'dkk.lan.go.id', '', 1, '2017-09-12 19:59:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `gambar`, `judul`, `deskripsi`, `timestamp`) VALUES
(1, 'img_1505270832.jpg', 'Dicoba', 'apa aja lah', '2017-09-12 19:47:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `singkatan` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_induk` int(10) NOT NULL,
  `id_eselon` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `nama`, `singkatan`, `username`, `email`, `id_induk`, `id_eselon`, `jumlah`, `status`) VALUES
(1, 'as', 'as', 'as', 'as@gnj', 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_user` int(10) NOT NULL,
  `unit_kerja` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `download_form`
--
ALTER TABLE `download_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kajian_lampiran`
--
ALTER TABLE `kajian_lampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kajian_tahap`
--
ALTER TABLE `kajian_tahap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kajian_ulasan`
--
ALTER TABLE `kajian_ulasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_aspek`
--
ALTER TABLE `master_aspek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_aspek_interval`
--
ALTER TABLE `master_aspek_interval`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_aspek_nilai`
--
ALTER TABLE `master_aspek_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_instansi`
--
ALTER TABLE `master_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kajian`
--
ALTER TABLE `master_kajian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_keperluan`
--
ALTER TABLE `master_keperluan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_menu_depan`
--
ALTER TABLE `master_menu_depan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_patner`
--
ALTER TABLE `master_patner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_pekerjaan`
--
ALTER TABLE `master_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_sosmed`
--
ALTER TABLE `master_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tahap`
--
ALTER TABLE `master_tahap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tahap_status`
--
ALTER TABLE `master_tahap_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_unit`
--
ALTER TABLE `master_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `download_form`
--
ALTER TABLE `download_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kajian_lampiran`
--
ALTER TABLE `kajian_lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kajian_tahap`
--
ALTER TABLE `kajian_tahap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kajian_ulasan`
--
ALTER TABLE `kajian_ulasan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_aspek`
--
ALTER TABLE `master_aspek`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_aspek_interval`
--
ALTER TABLE `master_aspek_interval`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_aspek_nilai`
--
ALTER TABLE `master_aspek_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_instansi`
--
ALTER TABLE `master_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_kajian`
--
ALTER TABLE `master_kajian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_keperluan`
--
ALTER TABLE `master_keperluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_menu`
--
ALTER TABLE `master_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `master_pekerjaan`
--
ALTER TABLE `master_pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_tahap`
--
ALTER TABLE `master_tahap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `master_tahap_status`
--
ALTER TABLE `master_tahap_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_unit`
--
ALTER TABLE `master_unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
