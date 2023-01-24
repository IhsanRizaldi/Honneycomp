-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2023 at 04:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `kode_history` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_solusi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int NOT NULL,
  `solusi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fakta` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`kode_kesimpulan`, `solusi`, `fakta`, `oleh`, `status`) VALUES
(150, 's-1a', 'Apakah laptop/computer anda sering bluescreen dengan tulisan Inaccessible Boot Device (stop code 0x0000007B)\r\n', 'pakar', 'setuju'),
(151, 's-1a', 'apakah sebelumnya laptop anda susah masuk boot windows?\r\n', 'pakar', 'setuju'),
(152, 's-1b', 'Apakah laptop/computer anda sering bluescreen dengan tulisan Inaccessible Boot Device (stop code 0x0000007B)\r\n', 'pakar', 'setuju'),
(153, 's-2a', 'Apakah laptop/komputer anda mengalami layar blank?\r\n', 'pakar', 'setuju'),
(154, 's-2a', 'Apakah disaat layar blank, mesin menyala normal, namun kipas berputar dengan kencang disertai dengan bunyi beep pendek secara terus menerus berbunyi?\r\n', 'pakar', 'setuju'),
(155, 's-2b', 'Apakah laptop/komputer anda mengalami layar blank?\r\n', 'pakar', 'setuju'),
(156, 's-3a', 'Apakah laptop/Komputer anda mengalami panas/overheat berlebihan?\r\n', 'pakar', 'setuju'),
(157, 's-3a', 'Apakah laptop anda pernah mati (shutdown) secara tiba-tiba saat suhu lapatop panas berlebih atau overheat?\r\n', 'pakar', 'setuju'),
(158, 's-3b', 'Apakah laptop/Komputer anda mengalami panas/overheat berlebihan?\r\n', 'pakar', 'setuju'),
(159, 's-4a', 'Apakah laptop/Komputer anda mengalami laggy/patah-patah saat membuka jendela baru/atau saat membuka foto?\r\n', 'pakar', 'setuju'),
(160, 's-4a', 'apakah laptop/komputer anda juga mengalami laggy/patah-patah saat menonton film/video?\r\n', 'pakar', 'setuju'),
(161, 's-4b', 'Apakah laptop/Komputer anda mengalami laggy/patah-patah saat membuka jendela baru/atau saat membuka foto?\r\n', 'pakar', 'setuju'),
(162, 's-5a', 'Apakah laptop/Komputer anda mengalami lambat?\r\n', 'pakar', 'setuju'),
(163, 's-5a', 'apakah laptop/komputer anda sering mengalami loading yang lebih lama dari biasanya  saat membuka file seperti foto, video, atau membuka aplikasi?\r\n', 'pakar', 'setuju'),
(164, 's-5b', 'Apakah laptop/Komputer anda mengalami lambat?\r\n', 'pakar', 'setuju'),
(165, 's-6a', 'Apakah laptop/komputer anda mengalami hilang suara?\r\n', 'pakar', 'setuju'),
(166, 's-6a', 'apakah jika dicolokan headset/earphone pada lubang jack masih tidak bersuara?\r\n', 'pakar', 'setuju'),
(167, 's-6b', 'Apakah laptop/komputer anda mengalami hilang suara?\r\n', 'pakar', 'setuju'),
(168, 's-7a', 'Apakah ada kendala saat pengoperasian atau penggunaan aplikasi/software Microsoft Office Word seperti tidak bisa input ketikan, tidak bisa menggunakan tools yang tersedia, tidak bisa menyimpan file yang telah dibuat?\r\n', 'pakar', 'setuju'),
(169, 's-7a', 'apakah pada aplikasi/software Microsoft Office lainnya(excel, powerpoint, access etc) juga terkendala hal yang sama?\r\n', 'pakar', 'setuju'),
(170, 's-7a', 'Apakah pada aplikasi/software Microsoft Office (word, excel, powerpoint etc) pada bagian tengah atas bar terdapat tulisan Product Activation failed? \r\n', 'pakar', 'setuju'),
(171, 's-7b', 'Apakah ada kendala saat pengoperasian atau penggunaan aplikasi/software Microsoft Office Word seperti tidak bisa input ketikan, tidak bisa menggunakan tools yang tersedia, tidak bisa menyimpan file yang telah dibuat?\r\n', 'pakar', 'setuju'),
(172, 's-7b', 'apakah pada aplikasi/software Microsoft Office lainnya(excel, powerpoint, access etc) juga terkendala hal yang sama?\r\n', 'pakar', 'setuju'),
(173, 's-7c', 'Apakah ada kendala saat pengoperasian atau penggunaan aplikasi/software Microsoft Office Word seperti tidak bisa input ketikan, tidak bisa menggunakan tools yang tersedia, tidak bisa menyimpan file yang telah dibuat?\r\n', 'pakar', 'setuju'),
(174, 's-8a', 'Apakah device tidak dapat menyala atau mati total?\r\n', 'pakar', 'setuju'),
(175, 's-8a', 'apakah tergangan pada powersupply normal?\r\n', 'pakar', 'setuju'),
(176, 's-8a', 'apakah status tegangan pada avometer normal (stabil)?\r\n', 'pakar', 'setuju'),
(177, 's-8b', 'Apakah device tidak dapat menyala atau mati total?\r\n', 'pakar', 'setuju'),
(178, 's-8b', 'apakah tergangan pada powersupply normal?\r\n', 'pakar', 'setuju'),
(179, 's-8c', 'Apakah device tidak dapat menyala atau mati total?\r\n', 'pakar', 'setuju'),
(180, 's-9a', 'Apakah device tidak dapat terhubung/connect ke jaringan wifi?\r\n', 'pakar', 'setuju'),
(181, 's-9a', 'Apakah pada jendela jaringan/network and connections tidak muncul daftar wifi yang tersedia?\r\n', 'pakar', 'setuju'),
(182, 's-9b', 'Apakah device tidak dapat terhubung/connect ke jaringan wifi?\r\n', 'pakar', 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `isi_pertanyaan`) VALUES
('p-1', 'Apakah laptop/computer anda sering bluescreen dengan tulisan Inaccessible Boot Device (stop code 0x0000007B)\r\n'),
('p-1a', 'apakah sebelumnya laptop anda susah masuk boot windows?\r\n'),
('p-2', 'Apakah laptop/komputer anda mengalami layar blank?\r\n'),
('p-2a', 'Apakah disaat layar blank, mesin menyala normal, namun kipas berputar dengan kencang disertai dengan bunyi beep pendek secara terus menerus berbunyi?\r\n'),
('p-3', 'Apakah laptop/Komputer anda mengalami panas/overheat berlebihan?\r\n'),
('p-3a', 'Apakah laptop anda pernah mati (shutdown) secara tiba-tiba saat suhu lapatop panas berlebih atau overheat?\r\n'),
('p-4', 'Apakah laptop/Komputer anda mengalami laggy/patah-patah saat membuka jendela baru/atau saat membuka foto?\r\n'),
('p-4a', 'apakah laptop/komputer anda juga mengalami laggy/patah-patah saat menonton film/video?\r\n'),
('p-5', 'Apakah laptop/Komputer anda mengalami lambat?\r\n'),
('p-5a', 'apakah laptop/komputer anda sering mengalami loading yang lebih lama dari biasanya  saat membuka file seperti foto, video, atau membuka aplikasi?\r\n'),
('p-6', 'Apakah laptop/komputer anda mengalami hilang suara?\r\n'),
('p-6a', 'apakah jika dicolokan headset/earphone pada lubang jack masih tidak bersuara?\r\n'),
('p-7', 'Penggunaan aplikasi/software Microsoft Office Word seperti tidak bisa input ketikan, tidak bisa menggunakan tools yang tersedia, tidak bisa menyimpan file yang telah dibuat?\r\n'),
('p-7a', 'apakah pada aplikasi/software Microsoft Office lainnya(excel, powerpoint, access etc) juga terkendala hal yang sama?\r\n'),
('p-7b', 'Apakah pada aplikasi/software Microsoft Office (word, excel, powerpoint etc) pada bagian tengah atas bar terdapat tulisan Product Activation failed? \r\n'),
('p-8', 'Apakah device tidak dapat menyala atau mati total?\r\n'),
('p-8a', 'apakah tergangan pada powersupply normal?\r\n'),
('p-8b', ' apakah status tegangan pada avometer normal (stabil)?\r\n'),
('p-9', 'Apakah device tidak dapat terhubung/connect ke jaringan wifi?\r\n'),
('p-9a', 'Apakah pada jendela jaringan/network and connections tidak muncul daftar wifi yang tersedia?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `isi_solusi`) VALUES
('s-1a', 'Device mengalami penurunan  kesehatan hardisk/ssd, sehingga windows menjadi crash, lakukan pergantian komponen hardisk/ssd dan install ulang OS.\r\n'),
('s-1b', 'Laptop anda mengalami windows crash, dan Hardisk aman\r\n'),
('s-2a', 'kemungkinan eror pada komponen RAM. Bersihkan komponen RAM, jika masih terkendala maka lakukan pergantian komponen RAM.\r\n'),
('s-2b', 'Laptop anda hanya mengalami penurunan performa, disarankan menggunakan penyimpanan SSD agar proses pengoperasian perangkat lebih cepat .\r\n'),
('s-3a', 'laptop anda mengalami panas overheat berlebihan, kemungkinan bisa terjadi karena thermal pasta yang sudah kering sehingga menyebabkan penghantaran panas yang tidak sesuai dan menyebabkan panas berlebih/overheat, disarankan menambahkan thermal pasta ulang pada komponen processor atau bawa ke tempat service untuk dilakukan maintenance oleh ahli agar laptop anda normal kembali.\r\n'),
('s-3b', 'Laptop anda hanya mengalami panas berlebihan saja, disarankan penggunaan diatas alas datar seperti meja, tidak disarankan penggunaan diatas kain seperti dikasur/tempat yang menyebabkan lubang fan tertutup, dan disarankan membersihkan fan/kipas secara berkala agar sirkulasi fan tidak tersumbat\r\n'),
('s-4a', 'driver pada device ada yang tidak terinstall/kompatibel, disarankan untuk  mengupdate driver bawaan agar bisa terinstall kembali, jika masih terkendala, kemungkinan ada crash di os nya sehingga harus diinstall ulang \r\n'),
('s-4b', 'laptop/komputer anda hanya mengalami load cpu 100% atau banyak program yang berjalan secara bersamaan di latar belakang, disarankan tutup beberapa aplikasi yang tidak terpakai dengan mengclose aplikasi atau dengan membuka task manager lalu meng-end task pada aplikasi/program yang tidak terpakai.\r\n'),
('s-5a', 'Kemungkinan device anda masih menggunakan penyimpanan hardisk sehinnga memakan waktu yang lebih saat membaca, membuka, membuat file, coba ganti ke penyimpanan SSD untuk performa yang lebih baik dan efesien sehingga proses membaca, membuka, membuat file akan lebih cepat dan efisien.\r\n'),
('s-5b', 'device hanya mengalami load cpu 100% atau banyak program yang berjalan secara bersamaan di latar belakang, disarankan tutup beberapa aplikasi yang tidak terpakai dengan mengclose aplikasi atau dengan membuka task manager lalu meng-end task pada aplikasi/program yang tidak terpakai.\r\n'),
('s-6a', 'kemungkinan terdapat kendala pada driver audio, coba untuk mengupdate driver audio pada device manager, jika masih terkendala, kemungkinan ic audio sudah buruk atau speaker yang sudah buruk, sehingga harus mengganti komponen ic audio atau perangkat speaker.\r\n'),
('s-6b', 'kemungkinan terdapat kerusakan pada ic speaker dan perangkat speaker. \r\n'),
('s-7a', 'Aplikasi/software Microsoft Office anda harus diaktivasi, bisa menggunakan KMSauto atau  dengan membeli lisensi original dari Microsoft lalu memasukan kode lisensinya.\r\n'),
('s-7b', 'kemungkinan ada yang terkunci/lock (reading only)  pada aplikasi/software Microsoft Office, coba cek pengaturan pada aplikasi/software Microsoft Office.\n'),
('s-7c', 'kemungkinan ada yang terkunci/lock (reading only)  pada aplikasi Microsoft Office Word, coba cek pengaturan pada software Microsoft Office Word'),
('s-8a', 'kemungkinan tegangan listrik yang naik turun, disarankan menggunakan stabilizer untuk menjaga kestabilan arus listrik pada komputer anda.\r\n'),
('s-8b', 'kemungkinan terdapat kerusakan atau tegangan pada powersupply komputer anda lemah, disarankan mengganti powersupply dan menggunakan stabilizer untuk menjaga kestabilan arus listrik pada komputer anda.\r\n'),
('s-8c', 'coba lakukan pengecekan pada powersupply menggunakan avometer\r\n'),
('s-9a', 'driver pada device ada yang tidak terinstal/kompatibel, disarankan untuk  mengupdate driver bawaan agar bisa terinstall kembali, jika masih terkendala kemungkinan kondisi komponen modul wifi laptop/komputer anda sudah buruk  sehingga harus mengganti komponen tersebut.\r\n'),
('s-9b', 'kemungkinan device anda terlalu jauh atau tidak masuk ke wilayah atau area cakupan/coverage wifi terdekat. coba pindah ke tempat yang masuk cakupan area wifi\r\n'),
('x-1', 'Solusi Tidak Ditemukan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`kode_history`),
  ADD KEY `kode_solusi` (`kode_solusi`);

--
-- Indexes for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`kode_kesimpulan`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `kode_history` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `kode_kesimpulan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD CONSTRAINT `tb_history_ibfk_1` FOREIGN KEY (`kode_solusi`) REFERENCES `tb_solusi` (`kode_solusi`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
