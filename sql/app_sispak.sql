-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 06:33 PM
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
-- Database: `app_sispak`
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
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `kode_kerusakan` varchar(11) NOT NULL,
  `nama_komponen` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`kode_kerusakan`, `nama_komponen`) VALUES
('K1', 'Hard Disk'),
('K2', 'Monitor'),
('K3', 'CPU'),
('K4', 'VGA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(11) NOT NULL,
  `kode_kerusakan` varchar(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `kode_solusi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `kode_kerusakan`, `pertanyaan`, `kode_solusi`) VALUES
('P1', 'K1', 'Banyak File Yang Rusak Dan Tidak Bisa Dibaca', 'S1'),
('P10', 'K3', 'Pada saat komputer dihidupkan, terdapat bunyi yang tidak biasa dan terus-menerus', 'S10'),
('P11', 'K3', 'CD/DVD Drive Tidak Terbaca', 'S11'),
('P12', 'K4', 'Muncul kotak peringatan: \"cli.exe Applica-tion Error. The application failed to initialize properly (0xc0000135). Click OK to terminate the application.\"', 'S12'),
('P13', 'K4', 'Sering terjadi muncul pesan kesalahan saat melakukan update driver vga', 'S13'),
('P2', 'K1', 'Laptop Yang Sering Hang Dan Crash', 'S2'),
('P3', 'K1', 'Hard Disk Tidak Terdeteksi Bios', 'S3'),
('P4', 'K1', 'Komputer/Laptop Mengalami Overheat Berlebihan', 'S4'),
('P5', 'K1', 'Sistem tidak mengenali harddisk baru Solusi', 'S5'),
('P6', 'K2', 'Tampilan Monitor Tiba-tiba Rusak', 'S6'),
('P7', 'K2', 'Tampilan Monitor Terbalik', 'S7'),
('P8', 'K2', 'Monitor Seperti Berkedip Saat Digunakan', 'S8'),
('P9', 'K3', 'Prosesor Baru tidak Terdeteksi', 'S9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(11) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`kode_solusi`, `solusi`) VALUES
('S1', 'Pastikan shut down laptop atau PC anda dengan benar. Jika listrik di rumah anda sering mati, tambahkan unit UPS yang baik. Kemudian hindari menginstall aplikasi tidak jelas yang mungkin adalah aplikasi berbahaya'),
('S10', 'Komputer yang tidak mendeteksi RAM yang terpasang\r\na. Buka penutup CPCI. \r\nb. Lepaskan RAM dari soketnya. \r\nc. Bersihkan bagian bawah RAM (bagian berwama kuning/emas) denqan menqqunakan kain/tisu. \r\nd. Kemudian gosok bagian bawah RAM tersebut dengan karet penghapus untuk membersihkan kotoran yang menempel pada RAM yang tidak bisa dibersihkan dengan kain. \r\ne. Setelah RAM bersih, bersihkan juga soket RAM yang ada dengan kain dan kuas. \r\nf. Pasang kembali RAM pada soketnya. Pastikan terpasang dengan benar dan kuat. \r\ng. Hidupkan komputer dan lihat perubahannya. h. Jika kesalahan masih terjadi, ganti soket RAM semula ke soket yang lain.\r\n'),
('S11', 'a. Klik kanan pada My Computer, dan pilih Properties. \r\nb. Pilih Device Manager setelah mengklik tab Hardware \r\nc. Dari daftar yang muncul klik pada tanda + di samping DVD / CD – ROM drive \r\nd. Jika drive CD muncul setelah mengklik tanda + , dan sebuah tanda merah disebelahnya, ini menunjukkan bahwa sistem operasi telah membaca drive, tapi drive CD tidak diaktifkan. Cukup klik kanan pada nama drive dan pilih Enable, dan seharusnya sudah beres.\r\n'),
('S12', 'Beberapa pengguna VGA card dengan chipset VPU ATi Radeon pernah merasakannya. Apalagi jika pernah meng-update driver dan aplikasi pendukungnya dengan menggunakan ATi Catalyst.'),
('S13', 'Melakukan uninstall dari driver lama yang sebelumnya telah ter-install. Namun, ada baiknya Anda melakukan pembersihan system'),
('S2', 'Rata-rata hard disk bermasa pakai 3 sampai 4 tahun. Bisa lebih. Tapi ketika digunakan dengan normal, itulah usia hard disk yang umum. Daripada anda beresiko kehilangan data, sebaiknya anda bersiap lebih dulu'),
('S3', 'Untuk mengatasinya, pertama pastikan hard disk mendapat pasokan daya yang cukup, kabel yang baik, dan konektor yang bersih dan berfungsi. Cobalah mengganti kabel IDE, ATA, atau SCSI sesuai dengan yang digunakan hard disk. Kemudian anda juga bisa mengganti colokan daya listrik dari PSU ke hard disk. Untuk memastikan bukan hard disknya yang bermasalah, pasanglah hard disk di komputer lain.'),
('S4', 'Pastikan kipas pendingin berfungsi. Lubang exhaust tidak tertutup debu. Bersihkan saja secara rutin sekitar sebulan atau dua bulan sekali tergantung dengan tempat anda biasa mengoperasikan PC atau laptop anda. Intinya cuman jangan sampai lubang exhaust tertutup dan kipas berfungsi baik.'),
('S5', 'Anda harus memasang dan mengonfigurasikan harddisk dengan benar. Harddisk bukan termasuk komponen yang sulit dalam proses pemasangan. Namun, ada beberapa langkah yang harus dilakukan secara bertahap saat memasang harddisk'),
('S6', '1. Cek pada monitor, kabel monitor, dan port monitor yang ada di motherboard, apakah ada kerusakan atau tidak. \r\n2. Buka casing CPU Anda, bersihkan VGA card dari debu-debu yang mungkin bisa mengganggu. \r\n3. Jika kedua langkah di atas tidak berhasil, mungkin VGA card atau motherboard Anda bermasalah.\r\n'),
('S7', '1.Pergi ke Control Panel > Appearance > Display > Screen Resolution. \r\n2.Maka akan muncul kotak dialog Screen Resolution. \r\n3.Pada Orientation, ganti dengan Landscape.\r\n'),
('S8', '1. Pastikan kabel power monitor terpasang den sempurna. \r\n2. Layar berkedip terkadang juga dikarenakan adan guncangan pada sambungan atau pada kabel ya menyambungkan monitor ke CPU. Pastikan tidak a guncangan tersebut yang bisa mengganggu. \r\n3. Cek pada monitor, kabel monitor, dan port monitor yan ada di motherboard, apakah ada kerusakan atau tidak. 99 \r\n4. Atur Refresh Rate pada Display Properties. Biasanya, makin besar Refresh Rate monitor, makin kecil kemungkinan terjadi monitor berkedip. Tetapi, Anda harus menyesuaikan Refresh Rate dengan monitor yang Anda gunakan. \r\n5. Jika cara di atas memang belum berhasil, buka casing CPU Anda, bersihkan VGA card dari debu-debu yang mungkin bisa mengganggu.\r\n'),
('S9', '1. Periksa kembali CPU apakah sudah terinstal dengan lengkap atau benar. Jika tidak, instalasi ulang komponen-komponen CPU tersebut. \r\n2. Jika CPU terpasang dengan baik tetapi tidak terdeteksi dengan baik, coba periksa pengaturan pada motherboard. Apakah jumper sudah terpasang dengan benar\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`),
  ADD KEY `kode_kerusakan` (`kode_kerusakan`),
  ADD KEY `kode_solusi` (`kode_solusi`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`kode_solusi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD CONSTRAINT `tb_pertanyaan_ibfk_1` FOREIGN KEY (`kode_kerusakan`) REFERENCES `tb_kerusakan` (`kode_kerusakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pertanyaan_ibfk_2` FOREIGN KEY (`kode_solusi`) REFERENCES `tb_solusi` (`kode_solusi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
