-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 03:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beacukai`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `jenis` varchar(255) NOT NULL COMMENT 'isinya select (impor, ekspor, fasilitas, cukai, aeo, fta,lartas)',
  `urut` int(11) NOT NULL DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uploader` int(11) unsigned NOT NULL,
  `tgl_upload` date NOT NULL,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'no-image.gif',
  `slug` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `uploader`, `tgl_upload`, `judul_id`, `judul_en`, `isi_id`, `isi_en`, `foto`, `slug`, `publish`) VALUES
(1, 2, '2014-12-18', 'eedf', 'dfsfsa', '<p>dsfdsaf</p>\r\n\r\n<p><img alt="" src="http://192.168.3.15/beacukai/upload/images/pemusnahan.jpg" style="height:355px; width:525px" /></p>\r\n', '<p>fdsfsf</p>\r\n', '2014-12-18-pemusnahan2.jpg', 'eedf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `uploader` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `judul_id`, `judul_en`, `isi_id`, `isi_en`, `file`, `uploader`, `tgl_upload`, `publish`) VALUES
(1, 'dsada edit 2', '', '<p>dsadsadf edit 2</p>\r\n', '', '2014-12-18-tes.zip', 2, '2014-12-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan_id` varchar(255) NOT NULL,
  `pertanyaan_en` varchar(255) NOT NULL,
  `jawaban_id` text NOT NULL,
  `jawaban_en` text NOT NULL,
  `urut` int(11) NOT NULL DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kantor_kanwil`
--

CREATE TABLE IF NOT EXISTS `kantor_kanwil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `kantor_kanwil`
--

INSERT INTO `kantor_kanwil` (`id`, `nama`) VALUES
(1, 'KANTOR WILAYAH ACEH'),
(2, 'KANWIL SUMUT'),
(3, 'KANWIL RIAU DAN SUMBAR'),
(4, 'KANWIL KEPULAUAN RIAU'),
(5, 'KANWIL SUMBAGSEL'),
(6, 'KANWIL BANTEN'),
(7, 'KANWIL JAKARTA'),
(8, 'KANWIL JAWA BARAT'),
(9, 'KANWIL JATENG DAN DIY'),
(10, 'KANWIL JATIM 1'),
(11, 'KANWIL JATIM II'),
(12, 'KANWIL BALI, NTB, NTT'),
(13, 'KANWIL KALBAGBAR'),
(14, 'KANWIL KALBAGTIM'),
(15, 'KANWIL SULAWESI'),
(16, 'KANWIL MALUKU, PAPUA, IRIAN JAYA BARAT'),
(17, 'KPU TANJUNG PRIOK'),
(18, 'KPU BATAM'),
(19, 'KANTOR PUSAT DIREKTORAT JENDERAL BEA DAN CUKAI');

-- --------------------------------------------------------

--
-- Table structure for table `kantor_kppbc`
--

CREATE TABLE IF NOT EXISTS `kantor_kppbc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `profil` text NOT NULL,
  `koordinat` varchar(255) NOT NULL,
  `nama_kanwil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `kantor_kppbc`
--

INSERT INTO `kantor_kppbc` (`id`, `nama`, `profil`, `koordinat`, `nama_kanwil`) VALUES
(1, 'KANTOR PUSAT DIREKTORAT JENDERAL BEA DAN CUKAI', '<p>KANTOR PUSAT DIREKTORAT JENDERAL BEA DAN CUKAI</p>\r\n', '', 'KANTOR PUSAT DIREKTORAT JENDERAL BEA DAN CUKAI'),
(2, 'KANTOR PENGAWASAN DAN PELAYANAN BC SABANG', '', '', 'KANTOR WILAYAH ACEH'),
(3, 'KANTOR PENGAWASAN DAN PELAYANAN BC KUALA LANGSA', '', '', 'KANTOR WILAYAH ACEH'),
(4, 'KANTOR PENGAWASAN DAN PELAYANAN BC MEULABOH', '', '', 'KANTOR WILAYAH ACEH'),
(5, 'KANTOR PENGAWASAN DAN PELAYANAN BC BANDA ACEH', '', '', 'KANTOR WILAYAH ACEH'),
(6, 'KANTOR PENGAWASAN DAN PELAYANAN BC LHOK SEUMAWE', '', '', 'KANTOR WILAYAH ACEH'),
(7, 'KANTOR PENGAWASAN DAN PELAYANAN BC PANGKALAN SUSU', '', '', 'KANWIL SUMUT'),
(8, 'BALAI PENGUJIAN DAN IDENTIFIKASI BARANG MEDAN', '', '', 'KANWIL SUMUT'),
(9, 'KANTOR PENGAWASAN DAN PELAYANAN BC KUALA TANJUNG', '', '', 'KANWIL SUMUT'),
(10, 'KANTOR PENGAWASAN DAN PELAYANAN BC MEDAN', '', '', 'KANWIL SUMUT'),
(11, 'KANTOR PENGAWASAN DAN PELAYANAN BC TELUK NIBUNG', '', '', 'KANWIL SUMUT'),
(12, 'KANTOR PENGAWASAN DAN PELAYANAN BC PEMATANG SIANTAR', '', '', 'KANWIL SUMUT'),
(13, 'KANTOR PENGAWASAN DAN PELAYANAN BC SIBOLGA', '', '', 'KANWIL SUMUT'),
(14, 'KANTOR PENGAWASAN DAN PELAYANAN BC BELAWAN', '', '', 'KANWIL SUMUT'),
(15, 'KANTOR WILAYAH DJBC SUMATERA UTARA', '', '', 'KANWIL SUMUT'),
(16, 'KANTOR PENGAWASAN DAN PELAYANAN BC SIAK SRI INDRAPURA', '', '', 'KANWIL RIAU DAN SUMBAR'),
(17, 'KANTOR PENGAWASAN DAN PELAYANAN BC SELAT PANJANG', '', '', 'KANWIL RIAU DAN SUMBAR'),
(18, 'KANTOR PENGAWASAN DAN PELAYANAN BC BAGAN SIAPI API', '', '', 'KANWIL RIAU DAN SUMBAR'),
(19, 'KANTOR PENGAWASAN DAN PELAYANAN BC TELUK BAYUR', '', '', 'KANWIL RIAU DAN SUMBAR'),
(20, 'KANTOR PENGAWASAN DAN PELAYANAN BC BENGKALIS', '', '', 'KANWIL RIAU DAN SUMBAR'),
(21, 'KANTOR PENGAWASAN DAN PELAYANAN BC PEKANBARU', '', '', 'KANWIL RIAU DAN SUMBAR'),
(22, 'KANTOR WILAYAH DJBC RIAU DAN SUMBAR', '', '', 'KANWIL RIAU DAN SUMBAR'),
(23, 'KANTOR PENGAWASAN DAN PELAYANAN BC TEMBILAHAN', '', '', 'KANWIL RIAU DAN SUMBAR'),
(24, 'KANTOR PENGAWASAN DAN PELAYANAN BC DUMAI', '', '', 'KANWIL RIAU DAN SUMBAR'),
(25, 'PANGKALAN SARANA OPERASI DJBC TANJUNG BALAI KARIMUN', '', '', 'KANWIL KEPULAUAN RIAU'),
(26, 'KANTOR PENGAWASAN DAN PELAYANAN BC TAREMPA', '', '', 'KANWIL KEPULAUAN RIAU'),
(27, 'KANTOR PENGAWASAN DAN PELAYANAN BC SAMBU BELAKANG PADANG', '', '', 'KANWIL KEPULAUAN RIAU'),
(28, 'KANTOR PENGAWASAN DAN PELAYANAN BC DABO SINGKEP', '', '', 'KANWIL KEPULAUAN RIAU'),
(29, 'KANTOR PENGAWASAN DAN PELAYANAN BC TANJUNG BALAI KARIMUN', '', '', 'KANWIL KEPULAUAN RIAU'),
(30, 'KANTOR PENGAWASAN DAN PELAYANAN BC TANJUNG PINANG', '', '', 'KANWIL KEPULAUAN RIAU'),
(31, 'KANTOR WILAYAH DJBC KEPULAUAN RIAU', '', '', 'KANWIL KEPULAUAN RIAU'),
(32, 'KANTOR PENGAWASAN DAN PELAYANAN BC BENGKULU', '', '', 'KANWIL SUMBAGSEL'),
(33, 'KANTOR PENGAWASAN DAN PELAYANAN BC PALEMBANG', '', '', 'KANWIL SUMBAGSEL'),
(34, 'KANTOR PENGAWASAN DAN PELAYANAN BC TANJUNG PANDAN', '', '', 'KANWIL SUMBAGSEL'),
(35, 'KANTOR PENGAWASAN DAN PELAYANAN BC JAMBI', '', '', 'KANWIL SUMBAGSEL'),
(36, 'KANTOR PENGAWASAN DAN PELAYANAN BC BANDAR LAMPUNG', '', '', 'KANWIL SUMBAGSEL'),
(37, 'KANTOR PENGAWASAN DAN PELAYANAN BC PANGKAL PINANG', '', '', 'KANWIL SUMBAGSEL'),
(38, 'KANTOR WILAYAH DJBC SUMATERA BAGIAN SELATAN', '', '', 'KANWIL SUMBAGSEL'),
(39, 'KANTOR PENGAWASAN DAN PELAYANAN BC MERAK', '', '', 'KANWIL BANTEN'),
(40, 'KANTOR PENGAWASAN DAN PELAYANAN BC SOEKARNO HATTA', '', '', 'KANWIL BANTEN'),
(41, 'KANTOR WILAYAH DJBC BANTEN', '', '', 'KANWIL BANTEN'),
(42, 'KANTOR PENGAWASAN DAN PELAYANAN BC TANGERANG', '', '', 'KANWIL BANTEN');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uploader` int(11) unsigned NOT NULL,
  `tgl_upload` date NOT NULL,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `judul_id` (`judul_id`,`judul_en`,`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `uploader`, `tgl_upload`, `judul_id`, `judul_en`, `isi_id`, `isi_en`, `slug`, `publish`) VALUES
(1, 1, '2014-12-12', 'kepemimpinan wanita indonesia', 'kepemimpinan wanita inggris', 'Marunda, 8 Desember 2014. Apel pagi rutin bulanan kali ini sangatlah spesial dikarenakan para petugas upacara adalah para pejabat dan pegawai wanita. Pentingnya peranan seorang ibu menjadikan semangat tersendiri bagi para ibu dan wanita di KPPBC TMP A Marunda untuk tampil menjadi petugas apel yang biasanya dilakukan oleh para pejabat/pegawai laki – laki.\r\n\r\n  \r\n\r\nDengan Pengambil Apel Kasi Perbendaharaan, Sri Soegiarti dan perwira Apel Kasubsi Pabean dan Cukai IX, Evi Setianingrum, para komandan peleton dipegang pejabat/pegawai sesuai tempat tugasnya. Komandan Peleton untuk eselon IV dan V masing – masing Kasi PLI, Patricia Seto dan Kasubsi Layanan Informasi, Diyah Jeki Cahyandari, sementara peleton pelaksana dibagi dua untuk pelaksana PLI, PDAD, dan KI dikomandani Erniwati Hutabarat, pelaksana pada Seksi PLI. Komandan peleton pelaksana Subbagian Umum dan Seksi P2 dipegang oleh Mia Fauziah, Pelaksana Pemeriksa di bawah Kaur Keuangan.\r\n\r\n         \r\n\r\nPengambil Apel menyampaikan 3 tema materi. Pertama revisi target penerimaan yang dirubah menjadi 78,1 M untuk pabean sedangkan untuk cukai ditargetkan sebesar 33,1 M. Untuk realisasi penerimaan sampai tanggal 7 Desember 2014, pabean sudah terlampaui yaitu 79.309.464.756,00 dan untuk cukai masih kurang sedikit di angka 32.152.151.000,00. Kedua adalah Hasil Survey Kepuasan Pengguna Layanan yang telah dilakukan oleh Kanwil DJBC Jakarta dengan Indeks Sangat Puas 4.79 dari skala 5 dan menempati urutan nomor 2 secara nasional untuk seluruh kantor bea dan cukai se-Indonesia. Ketiga berkaitan dengan HUT KPPBC TMP A Marunda Ke – 4, himbauan kepada seluruh pejabat dan pegawai agar ikut berperan serta aktif dan berpartisipasi mendukung perlombaan – perlombaan yang sedang berlangsung yaitu perlombaan Volley, Badminton, Tenis Meja, Catur, Gaple, Futsal, dan Dangdut Idol.\r\n\r\n(Seksi Penyuluhan dan Layanan Informasi)', 'Inggris, 8 Desember 2014. Apel pagi rutin bulanan kali ini sangatlah spesial dikarenakan para petugas upacara adalah para pejabat dan pegawai wanita. Pentingnya peranan seorang ibu menjadikan semangat tersendiri bagi para ibu dan wanita di KPPBC TMP A Marunda untuk tampil menjadi petugas apel yang biasanya dilakukan oleh para pejabat/pegawai laki – laki.\r\n\r\n  \r\n\r\nDengan Pengambil Apel Kasi Perbendaharaan, Sri Soegiarti dan perwira Apel Kasubsi Pabean dan Cukai IX, Evi Setianingrum, para komandan peleton dipegang pejabat/pegawai sesuai tempat tugasnya. Komandan Peleton untuk eselon IV dan V masing – masing Kasi PLI, Patricia Seto dan Kasubsi Layanan Informasi, Diyah Jeki Cahyandari, sementara peleton pelaksana dibagi dua untuk pelaksana PLI, PDAD, dan KI dikomandani Erniwati Hutabarat, pelaksana pada Seksi PLI. Komandan peleton pelaksana Subbagian Umum dan Seksi P2 dipegang oleh Mia Fauziah, Pelaksana Pemeriksa di bawah Kaur Keuangan.\r\n\r\n         \r\n\r\nPengambil Apel menyampaikan 3 tema materi. Pertama revisi target penerimaan yang dirubah menjadi 78,1 M untuk pabean sedangkan untuk cukai ditargetkan sebesar 33,1 M. Untuk realisasi penerimaan sampai tanggal 7 Desember 2014, pabean sudah terlampaui yaitu 79.309.464.756,00 dan untuk cukai masih kurang sedikit di angka 32.152.151.000,00. Kedua adalah Hasil Survey Kepuasan Pengguna Layanan yang telah dilakukan oleh Kanwil DJBC Jakarta dengan Indeks Sangat Puas 4.79 dari skala 5 dan menempati urutan nomor 2 secara nasional untuk seluruh kantor bea dan cukai se-Indonesia. Ketiga berkaitan dengan HUT KPPBC TMP A Marunda Ke – 4, himbauan kepada seluruh pejabat dan pegawai agar ikut berperan serta aktif dan berpartisipasi mendukung perlombaan – perlombaan yang sedang berlangsung yaitu perlombaan Volley, Badminton, Tenis Meja, Catur, Gaple, Futsal, dan Dangdut Idol.\r\n\r\n(Seksi Penyuluhan dan Layanan Informasi)', 'kepemimpinan-wanita-indonesia', 1),
(3, 1, '2014-12-13', 'capacity building indonesia', 'capacity building inggris', 'Pada Sabtu dan Minggu tanggal 6 sampai 7 Desember 2014 KPPBC Kediri mengadakan kegiatan Capacity Building dengan peserta keluarga besar KPPBC Kediri. Kegiatan dilaksanakan di kawasan pariwisata Waduk Selorejo, Ngantang, Kabupaten Malang. Beberapa sesi yang dilaksanakan meliputi Outbond di sekitar waduk, Mendengarkan ceramah tentang Motivasi dan Outbond lanjutan berupa Rafting.\r\n\r\n  \r\n\r\nTujuan dilaksanakannya Capacity Building adalah untuk menambah wawasan dan pengetahuan dalam meningkatkan kinerja dan menguatkan kerjasama tim. Selain itu juga agar para pegawai yang terlibat bisa mengeksplorasi alam dan berinteraksi lebih akrab dengan rekan-rekan kerja, juga terhadap lingkungan yang baru. Capacity Building kali ini sengaja dilaksanakan di alam terbuka dalam rangka melatih fisik, mental dan kedisiplinan peserta agar dapat menghadapi berbagai rintangan masalah. Selain itu peserta dilatih untuk memecahkan suatu masalah dengan suatu solusi yang dimusyawarahkan bersama-sama. Sehingga peserta diharapkan dapat bekerjasama dalam sebuah kelompok (team work). Manfaat lain dari kegiatan ini yaitu memupuk rasa solidaritas yang tinggi antar sesama pegawai dan dapat diterapkan di dalam pekerjaan sehari-hari sehingga tidak hanya mementingkan diri sendiri. Capacity Building akan membentuk suatu pribadi yang mandiri, tegar, rasa solidaritas yang tinggi sesama rekan dan kerjasama yang baik sehingga suatu target akan lebih mudah tercapai apabila dilakukan secara kompak dan terarah.\r\n\r\n  \r\n\r\nSetelah siang hari peserta mengikuti berbagai game outbond maka pada malam hari kegiatan dilanjutkan dengan mendengarkan ceramah motivasi diri yang berisi tentang berfikir kreatif. Walaupun berupa ceramah tetapi kegiatan dilakukan secara santai karena para peserta sambil mengikuti ceramah juga dapat menikmati hidangan yang tersedia. Selain itu disela-sela acara dibagikan “door prize”. Karena peserta begitu antusias tidak terasa motivator memberikan motivasi selama 3 jam.\r\n\r\n  \r\n\r\nPada hari berikutnya Outbond diisi dengan kegiatan Rafting di daerah Kasembon. Ternyata Rafting dengan menyusuri sungai memerlukan waktu yang tidak sebentar yaitu sekitar 2-3 jam. Ada ketegangan yang dirasakan masing-masing peserta saat melewati beberapa jeram, berbagai ekspresi muncul saat diabadikan lewat foto. Namun demikian semua peserta begitu antusias mengikuti kegiatan ini, sehingga diharapkan semua peserta mempunyai semangat yang baru dalam bekerja esok harinya. Acara selesai sekitar pukul 12 siang, dan peserta kembali ke Kediri sekitar pukul 13.30 siang. (Red-PLI KPPBC Kediri 8 Desember 2014)', 'inggris Pada Sabtu dan Minggu tanggal 6 sampai 7 Desember 2014 KPPBC Kediri mengadakan kegiatan Capacity Building dengan peserta keluarga besar KPPBC Kediri. Kegiatan dilaksanakan di kawasan pariwisata Waduk Selorejo, Ngantang, Kabupaten Malang. Beberapa sesi yang dilaksanakan meliputi Outbond di sekitar waduk, Mendengarkan ceramah tentang Motivasi dan Outbond lanjutan berupa Rafting.\r\n\r\n  \r\n\r\nTujuan dilaksanakannya Capacity Building adalah untuk menambah wawasan dan pengetahuan dalam meningkatkan kinerja dan menguatkan kerjasama tim. Selain itu juga agar para pegawai yang terlibat bisa mengeksplorasi alam dan berinteraksi lebih akrab dengan rekan-rekan kerja, juga terhadap lingkungan yang baru. Capacity Building kali ini sengaja dilaksanakan di alam terbuka dalam rangka melatih fisik, mental dan kedisiplinan peserta agar dapat menghadapi berbagai rintangan masalah. Selain itu peserta dilatih untuk memecahkan suatu masalah dengan suatu solusi yang dimusyawarahkan bersama-sama. Sehingga peserta diharapkan dapat bekerjasama dalam sebuah kelompok (team work). Manfaat lain dari kegiatan ini yaitu memupuk rasa solidaritas yang tinggi antar sesama pegawai dan dapat diterapkan di dalam pekerjaan sehari-hari sehingga tidak hanya mementingkan diri sendiri. Capacity Building akan membentuk suatu pribadi yang mandiri, tegar, rasa solidaritas yang tinggi sesama rekan dan kerjasama yang baik sehingga suatu target akan lebih mudah tercapai apabila dilakukan secara kompak dan terarah.\r\n\r\n  \r\n\r\nSetelah siang hari peserta mengikuti berbagai game outbond maka pada malam hari kegiatan dilanjutkan dengan mendengarkan ceramah motivasi diri yang berisi tentang berfikir kreatif. Walaupun berupa ceramah tetapi kegiatan dilakukan secara santai karena para peserta sambil mengikuti ceramah juga dapat menikmati hidangan yang tersedia. Selain itu disela-sela acara dibagikan “door prize”. Karena peserta begitu antusias tidak terasa motivator memberikan motivasi selama 3 jam.\r\n\r\n  \r\n\r\nPada hari berikutnya Outbond diisi dengan kegiatan Rafting di daerah Kasembon. Ternyata Rafting dengan menyusuri sungai memerlukan waktu yang tidak sebentar yaitu sekitar 2-3 jam. Ada ketegangan yang dirasakan masing-masing peserta saat melewati beberapa jeram, berbagai ekspresi muncul saat diabadikan lewat foto. Namun demikian semua peserta begitu antusias mengikuti kegiatan ini, sehingga diharapkan semua peserta mempunyai semangat yang baru dalam bekerja esok harinya. Acara selesai sekitar pukul 12 siang, dan peserta kembali ke Kediri sekitar pukul 13.30 siang. (Red-PLI KPPBC Kediri 8 Desember 2014)', 'capacity-building-indonesia', 1),
(4, 1, '2014-12-13', 'latihan menembak indonesia', 'latihan menembak inggris', 'Pada tanggal 20 November 2014 bertempat di Mako Brigade Mobil Detasemen B, Kel. Kandang, Bengkulu, dalam rangka pemeliharaan inventaris senjata api dinas dan meningkatkan keterampilan pegawai dalam penggunaan senjata api dinas, telah dilaksanakan perawatan (pembersihan) dan pelatihan bongkar pasang senjata api dinas beserta pelatihan menembak terhadap beberapa pegawai KPPBC TMP C Bengkulu, khususnya bagi petugas pada seksi P2.\r\n\r\n  \r\n\r\nPelatihan bongkar pasang senjata api dinas dan menembak menggunakan senjata api laras pendek (pistol P3) dan laras panjang (SSBC) yang dimiliki KPPBC TMP C Bengkulu. Instruktur memberikan pelatihan mengenai perawatan serta membongkar dan memasang kembali senjata api dinas secara yang benar dan aman, selain itu instruktur juga memberikan pelatihan mengenai sikap dan teknik dalam menembak agar tepat ke sasaran.\r\n\r\n  \r\n\r\nDalam kegiatan tersebut baik pegawai KPPBC TMP C Bengkulu maupun instrukturnya antusias terhadap kegiatan tersebut. Diharapkan dengan adanya kegiatan ini agar pegawai KPPBC TMP C Bengkulu, khususnya yang bertugas menangani persenjataan dapat merawat dan memahami serta meningkatkan kualitas dalam hal penggunaan senjata api dinas.\r\n\r\nSeksi P2 KPPBC TMP C BENGKULU.', 'inggris Pada tanggal 20 November 2014 bertempat di Mako Brigade Mobil Detasemen B, Kel. Kandang, Bengkulu, dalam rangka pemeliharaan inventaris senjata api dinas dan meningkatkan keterampilan pegawai dalam penggunaan senjata api dinas, telah dilaksanakan perawatan (pembersihan) dan pelatihan bongkar pasang senjata api dinas beserta pelatihan menembak terhadap beberapa pegawai KPPBC TMP C Bengkulu, khususnya bagi petugas pada seksi P2.\r\n\r\n  \r\n\r\nPelatihan bongkar pasang senjata api dinas dan menembak menggunakan senjata api laras pendek (pistol P3) dan laras panjang (SSBC) yang dimiliki KPPBC TMP C Bengkulu. Instruktur memberikan pelatihan mengenai perawatan serta membongkar dan memasang kembali senjata api dinas secara yang benar dan aman, selain itu instruktur juga memberikan pelatihan mengenai sikap dan teknik dalam menembak agar tepat ke sasaran.\r\n\r\n  \r\n\r\nDalam kegiatan tersebut baik pegawai KPPBC TMP C Bengkulu maupun instrukturnya antusias terhadap kegiatan tersebut. Diharapkan dengan adanya kegiatan ini agar pegawai KPPBC TMP C Bengkulu, khususnya yang bertugas menangani persenjataan dapat merawat dan memahami serta meningkatkan kualitas dalam hal penggunaan senjata api dinas.\r\n\r\nSeksi P2 KPPBC TMP C BENGKULU.', 'latihan-menembak-indonesia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kiriman`
--

CREATE TABLE IF NOT EXISTS `kiriman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `jenis` varchar(255) NOT NULL COMMENT 'select(penumpang_sarkut, kiriman_pos,pelintas_batas)',
  `urut` int(11) NOT NULL DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `kiriman`
--

INSERT INTO `kiriman` (`id`, `judul_id`, `judul_en`, `isi_id`, `isi_en`, `jenis`, `urut`) VALUES
(1, 'Apa itu barang penumpang indonesia ?', 'Apa itu barang penumpang inggris ?', '<p>Barang penumpang indonesia adalah</p>\r\n', '<p>Barang penumpang inggris adalah</p>\r\n', 'penumpang_sarkut', 1),
(2, 'Apakah awak sarkut indonesia ?', 'Apakah awak sarkut inggris ?', 'Awak sarkut indonesia adalah', 'Awak sarkut inggris adalah', 'penumpang_sarkut', 999),
(3, 'Apakah kiriman pos yang berupa hadiah dikenakan pungutan impor, karena barang tersebut diperoleh secara cuma-cuma dan tidak diperjualbelikan?', 'apa barang kiriman inggris ?', '<p style="text-align: justify;">Sesuai dengan PMK nomor 188/PMK.04/2010, pembebasan terhadap barang kiriman diberikan berdasarkan nilai pabean paling banyak FOB USD 50, sehingga meskipun berupa hadiah tetap dikenakan bea masuk dan pajak dalam rangka impor.</p>\r\n', '<p>barang kiriman inggris adalah</p>\r\n', 'kiriman_pos', 1),
(4, 'Apakah barang yang dikirim hanya digunakan untuk keperluan pribadi dan tidak diperjualbelikan tetap dikenakan pungutan impor?', 'Jumlah pembebasan barang kiriman inggris ?', '<p style="text-align: justify;">Meskipun barang yang dikirim&nbsp; hanya digunakan untuk keperluan pribadi dan tidak diperjualbelikan tetap dikenakan pungutan impor apabila nilainya melebihin FOB USD 50.</p>\r\n', '<p>pembebasan inggris</p>\r\n', 'kiriman_pos', 2),
(5, 'Apa pelintas batas indonesia ?', 'Apa pelintas batas inggris ?', 'Pelintas batas indonesia adalah', 'Pelintas batas inggris adalah', 'pelintas', 999),
(6, 'Apa Definisi Pelintas Batas?', '', '<p>Pelintas batas adalah orang yang melintasi batas wilayah Indonesia</p>\r\n', '', 'pelintas_batas', 1),
(7, 'Apa kewajiban pelintas batas?', '', '<p>Kewajibannya antara lain satu dua tiga empat lima</p>\r\n', '', 'pelintas_batas', 2),
(8, 'Apakah barang pindahan yang dikirim melalui barang kiriman juga tetap dikenakan pungutan impor?', '', '<p style="text-align: justify;">Barang pindahan tidak dikenakan pungutan impor sepanjang mendapatkan &ldquo;Surat Keterangan Barang Pindahan&rdquo; dari kedutaan Indonesia di negara asal barang</p>\r\n', '', 'kiriman_pos', 3),
(9, 'Berapakah tarif pengenaan pungutan impor untuk barang kiriman?', '', '<p style="text-align: justify;">Besarnya bea masuk yang harus dibayar tergantung klasifikasi terhadap jenis barang yang dikirim tersebut sesuai dengan pos tarif pada BTKI (Buku Tarif Kepabeanan Indonesia) dikalikan dengan nilai pabean, nilai pabean adalah nilai transaksi perolehan barang tersebut dalam kondisi persaingan bebas ditambah ongkos kirim dan asuransi. Sedangkan untuk pajak dalam rangka impor meliputi PPn Impor dengan tarif rata-rata 10 % dan PPh Pasal 22 impor dengan tarif rata-rata 7,5% dari nilai impor. Terhadap barang-barang tertentu dikenakan juga PPn BM (Pajak Penjualan atas Barang Mewah) dengan tarif bervariasi antara 10 % s.d. 75% dari nilai impor. Nilai Impor adalah nilai pabean ditambah bea masuk. Sehingga total pungutan impornya adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 0%&nbsp;&nbsp; = 17,5%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 5%&nbsp;&nbsp; = 23,375%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 10% = 29,25%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 15% = 35,125%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 20% = 41%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 25% = 46,875%</li>\r\n	<li style="text-align: justify;">Untuk barang dengan tarif BM 30% = 52,75%</li>\r\n</ul>\r\n', '', 'kiriman_pos', 4),
(10, 'Bagaimana apabila penetapan dari bea cukai  terlalu tinggi dan penerima kiriman keberatan terhadap penetapan jumlah pungutan tersebut?', '', '<p style="text-align: justify;">Apabila penerima kiriman pos merasa penetapan yang dilakukan oleh bea cukai kurang tepat maka bisa mengajukan keberatan secara tertulis kepada Kepala Kantor Bea dan Cukai dengan menyertakan bukti-bukti pendukung yang kuat misalnya Invoice, Transfer Payment, Surat Keterangan dan lain-lain, kemudian surat keberatan dan bukti-bukti pendukung teresebut akan dilakukan verifikasi dan diuji kebenarannya, apabila bukti-bukti tersebut dianggap valid dan sah maka dalam waktu paling lama 30 menit akan dibuatkan Nota Pembetulan terhadap PPKP yang telah di terbitkan.</p>\r\n', '', 'kiriman_pos', 5),
(11, 'Berapa lamakah proses pemeriksaan yang dilakukan bea cukai terhadap barang kiriman pos?', '', '<p style="text-align: justify;">Pemeriksaan pabean yang dilakukan oleh bea cukai terhadap kiriman pos wajib diselesaikan oleh pejabat bea dan cukai selambat lambatnya dua hari kerja kecuali terhadap barang-barang yang memerlukan ijin/persyaratan impor tertentu.</p>\r\n', '', 'kiriman_pos', 6),
(12, 'Bagaimanakah perlakuan terhadap barang kiriman yang tidak bisa dilengkapi dengan ijin yang diperlukan, melebihi pembatasan, maupun yang terkena larangan impor ?', '', '<p style="text-align: justify;">Terhadap barang-barang tersebut akan diperlakukan sesuai dengan ketentuan yang berlaku, bisa di re-ekspor, dibuntukan untuk kemudian dinyatakan sebagai barang tidak dikuasai, dilakukan penindakan berupa penegahan bahkan apabila ada indikasi telah terjadi tindak pidana akan dilakukan penyidikan sesuai ketentuan perundangan yang berlaku.</p>\r\n', '', 'kiriman_pos', 7),
(13, 'Mengapa untuk kiriman yang berisi minuman beralkohol dan rokok sering disita sebagian oleh Bea Cukai?', '', '<p style="margin-left: 1.5pt; text-align: justify;">Minuman Mengandung Eti Alkohol (MMEA), Rokok, Cerutu dan Hasil tembakau lainnya merupakan Barang Kena Cukai (BKC). Sesuai dengan Peraturan Menteri Keuangannomor109/PMK.04/2010 tentang Tata Cara Pembebasan Cukai, terhadap BKC yang diimpor melalui barang kiriman maka berlaku pembatasan sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">MMEA (Minuman Mengandung Etil Alkohol) paling banyak 350 ml</li>\r\n	<li style="text-align: justify;">Hasil Tembakau :\r\n	<ul>\r\n		<li>Sigaret paling banyak 40 batang</li>\r\n		<li>Cerutu paling banyak 10 batang</li>\r\n		<li>Tembakau iris/hasil tembakau lainnya paling banyak 40 gram</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p style="margin-left: 15.65pt; text-align: justify;">Apabila terdapat lebih dari satu hasil tembakau maka pembatasan ditetapkan secara proporsional</p>\r\n\r\n<p style="margin-left: 15.65pt; text-align: justify;">Apabila melebihi jumlah tersebut maka sisanya dimusnahkan</p>\r\n', '', 'kiriman_pos', 8),
(14, 'Apakah obat, suplemen dan kosmetik untuk konsumsi pribadi wajib dilengkapi ijin dari BPOM juga?', '', '<p style="text-align: justify;">Untuk Obat, suplemen dan dan kosmetik tetap memerlukan perijinan dari BPOM, khusus untuk Obat Tradisional, dan suplemen dalam rangka penggunaan pribadi bisa melalui ijin jalur khusus (Spesial Acces Scheme) di BPOM. (Perka BPOM nomor 27, 28 dan 39 tahun 2013). Sedangkan untuk kosmetik BPOM tidak memberikan ijin pemasukan untuk penggunaan pribadi/perorangan</p>\r\n', '', 'penumpang_sarkut', 1000),
(15, 'Apakah obat, suplemen dan kosmetik untuk konsumsi pribadi wajib dilengkapi ijin dari BPOM juga?', '', '<p>Untuk Obat, suplemen dan dan kosmetik tetap memerlukan perijinan dari BPOM, khusus untuk Obat Tradisional, dan suplemen dalam rangka penggunaan pribadi bisa melalui ijin jalur khusus (Spesial Acces Scheme) di BPOM. (Perka BPOM nomor 27, 28 dan 39 tahun 2013). Sedangkan untuk kosmetik BPOM tidak memberikan ijin pemasukan untuk penggunaan pribadi/perorangan</p>\r\n', '', 'kiriman_pos', 9),
(16, 'Bagaimanakah cara pengurusan dan biaya untuk pengurusan ijin SAS dari BPOM?', '', '<p style="text-align: justify;">Informasi lebih lanjut mengenai proses dan biaya pengurusan ijin BPOM bisa ditanyakan langsung melalui HALO BPOM 500533</p>\r\n', '', 'kiriman_pos', 10),
(17, 'Apabila terdapat isi kiriman pos yang hilang atau rusak apakah bisa mendapatkan ganti rugi?', '', '<p style="text-align: justify;">Untuk layanan pengaduan terhadap kerusakan dan kehilangan seluruh maupun sebagian isi kiriman dapat diajukan langsung kepada Customer Service/Inquiry Unit Operasi Pos Internasional melalui telepon 021 3860177</p>\r\n', '', 'kiriman_pos', 11),
(18, 'Mengapa kiriman pos yang berisi pakaian sering tertahan oleh bea cukai?', '', '<p style="text-align: justify;">Sesuai dengan Permendag nomor 61/M-DAG/PER/9/2013 pakaian termasuk dalam kategori <strong>barang tertentu</strong>, sehingga apabila dikirim perorangan melalui barang kiriman hanya diperbolehkan paling banyak 10 pcs. Selebihnya diberikan opsi untuk ditegah atau di reekspor dengan biaya sendiri.</p>\r\n', '', 'kiriman_pos', 12),
(19, 'Mengapa kiriman pos yang berisi barang elektronik tertahan oleh bea cukai?', '', '<p style="text-align: justify;">Sesuai dengan Permendag nomor 61/M-DAG/PER/9/2013 barang elektronik termasuk dalam kategori <strong>barang tertentu</strong>, sehingga apabila dikirim perorangan melalui barang kiriman hanya diperbolehkan paling banyak 2 pcs. Selebihnya diberikan opsi untuk ditegah atau di reekspor dengan biaya sendiri.</p>\r\n', '', 'kiriman_pos', 13),
(20, 'Bagaimana ketentuan membeli Hand Phone dari luar negeri, apakah ada batasannya?', '', '<p style="text-align: justify;">Sesuai dengan Permendag nomor 38/M-DAG/PER/8/2013 terhadap importasi Handphone, Komputer Genggam (Hand held), dan Komputer Tablet wajib dilengkapi perijinan Importir Terdaftar dari Kementerian Perdagangan, pengecualian dari perijinan tersebut diberikan apabila dilakukan perorangan melalui barang kiriman dengan jumlah maksimal 2 pcs per pengiriman</p>\r\n', '', 'kiriman_pos', 14),
(21, 'Waktu pengiriman barang tersebut diluar negeri telah dikenakan biaya mengapa sekarang kena pajak lagi?', '', '<p style="text-align: justify;">Biaya yang dibayarkan pada saat pengiriman barang merupakan biaya kirim yang ditagih oleh perusahaan kurir, biaya kirim tersebut belum termasuk pembayaran pungutan bea masuk maupun pajak dalam rangka impor yang ditetapkan oleh negara penerima</p>\r\n', '', 'kiriman_pos', 15),
(22, 'Bagaimana penanganan kiriman pos dari US dengan nomor tracking awalan huruf "L" misalnya : LC123456789US, karena kiriman jenis tersebut lama sampainya bahkan kadang tidak sampai? ', '', '<p style="text-align:justify">Kiriman tersebut oleh PT Pos Indonesia dikategorikan sebagai jenis kiriman bungkusan kecil yang merupakan kiriman curah dan tidak terbukukan, sehingga tidak bisa dilacak posisinya. Pengaduan dan Informasi lebih lanjut mengenai kiriman ini dapat menghubungi Customer Service/Inquiry Unit Operasi Pos Internasional melalui telepon 021 3860177</p>\r\n', '', 'kiriman_pos', 16),
(23, 'Apakah barang asal Indonesia yang dikirim ke luar negeri kemudian diimpor kembali (re-impor) misalnya barang- yang diperbaiki di luar negei, dikenakan pungutan impor?', '', '<p style="text-align: justify;">Barang re-impor tidak dikenakan pungutan impor, akan tetapi pada saat mengekspor harus mengajukan permohonan kepada Kepala Kantor dan diperiksa terlebih dahulu. Apabila terdapat penambahan parts maka yang dikenakan pungutan impor hanya perts yang ditambahkan saja</p>\r\n', '', 'kiriman_pos', 17),
(24, 'Mengapa status kiriman di tracking website pos selalu masih "Processing Document By Customs" ?', '', '<p>Proses pemeriksaan barang kiriman sampai dengan penerbitan PPKP di Bea Cukai diselesaikan paling lama dua hari kerja, apabila status pada &ldquo;Processing Document By Customs&rdquo; lama maka terdapat beberapa kemungkinan yaitu :</p>\r\n\r\n<ul>\r\n	<li>Terhadap kiriman tersebut dilakukan konfirmasi mengenai dokumen - dokumen yang harus dilengkapi oleh penerima kiriman akan tetapi surat konfirmasi tersebut belum diterima oleh penerima barang, dalam hal ini penyampaian Surat Konfirmai tersebut dilakukan oleh PT Pos Indonesia</li>\r\n	<li>Kiriman tersebut telah selesai proses kepabeanannya akan tetapi masih dalam proses distribusi dari MPC Jakarta ke Kantor Pos Serah, status kiriman baru berubah apabila kiriman telah tiba di Kantor Pos Serah. Biasanya kiriman jenis register&nbsp; dan bungkusan proses distribusi dari MPC Jakarta ke kantor pos serah bisa memakan waktu lebih dari satu minggu.</li>\r\n</ul>\r\n', '', 'kiriman_pos', 18),
(25, 'Apa sajakah barang yang dilarang diimpor melalui barang kiriman?', '', '<ol>\r\n	<li>NPP (Narkotika, Psikotropika, dan Prekursor) dilarang (Dasar Hukum UU No. 35 tahun 2009 tentang Narkotika, UU No.5 tahun 1997 tentang Psikotropika, dan PP No 44 tahun 2010 tentang Prekursor)</li>\r\n	<li>Kosmetika, BPOM tidak mengeluarkan ijin pemasukan kosmetika oleh perorangan untuk pemakaian&nbsp; pribadi</li>\r\n	<li>Buku, Majalah, Barang Cetakan Lainnya, Cakram Optik, Sex Toy dan barang lain yang mengandung unsur pornografi/melanggar kesusilaan <strong>dilarang </strong>(Dasar Hukum UU No 44 tahun 2008 tentang Pornografi, KUHP Pasal 282)</li>\r\n	<li>Senjata api/mainan/angin bagian maupun aksesorisnya oleh perorangan tanpa ijin Kapolri</li>\r\n	<li>Barang Kena Cukai yang melebihi batas pembebasan cukai melalui barang kiriman:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li style="margin-left: 15.65pt;">Minuman mengandung etil alkohol maksimal 350 ml</li>\r\n	<li style="margin-left: 15.65pt;">Sigaret maksimal 40 batang</li>\r\n	<li style="margin-left: 15.65pt;">Cerutu maksimal 10 batang</li>\r\n	<li style="margin-left: 15.65pt;">Tembakau Iris maksimal 40 gram</li>\r\n</ul>\r\n', '', 'kiriman_pos', 19);

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE IF NOT EXISTS `kurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kep` varchar(100) NOT NULL,
  `tgl_kep` date NOT NULL,
  `start` date NOT NULL,
  `stop` date NOT NULL,
  `jarak` text NOT NULL,
  `usd` decimal(10,4) NOT NULL,
  `aud` decimal(10,4) NOT NULL,
  `cad` decimal(10,4) NOT NULL,
  `dkk` decimal(10,4) NOT NULL,
  `hkd` decimal(10,4) NOT NULL,
  `myr` decimal(10,4) NOT NULL,
  `nzd` decimal(10,4) NOT NULL,
  `nok` decimal(10,4) NOT NULL,
  `gbp` decimal(10,4) NOT NULL,
  `sgd` decimal(10,4) NOT NULL,
  `sek` decimal(10,4) NOT NULL,
  `chf` decimal(10,4) NOT NULL,
  `jpy` decimal(10,4) NOT NULL,
  `mmk` decimal(10,4) NOT NULL,
  `inr` decimal(10,4) NOT NULL,
  `kwd` decimal(10,4) NOT NULL,
  `pkr` decimal(10,4) NOT NULL,
  `php` decimal(10,4) NOT NULL,
  `sar` decimal(10,4) NOT NULL,
  `lkr` decimal(10,4) NOT NULL,
  `thb` decimal(10,4) NOT NULL,
  `bnd` decimal(10,4) NOT NULL,
  `eur` decimal(10,4) NOT NULL,
  `cny` decimal(10,4) NOT NULL,
  `krw` decimal(10,4) NOT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uploader` int(11) unsigned NOT NULL,
  `tgl_upload` date NOT NULL,
  `judul_id` varchar(255) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  `alert` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `judul_id` (`judul_id`,`judul_en`,`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `uploader`, `tgl_upload`, `judul_id`, `judul_en`, `isi_id`, `isi_en`, `slug`, `publish`, `alert`) VALUES
(1, 1, '2014-12-13', 'maintenence server indonesia', 'maintenence server inggris', 'Sehubungan dengan akan dilakukannya serangkaian kegiatan maintenance untuk optimalisasi Database Server di Data Center Kantor Pusat DJBC.\r\n\r\nDengan ini kami sampaikan bahwa layanan Impor, Ekspor dan BC 2.3 akan berhenti sementara waktu selama proses maintenance tersebut yang akan dilaksanakan pada :\r\n\r\nHari      : Minggu, 24 Agustus 2014\r\n\r\nPukul   : 00.00 WIB s.d 08.00 WIB\r\n\r\nDemi kelancaran pelayanan dan pengurusan dokumen, kami menghimbau kepada seluruh Kantor Pelayanan agar menyesuaikan proses kegiatan Impor, Ekspor dan BC 2.3 dengan waktu pelaksanaan maintenace server.\r\n\r\nDemikian disampaikan, atas perhatian dan kerjasamanya di ucapkan terima kasih.\r\n\r\nLihat pengumuman', 'inggris Sehubungan dengan akan dilakukannya serangkaian kegiatan maintenance untuk optimalisasi Database Server di Data Center Kantor Pusat DJBC.\r\n\r\nDengan ini kami sampaikan bahwa layanan Impor, Ekspor dan BC 2.3 akan berhenti sementara waktu selama proses maintenance tersebut yang akan dilaksanakan pada :\r\n\r\nHari      : Minggu, 24 Agustus 2014\r\n\r\nPukul   : 00.00 WIB s.d 08.00 WIB\r\n\r\nDemi kelancaran pelayanan dan pengurusan dokumen, kami menghimbau kepada seluruh Kantor Pelayanan agar menyesuaikan proses kegiatan Impor, Ekspor dan BC 2.3 dengan waktu pelaksanaan maintenace server.\r\n\r\nDemikian disampaikan, atas perhatian dan kerjasamanya di ucapkan terima kasih.\r\n\r\nLihat pengumuman', 'maintenence-server-indonesia', 0, 0),
(2, 1, '2014-12-13', 'update modul PEB', 'update modul PEB inggris', 'Untuk Pengguna Jasa Kepabeanan dan Cukai\r\nSesuai dengan Peraturan Menteri Perdagangan Republik Indonesia Nomor 64/M-DAG/PER/10/2012 dimana mulai dari 1 Januari 2013 ekspor Produk Industri Kehutanan wajib dilengkapi Dokumen V-Legal.\r\n \r\nDalam rangka memenuhi ketentuan diatas perlu dilakukan update terhadap modul PEB untuk penambahan kode Dokumen V-Legal.Update dapat didownload melalui link berikut dan ikuti petunjuk penambahan kode dokumen yang terlampir.\r\n\r\nDownload File: Patch Modul PEB Kode Dokumen V-Legal\r\n\r\nUntuk Bagian Dukungan Teknis / Operator Konsol di Kantor Bea Cukai Seluruh Indonesia\r\n\r\nSilahkan download petunjuk teknis setting aplikasi untuk awal tahun 2013 di portal intranet', 'inggris Untuk Pengguna Jasa Kepabeanan dan Cukai\r\nSesuai dengan Peraturan Menteri Perdagangan Republik Indonesia Nomor 64/M-DAG/PER/10/2012 dimana mulai dari 1 Januari 2013 ekspor Produk Industri Kehutanan wajib dilengkapi Dokumen V-Legal.\r\n \r\nDalam rangka memenuhi ketentuan diatas perlu dilakukan update terhadap modul PEB untuk penambahan kode Dokumen V-Legal.Update dapat didownload melalui link berikut dan ikuti petunjuk penambahan kode dokumen yang terlampir.\r\n\r\nDownload File: Patch Modul PEB Kode Dokumen V-Legal\r\n\r\nUntuk Bagian Dukungan Teknis / Operator Konsol di Kantor Bea Cukai Seluruh Indonesia\r\n\r\nSilahkan download petunjuk teknis setting aplikasi untuk awal tahun 2013 di portal intranet', 'update-modul-peb', 1, 1),
(3, 2, '2014-12-16', 'PENGUMUMAN LOMBA LOGO TRANSFORMASI KELEMBAGAAN', '', '<p style="text-align: justify;">Dalam rangka meningkatkan kepedulian para pemangku kepentingan Kementerian Keuangan terhadap transformasi dan keterlibatan dalam pelaksanaan inisiatif Transformasi Kelembagaan, Kementerian Keuangan mengadakan lomba logo Transformasi Kelembagaan yang rencananya akan ditetapkan oleh Menteri Keuangan pada tanggal 16 Desember 2014.</p>\r\n\r\n<p style="text-align: justify;"><a href="http://192.168.3.15/beacukai/upload/files/1dc916704949a7ff792fe5341beb200a-peng-7-sj-2014-rev.pdf" target="LOMBALOGOTRANSFORMASIKELEMBAGAAN">Klik Disini</a></p>\r\n', '', 'pengumuman-lomba-logo-transformasi-kelembagaan', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4a2ec9e524a21f7f2b4130129b73474f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1418916467, 'a:2:{s:9:"user_data";s:0:"";s:8:"language";s:2:"id";}'),
('6ae4357c4a0a7bc007507c8271d75285', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0', 1418972324, 'a:2:{s:9:"user_data";s:0:"";s:8:"language";s:2:"id";}');

-- --------------------------------------------------------

--
-- Table structure for table `skep`
--

CREATE TABLE IF NOT EXISTS `skep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kep` varchar(100) NOT NULL,
  `tgl_kep` date NOT NULL,
  `start` date NOT NULL,
  `stop` date NOT NULL,
  `range` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `skep`
--

INSERT INTO `skep` (`id`, `no_kep`, `tgl_kep`, `start`, `stop`, `range`) VALUES
(1, '56/KM.11/2014', '2014-12-16', '2014-12-17', '2014-12-23', ''),
(2, '57/KM.11/2014', '2014-12-16', '2014-12-17', '2014-12-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(225) NOT NULL,
  `publish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `namafile`, `publish`) VALUES
(1, 'kapal.jpg', 1),
(2, 'kimia.jpg', 0),
(3, 'kontainer.jpg', 0),
(4, 'kpdjbc.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `kode`, `isi_id`, `isi_en`) VALUES
(1, 'sekilas', 'sekilas bea cukai', 'flash bc'),
(2, 'tupoksi', 'tupoksi', 'tupoksi in english'),
(3, 'visi_misi', 'visi misi', 'visi misi in english'),
(4, 'logo', 'logo indoneisa', 'logo english'),
(5, 'kode_etik', 'kode etik bahasa indonesia', 'kode etik bahasa inggris'),
(6, 'organisasi', 'organisasi bahasa indonesia', 'organisasi bahasa inggris'),
(7, 'sejarah', 'sejarah bahasa indonesia', 'sejarah bahasa inggris'),
(8, 'kantor', 'kantor bahasa indonesia', 'kantor bahasa inggris');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usergroup` varchar(255) NOT NULL COMMENT 'admin, operator',
  `avatar` varchar(255) NOT NULL DEFAULT 'no_photo.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `username`, `password`, `usergroup`, `avatar`) VALUES
(1, 'Administrator', '999999999999999999111', 'admin', 'fc948b68affb76bb647a3df280636f29', 'admin', '2014-12-18-iso_lg_a.jpg'),
(2, 'Hari Prasetyo', '198507262006021003', 'hari', '64f85337b12c7998c49d68d57eb68f37', 'operator', 'no_photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `wbc`
--

CREATE TABLE IF NOT EXISTS `wbc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edisi` varchar(255) NOT NULL,
  `namafile` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wbc`
--

INSERT INTO `wbc` (`id`, `edisi`, `namafile`, `foto`) VALUES
(1, '13', 'wbc13.pdf', 'wbc.jpg'),
(2, '14', 'wbc14.pdf', 'wbc.jpg'),
(3, '15', 'wbc15.pdf', 'wbc.jpg'),
(4, '16', 'wbc16.pdf', 'wbc.jpg'),
(5, '17', 'wbc17.pdf', 'wbc.jpg'),
(6, '18', 'wbc18.pdf', 'wbc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `isi_id` text NOT NULL,
  `isi_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `kode`, `isi_id`, `isi_en`) VALUES
(1, 'tentang_website', 'Website resmi Bea Cukai adalah sebuah situs resmi milik Direktorat Jenderal Bea dan Cukai yang berisi publikasi informasi berkaitan dengan keberadan Bea Cukai.\r\n                            <br/><br/>\r\n                            <strong>SEJARAH WEBSITE BEA CUKAI</strong>\r\n                            <br/>\r\n                            Dengan ada kebutuhan publikasi informasi yang cepat, transparan dan akurat maka Direktorat Jenderal Bea dan Cukai membuat sebuah situs <a href="http://www.beacukai.go.id">http://www.beacukai.go.id</a>                            <br/><br/>\r\n                            <strong>KONSEP WEBSITE</strong>\r\n                            <br/>\r\n                            Pembuatan website bea cukai yang baru ini berorientasi kepada pengguna jasa (eksternal) yaitu semua yang termuat dalam website ini adalah dalam rangka memenuhi publikasi informasi yang dibutuhkan Pengguna Jasa Bea dan Cukai dalam melakukan kegiatan operasional yang berhubungan dengan Bea dan Cukai.\r\n                            <br/><br/>\r\n                            <strong>TEMA WEBSITE</strong>\r\n                            <ul>\r\n                                <li>Simple</li>\r\n                                <li>User Friendly</li>\r\n                                <li>Informative</li>\r\n                                <li>Up To Date</li>\r\n                            </ul>\r\n                            <br/>\r\n                            <strong>TIM WEBSITE</strong>\r\n                            <ul>\r\n                                <li>Tim Development</li>\r\n                                <li>Tim Humas</li>\r\n                            </ul>', 'Official Website Bea Cukai adalah sebuah situs resmi milik Direktorat Jenderal Bea dan Cukai yang berisi publikasi informasi berkaitan dengan keberadan Bea Cukai.\r\n                            <br/><br/>\r\n                            <strong>SEJARAH WEBSITE BEA CUKAI</strong>\r\n                            <br/>\r\n                            Dengan ada kebutuhan publikasi informasi yang cepat, transparan dan akurat maka Direktorat Jenderal Bea dan Cukai membuat sebuah situs <a href="http://www.beacukai.go.id">http://www.beacukai.go.id</a>                            <br/><br/>\r\n                            <strong>KONSEP WEBSITE</strong>\r\n                            <br/>\r\n                            Pembuatan website bea cukai yang baru ini berorientasi kepada pengguna jasa (eksternal) yaitu semua yang termuat dalam website ini adalah dalam rangka memenuhi publikasi informasi yang dibutuhkan Pengguna Jasa Bea dan Cukai dalam melakukan kegiatan operasional yang berhubungan dengan Bea dan Cukai.\r\n                            <br/><br/>\r\n                            <strong>TEMA WEBSITE</strong>\r\n                            <ul>\r\n                                <li>Simple</li>\r\n                                <li>User Friendly</li>\r\n                                <li>Informative</li>\r\n                                <li>Up To Date</li>\r\n                            </ul>\r\n                            <br/>\r\n                            <strong>TIM WEBSITE</strong>\r\n                            <ul>\r\n                                <li>Tim Development</li>\r\n                                <li>Tim Humas</li>\r\n                            </ul>'),
(2, 'sanggahan', 'Informasi dalam website ini contained in this website is provided by the administration team. The team is committed to maintain the accuracy and relevance of the information.\r\n                            <br><br>\r\n                            Should you find any room for improvement in the articles, regulations or other documents in terms of accuracy, presentation, etc, please do not hesitate to email the administrators at along with the complete URL of the page to be improved.\r\n                            <br><br>\r\n                            Unless stated otherwise, not all of the information provided in this website is the official statement or viewpoint of Directorate General of Customs and Excise. The users are responsible for any use of any information in this website, excluding the official regulations.\r\n', 'Information contained in this website is provided by the administration team. The team is committed to maintain the accuracy and relevance of the information.\r\n                            <br><br>\r\n                            Should you find any room for improvement in the articles, regulations or other documents in terms of accuracy, presentation, etc, please do not hesitate to email the administrators at along with the complete URL of the page to be improved.\r\n                            <br><br>\r\n                            Unless stated otherwise, not all of the information provided in this website is the official statement or viewpoint of Directorate General of Customs and Excise. The users are responsible for any use of any information in this website, excluding the official regulations.\r\n'),
(3, 'syarat_penggunaan', 'Sebelum memanfaatkan situs web ini, bacalah syarat penggunaan dibawah ini dengan baik. Jika Anda tidak menyetujui syarat penggunaan, sebaiknya Anda tidak meneruskan ke langkah berikutnya. Apabila Anda langsung meneruskan ke halaman berikutnya, maka Anda dianggap faham dan setuju dengan isi syarat penggunaan. Persyaratan ini dapat berubah sewaktu-waktu sesuai dengan kebijakan yang ditetapkan, oleh sebab itu diharapkan Anda mengikuti perkembangannya secara periodik.\r\n                            <br><br>\r\n                            <strong>Informasi Content</strong>\r\n                            <br>\r\n                            Situs web ini dibangun untuk kenyamanan pengunjung Internet kami. Untuk itu kami berusaha menyajikan seluruh informasi (teks, grafis dan seluruh atribut yang ada) dengan sebaik-baiknya. Gunakanlah browser Mozilla Fire Fox untuk mendapatkan hasil tampilan yang optimal. Namun kami tidak dapat menjamin bahwa informasi yang kami sajikan dapat memenuhi keinginan seluruh pengguna situs web ini.\r\n                            <br><br>\r\n                            <strong>Copyright</strong>\r\n                            <br>\r\n                            Isi keseluruhan (teks, grafis dan seluruh atribut yang ada) pada situs web ini adalah milik Direktorat Jenderal Bea dan Cukai yang dilindungi hukum. Segala bentuk penggunaan material yang bersifat komersial harus seizin pengelola situs web DJBC. Segala tindakan yang dengan sengaja mengakibatkan rusaknya data, program, informasi dan hal-hal yang berkaitan dengan itu, dianggap sebagai perbuatan melanggar hukum.\r\n                            <br><br>\r\n                            <strong>Virus</strong>\r\n                            <br>\r\n                            Dampak dari perkembangan teknologi informasi adalah timbulnya virus komputer baru di Internet, maka kami memperingatkan Anda tentang bahaya yang ditimbulkan oleh virus tersebut terhadap sistem Anda. Merupakan tanggung jawab Anda untuk mendeteksi semua materi yang di-download dari Internet. Kami tidak bertanggung jawab terhadap segala bahaya atau kerusakan yang ditimbulkan oleh virus tersebut.\r\n                            <br><br>\r\n                            <strong>Keamanan Transmisi</strong>\r\n                            <br>\r\n                            Penggunaan Internet dan e-mail tidaklah bersifat rahasia. Karena terdapat kemungkinan informasi yang dikirimkan kepada kami terbaca atau digunakan oleh pihak lain. Guna melindungi rahasia anda, sebaiknya e-mail yang dikirimkan tidak berisi informasi yang sensitif seperti nilai rekening, laporan keuangan, dsb.\r\n                            <br><br>\r\n                            <strong>Link ke Site Lain</strong>\r\n                            <br>\r\n                            Situs web ini menyediakan beberapa link untuk memudahkan Anda melihat informasi yang berhubungan dengan situs-situs lain. Kami tidak melakukan pemeliharaan dan kontrol terhadap para organisasi pemilik situs atau para organisasi penyedia informasi tersebut. Oleh karena itu informasi yang tersaji tersebut berada di luar tanggung jawab kami.\r\n                            <br><br>\r\n                            <strong>E-mail</strong>\r\n                            <br>\r\n                            E-mail merupakan alat komunikasi yang penting bagi pengunjung situs web kami. Kami menggunakan e-mail semata-mata untuk tujuan korespondensi dan komunikasi dengan Anda. Kami menggunakan alamat e-mail Anda untuk mengirimkan informasi tentang produk maupun pelayanan yang mungkin menarik bagi anda. Apabila Anda tidak ingin melakukan kontak dengan kami, silahkan kirimkan ketidakinginan Anda pada kami.\r\n                            <br><br>\r\n                            <strong>Terminasi Akses</strong>\r\n                            <br>\r\n                            Kami berhak untuk menghentikan akses terhadap situs ini dengan memproteksi password terhadap penyalahgunaan situs ini.\r\n                            <br><br>\r\n                            <strong>Umpan Balik</strong>\r\n                            <br>\r\n                            Kami menghargai segala masukan yang diberikan kepada kami, untuk menghindari segala kesalahpahaman. Apapun yang anda kirimkan kepada kami, baik ide, saran, usulan, dsb; akan menjadi milik kami tanpa diberikan kompensasi dan tidak ada klaim untuk hal tersebut.', 'Before Sebelum memanfaatkan situs web ini, bacalah syarat penggunaan dibawah ini dengan baik. Jika Anda tidak menyetujui syarat penggunaan, sebaiknya Anda tidak meneruskan ke langkah berikutnya. Apabila Anda langsung meneruskan ke halaman berikutnya, maka Anda dianggap faham dan setuju dengan isi syarat penggunaan. Persyaratan ini dapat berubah sewaktu-waktu sesuai dengan kebijakan yang ditetapkan, oleh sebab itu diharapkan Anda mengikuti perkembangannya secara periodik.\r\n                            <br><br>\r\n                            <strong>Informasi Content</strong>\r\n                            <br>\r\n                            Situs web ini dibangun untuk kenyamanan pengunjung Internet kami. Untuk itu kami berusaha menyajikan seluruh informasi (teks, grafis dan seluruh atribut yang ada) dengan sebaik-baiknya. Gunakanlah browser Mozilla Fire Fox untuk mendapatkan hasil tampilan yang optimal. Namun kami tidak dapat menjamin bahwa informasi yang kami sajikan dapat memenuhi keinginan seluruh pengguna situs web ini.\r\n                            <br><br>\r\n                            <strong>Copyright</strong>\r\n                            <br>\r\n                            Isi keseluruhan (teks, grafis dan seluruh atribut yang ada) pada situs web ini adalah milik Direktorat Jenderal Bea dan Cukai yang dilindungi hukum. Segala bentuk penggunaan material yang bersifat komersial harus seizin pengelola situs web DJBC. Segala tindakan yang dengan sengaja mengakibatkan rusaknya data, program, informasi dan hal-hal yang berkaitan dengan itu, dianggap sebagai perbuatan melanggar hukum.\r\n                            <br><br>\r\n                            <strong>Virus</strong>\r\n                            <br>\r\n                            Dampak dari perkembangan teknologi informasi adalah timbulnya virus komputer baru di Internet, maka kami memperingatkan Anda tentang bahaya yang ditimbulkan oleh virus tersebut terhadap sistem Anda. Merupakan tanggung jawab Anda untuk mendeteksi semua materi yang di-download dari Internet. Kami tidak bertanggung jawab terhadap segala bahaya atau kerusakan yang ditimbulkan oleh virus tersebut.\r\n                            <br><br>\r\n                            <strong>Keamanan Transmisi</strong>\r\n                            <br>\r\n                            Penggunaan Internet dan e-mail tidaklah bersifat rahasia. Karena terdapat kemungkinan informasi yang dikirimkan kepada kami terbaca atau digunakan oleh pihak lain. Guna melindungi rahasia anda, sebaiknya e-mail yang dikirimkan tidak berisi informasi yang sensitif seperti nilai rekening, laporan keuangan, dsb.\r\n                            <br><br>\r\n                            <strong>Link ke Site Lain</strong>\r\n                            <br>\r\n                            Situs web ini menyediakan beberapa link untuk memudahkan Anda melihat informasi yang berhubungan dengan situs-situs lain. Kami tidak melakukan pemeliharaan dan kontrol terhadap para organisasi pemilik situs atau para organisasi penyedia informasi tersebut. Oleh karena itu informasi yang tersaji tersebut berada di luar tanggung jawab kami.\r\n                            <br><br>\r\n                            <strong>E-mail</strong>\r\n                            <br>\r\n                            E-mail merupakan alat komunikasi yang penting bagi pengunjung situs web kami. Kami menggunakan e-mail semata-mata untuk tujuan korespondensi dan komunikasi dengan Anda. Kami menggunakan alamat e-mail Anda untuk mengirimkan informasi tentang produk maupun pelayanan yang mungkin menarik bagi anda. Apabila Anda tidak ingin melakukan kontak dengan kami, silahkan kirimkan ketidakinginan Anda pada kami.\r\n                            <br><br>\r\n                            <strong>Terminasi Akses</strong>\r\n                            <br>\r\n                            Kami berhak untuk menghentikan akses terhadap situs ini dengan memproteksi password terhadap penyalahgunaan situs ini.\r\n                            <br><br>\r\n                            <strong>Umpan Balik</strong>\r\n                            <br>\r\n                            Kami menghargai segala masukan yang diberikan kepada kami, untuk menghindari segala kesalahpahaman. Apapun yang anda kirimkan kepada kami, baik ide, saran, usulan, dsb; akan menjadi milik kami tanpa diberikan kompensasi dan tidak ada klaim untuk hal tersebut.'),
(4, 'privasi', 'DJBC memiliki komitmen untuk tetap menjaga privasi pengguna. Pernyataan berikut adalah pernyataan mengenai pengumpulan informasi dan diseminasi yang berlaku untuk situs Web DJBC.\r\n                            <br><br>\r\n                            <strong>InformasiPribadi</strong>\r\n                            <br>\r\n                            DJBC tidak mengumpulkan informasi pribadi (sepert: nama, alamat atau nomor telepon) kecuali Anda secara sukarela memberikan kepada kami dengan mengirimkan email, berpartisipasi dalam survei atau mengisi formulir online. Kami tidak membagikan informasi pribadi dengan pihak ketiga.\r\n                            Ketika Anda mengunjungi situs Web kami, kami secara otomatis mengumpulkan informasi tertentu, seperti:\r\n                            \r\n                            <ul>\r\n                                <li>Domain, negara, alamat IP</li>\r\n                                <li>Browser, platform, resolusi</li>\r\n                                <li>Halaman Masuk - Keluar, Referrals</li>\r\n                                <li>Tanggal, Waktu</li>\r\n                                <li>Term Pencarian dan Mesin Pencari</li>\r\n                            </ul>\r\n                            Ini adalah praktek standar untuk situs Web, dan tidak digunakan untuk tujuan lain selain untuk mengevaluasi bagaimana kami dapat merancang situs terbaik untuk melayani kebutuhan Anda.\r\n                            <br>\r\n                            Dalam rangka memberikan layanan yang lebih baik dan lebih aman kita kadang - kadang akan menggunakan sebuah "cookie". Cookie adalah sepotong kecil informasi yang disimpan pada komputer Anda yang unik dapat mengidentifikasi browser Anda, dan mungkin termasuk informasi lainnya tentang kunjungan Anda ke situs. Cookie tidak dapat dibaca oleh situs Web lain dari pada yang ditetapkan cookie.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Keamanan</strong>\r\n                            <br>\r\n                            Situs ini menerapkan langkah - langkah keamanan untuk melindungi kehilangan, penyalahgunaan, dan perubahan dari informasi yang tidak diinginkan.\r\n\r\n                            Identitas Pengguna seperti username dan password informasi di enkripsi sebelum dikirim melalui jaringan.\r\n\r\n                            DJBC mematuhi semua persyaratan hukum dan hukum sehubungan dengan akses ke informasi sesuai Undang - Undang Republik Indonesia. Nomor 11 Tahun 2008. Tentang Informasi dan transaksi elektronik.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Link ke Situs Eksternal</strong>\r\n                            <br>\r\n\r\n                            Situs ini berisi link ke eksternal. DJBC tidak bertanggung jawab atas praktek privasi atau isi dari situs tersebut.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Pertanyaan</strong>\r\n                            <br>\r\n                            Jika Anda memiliki pertanyaan atau masalah mengenai privasi, Anda dapat menghubungi kami.', 'DJBC commited memiliki komitmen untuk tetap menjaga privasi pengguna. Pernyataan berikut adalah pernyataan mengenai pengumpulan informasi dan diseminasi yang berlaku untuk situs Web DJBC.\r\n                            <br><br>\r\n                            <strong>InformasiPribadi</strong>\r\n                            <br>\r\n                            DJBC tidak mengumpulkan informasi pribadi (sepert: nama, alamat atau nomor telepon) kecuali Anda secara sukarela memberikan kepada kami dengan mengirimkan email, berpartisipasi dalam survei atau mengisi formulir online. Kami tidak membagikan informasi pribadi dengan pihak ketiga.\r\n                            Ketika Anda mengunjungi situs Web kami, kami secara otomatis mengumpulkan informasi tertentu, seperti:\r\n                            \r\n                            <ul>\r\n                                <li>Domain, negara, alamat IP</li>\r\n                                <li>Browser, platform, resolusi</li>\r\n                                <li>Halaman Masuk - Keluar, Referrals</li>\r\n                                <li>Tanggal, Waktu</li>\r\n                                <li>Term Pencarian dan Mesin Pencari</li>\r\n                            </ul>\r\n                            Ini adalah praktek standar untuk situs Web, dan tidak digunakan untuk tujuan lain selain untuk mengevaluasi bagaimana kami dapat merancang situs terbaik untuk melayani kebutuhan Anda.\r\n                            <br>\r\n                            Dalam rangka memberikan layanan yang lebih baik dan lebih aman kita kadang - kadang akan menggunakan sebuah "cookie". Cookie adalah sepotong kecil informasi yang disimpan pada komputer Anda yang unik dapat mengidentifikasi browser Anda, dan mungkin termasuk informasi lainnya tentang kunjungan Anda ke situs. Cookie tidak dapat dibaca oleh situs Web lain dari pada yang ditetapkan cookie.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Keamanan</strong>\r\n                            <br>\r\n                            Situs ini menerapkan langkah - langkah keamanan untuk melindungi kehilangan, penyalahgunaan, dan perubahan dari informasi yang tidak diinginkan.\r\n\r\n                            Identitas Pengguna seperti username dan password informasi di enkripsi sebelum dikirim melalui jaringan.\r\n\r\n                            DJBC mematuhi semua persyaratan hukum dan hukum sehubungan dengan akses ke informasi sesuai Undang - Undang Republik Indonesia. Nomor 11 Tahun 2008. Tentang Informasi dan transaksi elektronik.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Link ke Situs Eksternal</strong>\r\n                            <br>\r\n\r\n                            Situs ini berisi link ke eksternal. DJBC tidak bertanggung jawab atas praktek privasi atau isi dari situs tersebut.\r\n\r\n\r\n                            <br><br>\r\n                            <strong>Pertanyaan</strong>\r\n                            <br>\r\n                            Jika Anda memiliki pertanyaan atau masalah mengenai privasi, Anda dapat menghubungi kami.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
