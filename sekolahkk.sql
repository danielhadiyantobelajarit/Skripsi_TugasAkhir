-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` char(4) NOT NULL,
  `adminNAMA` varchar(30) NOT NULL,
  `adminEMAIL` varchar(60) NOT NULL,
  `adminPASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `adminNAMA`, `adminEMAIL`, `adminPASSWORD`) VALUES
('A001', 'Jone', 'jone@yahoo.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `datafasilitas`
--

CREATE TABLE `datafasilitas` (
  `idfasilitas` char(5) NOT NULL,
  `namafasilitas` char(40) NOT NULL,
  `jumlahfasilitas` char(2) NOT NULL,
  `fotofasilitas` text NOT NULL,
  `statusfasilitas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datafasilitas`
--

INSERT INTO `datafasilitas` (`idfasilitas`, `namafasilitas`, `jumlahfasilitas`, `fotofasilitas`, `statusfasilitas`) VALUES
('FS001', 'Ruang Kepala Sekolah', '1', 'Ruang-Kepsek.jpg', 'Baik'),
('FS002', 'Ruang Guru SMA', '1', 'Ruang-Guru-SMP-Dalam-3.jpg', 'Baik'),
('FS003', 'Ruang Kelas', '18', 'Ruang-Kelas-2.jpg', 'Baik'),
('FS004', 'Ruang Tata Usaha', '1', 'Ruang-Dalam-TU.jpg', 'Baik'),
('FS005', 'Ruang Wakasek SMA dan Konseling', '1', 'Ruang-Wakasek-SMA-Dalam.jpg', 'Baik'),
('FS006', 'Perpustakaan', '1', 'Perpustakaan1.jpg', 'Baik'),
('FS007', 'Ruang Laboratorium Komputer', '1', 'Lab-Komputer-TIK-4.jpg', 'Baik'),
('FS008', 'Ruang Laboratorium Bahasa', '1', 'Lab-Bahasa-2.jpg', 'Baik'),
('FS009', 'Ruang Laboratorium Biologi', '1', 'Lab-Biologi-3.jpg', 'Baik'),
('FS010', 'Ruang Laboratorium Fisika', '1', 'Lab-Fisika-3.jpg', 'Baik'),
('FS011', 'Gudang', '1', 'Gudang.jpg', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE `dataguru` (
  `idguru` char(6) NOT NULL,
  `namaguru` char(35) NOT NULL,
  `tugasguru` char(35) NOT NULL,
  `fotoguru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`idguru`, `namaguru`, `tugasguru`, `fotoguru`) VALUES
('GKM001', 'Dr. Damaris Derry S.', 'Kepala Sekolah', 'DamarisDerry.JPG'),
('GKM003', 'Veronika Prasetyaningsih, S.Si', 'Wakil Kesiswaan', 'VeronikaPrasetyaningsih.JPG'),
('GKM006', 'Agustina Butar Butar, M.Pd', 'Wali Kelas X-IPS1', 'Agustina.JPG'),
('GKM008', 'Rukiah, S.Pd', 'Wali Kelas X-IPS3', 'Rukiah.JPG'),
('GKM009', 'Tri Rahayoe, S.Pd', 'Wali Kelas XI-MIPA1', 'TriRahayoe.JPG'),
('GKM010', 'Devianna, M.T', 'Wali Kelas XI-MIPA2', 'Devianna.JPG'),
('GKM011', 'Donald Manik, M.PdK', 'Wali Kelas XI-IPS1', 'DonaldManik.JPG'),
('GKM012', 'Drs. FX. Suyono', 'Wali Kelas XI-IPS2', 'Suyono.JPG'),
('GKM013', 'Apriyanto Chandra, S.H', 'Wali Kelas XI-IPS3', 'ApriyantoChandra.JPG'),
('GKM015', 'Petriana Maria R. Paleng, S.Pd', 'Wali Kelas XII-MIPA2', 'PetrianaMaria.JPG'),
('GKM016', 'Yushellia Tania, S.Pd', 'Wali Kelas XII-IPS1', 'YushelliaTania.JPG'),
('GKM017', 'Polin Sihite, S.Pd', 'Wali Kelas XII-IPS2', 'PolinSihite.JPG'),
('GKM018', 'Ferdinandus Jalu, S.Fil', 'Wali Kelas XII-IPS3', 'FerdinandusJalu.JPG'),
('GKM019', 'Drs. Jaipin Simarmata', 'Guru Pengajar Matematika', 'JaipinSimarmata.JPG'),
('GKM020', 'Dra. Ellys L. Manurung', 'Guru Biologi', 'EllysManurung.JPG'),
('GKM021', 'Lukana Hadi, S. Sn', 'Guru Prakarya dan Kewirausahaan', 'LukanaHadi.JPG'),
('GKM022', 'Maria Magdalena Purba, S. Sn', 'Guru Pengajar SBK', 'MariaMagdalena.JPG'),
('GKM025', 'Zarah Junius S.Pd', 'Guru Bimbingan Konseling', 'ZarahJunius.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `datamapel`
--

CREATE TABLE `datamapel` (
  `idmapel` char(5) NOT NULL,
  `namamapel` char(30) NOT NULL,
  `keteranganmapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamapel`
--

INSERT INTO `datamapel` (`idmapel`, `namamapel`, `keteranganmapel`) VALUES
('MP001', 'Pendidikan Agama Kristen', 'Salah satu mata pelajaran yang mengandung unsur keagamaan. Mata pelajaran ini mengajarkan Firman Tuhan agar dapat tumbuh dewasa dengan Iman yang kuat dalam ke-Kristenan secara Jasmani dan Rohani sesuai kehendak Tuhan di kehidupan sehari - hari termasuk di Sekolah.'),
('MP002', 'Bahasa Indonesia', 'Mata pelajaran ini dapat diterapkan dalam aktivitas kehidupan sehari - hari. Dengan adanya mata pelajaran ini, siswa/i dapat belajar bagaimana berbicara dan menulis berbahasa Indonesia dengan baik dan benar.'),
('MP003', 'Matematika', 'Secara umum, mata pelajaran ini mengajarkan cara menulis angka, rumus, dan berhitung. Dalam SMA, materi ini sudah maju seperti menghitung fungsi, membuat grafik dan diagram, menghitung data statistika, dll.'),
('MP004', 'Bahasa Inggris', 'Salah satu pelajaran bahasa yang mengajarkan cara berbicara bahasa asing (dalam hal ini bahasa inggris). Disediakan beberapa cerita singkat berbahasa inggris dan cara penggunaan tenses, bertujuan agar siswa/i dapat mengerti cara berbicara bahasa inggris.'),
('MP005', 'Fisika', 'Salah satu Ilmu Pengetahuan Alam yang mempelajari tentang materi/benda beserta gerak dan perilakunya dalam lingkup ruang dan waktu, beserta dengan konsep yang berkaitan seperti energi dan gaya. Tujuan utama mata pelajaran ini adalah mempelajari dan memahami bagaimana alam semesta bekerja.'),
('MP006', 'Biologi', 'Salah satu ilmu sains atau bisa disebut ilmu hayat yang mempelajari kehidupan mahkluk hidup seperti manusia, hewan, dan organisme hidup, termasuk struktur, fungsi, pertumbuhan, evolusi, persebaran, dan taksonominya. Biologi juga mempelajari struktur organ tubuh mahkluk hidup lainnya.'),
('MP007', 'Kimia', 'Cabang dari ilmu fisik yang mempelajari struktur perubahan sebuah materi/benda. Ilmu Kimia juga memuat tentang pelajaran atom - atom dan sifat perubahannya, serta memuat rumus - rumus kimia (H2o, CO2, dsb), dan interaksi antar zat melalui reaksi kimia untuk membentuk zat - zat yang berbeda'),
('MP008', 'Ekonomi', 'Salah satu ilmu sosial yang mempelajari aktivitas manusia yang berhubungan dengan produksi, distribusi, pertukaran dan konsumsi barang dan jasa. Karena Ekonomi adalah setiap bentuk kerjasama untuk mencapai kemakmuran, maka ilmu ekonomi juga berarti ilmu yang mempelajari upaya - upaya memenuhi kebutuhan untuk mencapai kemakmuran.'),
('MP009', 'Akuntansi', 'Salah satu ilmu sosial yang mempelajari aktivitas manusia dalam berbisnis. Ilmu ini merupakan ilmu lanjutan dari Ekonomi karena dalam dunia perekonomian pastinya juga ada Buku Akuntansi yang mencatat histori bisnis dan menghitung harga pembelian dan penjualan barang dan jasa beserta pajak.'),
('MP010', 'Sosiologi', 'Berasal dari kata socio yang berarti kawan/masyarakat, logos yang berarti ilmu. Berarti Sosiologi adalah ilmu yang mempelajari sifat, perilaku, perkembangan, dan hubungan antara manusia dengan kelompok - kelompok lainnya dalam lingkungan masyarakat sekitar.'),
('MP011', 'Geografi', 'Berasal dari gabungan kata \"Geo\" yang berarti bumi, dan \"graphein\" yang berarti tulisan sehingga Geografi diartikan sebagai tulisan tentang bumi. Dalam arti yang lebih luas, Geografi adalah ilmu yang mempelajari tentang hubungan, perbedaan, dan persamaan antarruang di bumi.'),
('MP012', 'Mandarin', 'Salah satu ilmu bahasa yang mempelajari bagaimana cara menulis huruf dan berbicara dengan bahasa Mandarin. Bahasa Mandarin sering digunakan di kawasan wilayah utara seperti Tiongkok dan Beijing.'),
('MP013', 'Sejarah', 'Salah satu ilmu sosial yang meneliti dan menyelidiki secara sistematis keseluruhan perkembangan masyarakat serta kemanusiaan pada masa lampau beserta kejadian-kejadian. Ilmu sejarah ini juga mempelajari asal usul barang-barang prasejarah dan bangunan-bangunan lainnya seperti candi.'),
('MP014', 'Bimbingan Konseling', 'Proses interaksi antara konselor dengan konseli baik secara langsung maupun tidak langsung dalam rangka untuk membantu konseli agar dapat mengembangkan potensi dirinya ataupun memecahkan permasalahan yang dialaminya. Dari pengertian tersebut dapat disimpulkan bahwa Bimbingan Konseling bukanlah mata pelajaran melainkan bagian dari pendidikan yang mendukung keberhasilan siswa/i dalam akademik maupun non-akademik'),
('MP015', 'PJOK', 'Singkatan dari Pendidikan Jasmani, Olahraga, dan Kesehatan. Sebagai mata pelajaran, PJOK merupakan media untuk mendorong pertumbuhan fisik, perkembangan psikis, keterampilan motorik, pengetahuan dan penalaran, penghayatan nilai-nilai (sikap-mental-emosionalsportivitas-spiritual-sosial), serta pembiasaan pola hidup sehat yang berfungsi untuk merangsang pertumbuhan dan perkembangan kualitas fisik dan psikis yang seimbang, bertujuan untuk mengembangkan aspek kebugaran jasmani, keterampilan gerak, keterampilan berpikir kritis, keterampilan sosial, penalaran, stabilitas emosional, tindakan moral, aspek pola hidup sehat dan pengenalan lingkungan bersih melalui aktivitas jasmani, olahraga, dan kesehatan terpilih yang direncanakan secara sistematis dalam rangka mencapai tujuan pendidikan nasional.'),
('MP016', 'TIK', 'Singkatan dari Teknologi, Informasi dan Komunikasi. Sebagai mata pelajaran, TIK adalah ilmu komputer mempelajari tentang seluk beluk luar dan dalam sebuah komputer; Peralatan komputer (Hardware), dan program-program dan aplikasi komputer (Software), serta cara pengoperasiannya.');

-- --------------------------------------------------------

--
-- Table structure for table `filekelas10`
--

CREATE TABLE `filekelas10` (
  `idfile` char(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filekelas10`
--

INSERT INTO `filekelas10` (`idfile`, `filename`) VALUES
('TIK10F1', '1. Menggunakan Perangkat Lunak Aplikasi Pemrograman.pptx'),
('TIK10F2', '2. RoboMind.pptx'),
('TIK10F3', '3. Pemrograman C.pptx'),
('TIK10F4', '4. Analisis Data Dengan Excel.pptx'),
('TIK10F5', '5. Pemrograman Visual 01.pptx'),
('TIK10F6', '6. Pemrograman Visual 02.pptx'),
('TIK10F7', '7. Pemrograman Visual 03.pptx'),
('TIK10F8', '8. Computational Thinking.pptx'),
('TIK10PAS', 'Soal PAS Kelas 10.docx'),
('TIK10PTS', 'Soal PTS Kelas 10.docx'),
('TIKPAS10SSL', 'Soal PAS Kelas 10 Cadangan.docx'),
('TIKPTS10R', 'Soal PTS Kelas 10 (Remedial).docx');

-- --------------------------------------------------------

--
-- Table structure for table `filekelas11`
--

CREATE TABLE `filekelas11` (
  `idfile` char(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filekelas11`
--

INSERT INTO `filekelas11` (`idfile`, `filename`) VALUES
('TIK11F1', '1. Pengenalan Website.pptx'),
('TIK11F2', '2. Cara Memasukkan Video dan Membuat Link pada Website.pptx'),
('TIK11F3', '3. Pemrograman C.pptx'),
('TIK11F4', '4. EKSTENSI FILE DAN KATEGORINYA.pptx'),
('TIK11F5', '5. ALGORITMA DAN PEMROGRAMAN.pptx'),
('TIK11F6', '6. Computational Thinking.pptx'),
('TIK11PAS', 'Soal PAS Kelas 11.docx'),
('TIK11PTS', 'Soal PTS Kelas 11.docx'),
('TIKPAS11SSL', 'Soal PAS Kelas 11 Cadangan.docx');

-- --------------------------------------------------------

--
-- Table structure for table `filekelas12`
--

CREATE TABLE `filekelas12` (
  `idfile` char(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filekelas12`
--

INSERT INTO `filekelas12` (`idfile`, `filename`) VALUES
('TIK12F1', '1. Adobe Photoshop.pptx'),
('TIK12F2', '2. Adobe Photoshop Text Setting and Styling.pptx'),
('TIK12PAS', 'Soal PAS Kelas 12.docx'),
('TIK12PTS', 'Soal PTS Kelas 12.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `datafasilitas`
--
ALTER TABLE `datafasilitas`
  ADD PRIMARY KEY (`idfasilitas`);

--
-- Indexes for table `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `datamapel`
--
ALTER TABLE `datamapel`
  ADD PRIMARY KEY (`idmapel`);

--
-- Indexes for table `filekelas10`
--
ALTER TABLE `filekelas10`
  ADD PRIMARY KEY (`idfile`);

--
-- Indexes for table `filekelas11`
--
ALTER TABLE `filekelas11`
  ADD PRIMARY KEY (`idfile`);

--
-- Indexes for table `filekelas12`
--
ALTER TABLE `filekelas12`
  ADD PRIMARY KEY (`idfile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
