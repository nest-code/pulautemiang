-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 03:07 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_temiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
  `id_akun` char(14) NOT NULL,
  `nama_akun` varchar(15) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `level` enum('Admin','Petugas','Dokter','Kepala','Apotek') NOT NULL,
  `pertanyaan` enum('1','2','3','4') NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama_akun`, `kata_sandi`, `level`, `pertanyaan`, `jawaban`) VALUES
('03102019203630', 'adrre', 'admin', 'Apotek', '1', '2121'),
('04102019071346', 'dokter2', 'password', 'Dokter', '1', 'jambi'),
('04102019071347', 'dokteranak', 'dokteranak', 'Dokter', '1', 'jakarta'),
('04102019174900', 'dokterumum2', 'dokterumum2', 'Dokter', '1', 'jambi'),
('19700225199902', 'dokterumum', 'dokterumum', 'Dokter', '1', 'jambi'),
('19720101199609', 'dokterkb', 'dokterkb', 'Dokter', '1', 'bandung'),
('19761208199005', 'dokterdots', 'dokterdots', 'Dokter', '1', 'Aceh'),
('22072019175514', 'petugas', 'petugas', 'Petugas', '1', 'jambi'),
('30072019174402', 'admin', 'admin', 'Admin', '1', 'jambi'),
('30092019165920', 'doktergigi', 'doktergigi', 'Dokter', '1', 'medan'),
('30092019170634', 'apoteker', 'apoteker', 'Apotek', '1', 'jambi'),
('30092019170820', 'kepala', 'kepala', 'Kepala', '1', 'jambi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_antrian_increment`
--

CREATE TABLE IF NOT EXISTS `tb_antrian_increment` (
  `id_antrian` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_jenis_poli` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id_antrian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_resep_obat`
--

CREATE TABLE IF NOT EXISTS `tb_detail_resep_obat` (
  `id_detail_resep` tinyint(8) NOT NULL AUTO_INCREMENT,
  `id_resep_obat` char(14) NOT NULL,
  `id_obat` tinyint(5) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `keterangan` tinytext,
  PRIMARY KEY (`id_detail_resep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Triggers `tb_detail_resep_obat`
--
DROP TRIGGER IF EXISTS `stok_obat`;
DELIMITER //
CREATE TRIGGER `stok_obat` AFTER INSERT ON `tb_detail_resep_obat`
 FOR EACH ROW BEGIN
UPDATE tb_obat SET stok=stok-NEW.jumlah
WHERE id_obat=NEW.id_obat;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_rm`
--

CREATE TABLE IF NOT EXISTS `tb_detail_rm` (
  `id_detail_rekam_medis` char(14) NOT NULL,
  `no_rm` char(10) DEFAULT NULL,
  `tgl_kunjungan` date NOT NULL,
  `subjektif` text NOT NULL,
  `objektif` text NOT NULL,
  `assement` text NOT NULL,
  `plant` text NOT NULL,
  `nip` char(18) NOT NULL,
  PRIMARY KEY (`id_detail_rekam_medis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_dokter` (
  `nip` char(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Buddha','Hinddu','Islam','Kristen','Katolik') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_jenis_poli` varchar(3) NOT NULL,
  `id_akun` char(14) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`nip`, `nama`, `tgl_lahir`, `jk`, `agama`, `alamat`, `no_hp`, `foto`, `id_jenis_poli`, `id_akun`) VALUES
('19700225199902005', 'Dr. Badarudin', '1970-07-25', 'L', 'Islam', 'Pulau Teminang', '08983884737734', '05082019015342440px-Fanny_Fadillah.jpg', '1', '19700225199902'),
('19720101199609900', 'Dr. Lilina Marsila', '1972-01-01', 'P', 'Islam', 'Pulau Panjang', '089983883774', '22072019174248300px-Aoiwakana.jpg', '2', '22072019174245'),
('19761208199005002', 'Dr. Isminur', '1976-12-08', 'L', 'Islam', 'Jakarta', '08987733323334', '180720190457489dceffc7bce984d94908bdd764159cdc--christopher-nolan-film-school.jpg', '5', '18072019045632'),
('19900818022015001', 'Lily Novita', '1990-08-19', 'P', 'Buddha', 'Pogung', '085266226498', '30092019170244Screenshot_2018-10-14-15-22-59_1.jpg', '6', '30092019165920'),
('19950812201802002', 'Dr. Mariana Bella', '1995-12-08', 'P', 'Kristen', 'Taman Siswa', '0899888773774', '18072019051429300px-Aoiwakana.jpg', '7', '04102019071347');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_poli`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_poli` (
  `id_jenis_poli` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(20) NOT NULL,
  `inisial_jenis` varchar(2) NOT NULL,
  PRIMARY KEY (`id_jenis_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_jenis_poli`
--

INSERT INTO `tb_jenis_poli` (`id_jenis_poli`, `nama_jenis`, `inisial_jenis`) VALUES
(1, 'Umum', 'UM'),
(2, 'KB', 'KB'),
(5, 'DOTS', 'DO'),
(6, 'Gigi', 'GI'),
(7, 'Anak', 'AN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_obat`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_obat` (
  `id_kategori_obat` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kategori_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_kategori_obat`
--

INSERT INTO `tb_kategori_obat` (`id_kategori_obat`, `nama_kategori`) VALUES
(6, 'Kaplet'),
(8, 'Tablet'),
(9, 'Botol'),
(10, 'Botol 60 ml'),
(11, 'Tube'),
(12, 'Botol 300 ml'),
(13, 'Ampulfss'),
(14, 'Vlal'),
(15, 'Kapsul'),
(16, 'Pot'),
(19, 'Botol 30 ml'),
(23, 'Botol 1 ml'),
(24, 'Suntik 50 cc'),
(25, 'Suntik 200 cc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE IF NOT EXISTS `tb_obat` (
  `id_obat` tinyint(5) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(40) NOT NULL,
  `id_kategori_obat` tinyint(2) NOT NULL,
  `tgl_kedaluarsa` date NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  `stok` int(6) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `id_kategori_obat`, `tgl_kedaluarsa`, `harga_satuan`, `stok`) VALUES
(3, 'Acetosal 100 mg (Asam Asetil sallisitat)', 6, '2021-01-15', 50001, 490),
(7, 'Albedazol Tab', 8, '2020-08-27', 1000, 692),
(8, 'Albedazol Syrups', 9, '2020-05-20', 15000, 54),
(9, 'Aiprazolam 0,5 mg', 8, '2020-11-05', 1500, 7970),
(10, 'Alopurinal tablet 100 mg', 8, '2020-10-21', 3000, 4967),
(12, 'Amlodipin 5 mg', 6, '2020-11-18', 100, 705),
(13, 'Amlodipin 10 mg', 2, '2021-05-11', 200, 2998),
(15, 'Suntik 50 cc', 24, '2021-05-07', 1500, 497),
(18, 'Amoxilin 500', 6, '2019-10-17', 1300, 498),
(20, 'Paracetamol', 15, '2021-04-16', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `nik` char(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `agama` enum('Buddha','Hinddu','Islam','Katolik','Protestan') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`nik`, `nama`, `tgl_lahir`, `jk`, `gol_darah`, `agama`, `pekerjaan`, `alamat`, `no_hp`) VALUES
('1342342034023940', 'Sinta jojo', '1988-12-05', 'P', 'O', 'Islam', 'Ibu Rumah Tangga', 'Jambi', '0889389439489'),
('150903180796002', 'Ernesto Andre Yulian', '1996-07-18', 'L', 'B', '', 'Mahasiswa', 'Pulau Temiang', '085266226498'),
('8929389283989182', 'Aswar Matoa', '1996-10-11', 'L', 'A', 'Islam', 'PNS', 'Sulawesi Barat', '0898829838829'),
('9812989239892398', 'Attila Mailika', '2010-07-08', 'P', 'B', '', 'Siswi', 'Kebung', '0819829389238');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tb_pendaftaran` (
  `id_pendaftaran` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `status` enum('Selesai','Menunggu','Proses','Batal') NOT NULL,
  `id_jenis_poli` tinyint(2) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `id_petugas` varchar(3) NOT NULL,
  `no_antrian` varchar(6) NOT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal`, `status`, `id_jenis_poli`, `nik`, `id_petugas`, `no_antrian`) VALUES
(22, '2019-10-11 12:05:00', 'Selesai', 1, '1342342034023940', '  1', 'UM-001'),
(23, '2019-10-11 12:05:59', 'Selesai', 1, '150903180796002', '  1', 'UM-002'),
(24, '2019-10-11 12:08:00', 'Selesai', 1, '8929389283989182', '  1', 'UM-003'),
(25, '2019-10-11 13:47:54', 'Selesai', 7, '9812989239892398', '  1', 'AN-001'),
(26, '2019-10-11 22:35:03', 'Selesai', 1, '9812989239892398', '  1', 'UM-004'),
(27, '2019-10-15 02:36:53', 'Menunggu', 1, '9812989239892398', '  1', 'UM-001'),
(28, '2019-10-15 02:38:05', 'Menunggu', 5, '150903180796002', '  1', 'DO-001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE IF NOT EXISTS `tb_petugas` (
  `id_petugas` tinyint(8) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Buddha','Hinddu','Islam','Katolik','Protestan') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_akun` char(14) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `tgl_lahir`, `jk`, `agama`, `alamat`, `no_hp`, `foto`, `id_akun`) VALUES
(9, 'Riani', '1996-06-03', 'P', 'Islam', 'Simpang Rimbo', '099388349389', 'elda.jpg', '30092019170634'),
(10, 'Hermina Sitorus', '1961-03-01', 'P', 'Protestan', 'jln.Padang Lama, Komplek Puskesmas Pulau Temiang, Tebo Ulu', '081366772241', 'elda.jpg', '30092019170820'),
(16, 'Yohana', '1996-12-07', 'P', 'Protestan', 'Jambi', '085266226498', 'wakana.jpg', '22072019175514'),
(17, 'Admin', '1996-07-02', 'L', 'Islam', 'Jombor', '0899388383774', '3007201917494507COVER-articleLarge.jpg', '30072019174402'),
(18, 'fdfdf', '0000-00-00', '', '', 'dsds', '4', '03102019203657220px-CheHigh.jpg', '03102019203630');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE IF NOT EXISTS `tb_rekam_medis` (
  `no_rm` char(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `id_petugas` char(18) NOT NULL,
  `tgl_rekam` date NOT NULL,
  `rpt` text NOT NULL,
  `rpo` text NOT NULL,
  `riw_alergi_mkn` text NOT NULL,
  `riw_alergi_obat` text NOT NULL,
  `riw_operasi` text NOT NULL,
  `riw_ayah` text NOT NULL,
  `riw_ibu` text NOT NULL,
  `riw_penyakit` text NOT NULL,
  `jamkes` enum('Umum','BPJS','KIS','Askes') NOT NULL,
  `no_jamkes` char(20) NOT NULL,
  PRIMARY KEY (`no_rm`),
  UNIQUE KEY `id_pasien` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`no_rm`, `nik`, `id_petugas`, `tgl_rekam`, `rpt`, `rpo`, `riw_alergi_mkn`, `riw_alergi_obat`, `riw_operasi`, `riw_ayah`, `riw_ibu`, `riw_penyakit`, `jamkes`, `no_jamkes`) VALUES
('RM00001', '150903180796002', '  16', '2019-10-11', 'DBD', '-', 'Telur', '-', 'Usus Buntu', 'Diabetes', '-', '', 'BPJS', '00088299838837748837'),
('RM00002', '8929389283989182', '  16', '2019-10-08', '', '', '', '', '', '', '', '', 'BPJS', '11234567890953123456'),
('RM00003', '1342342034023940', '  16', '2019-07-08', '', '', '', '', '', '', '', '', 'Askes', '12346789012345678909'),
('RM00004', '9812989239892398', '  16', '2019-10-02', '', '', '', '', '', '', '', '', 'Umum', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep_obat`
--

CREATE TABLE IF NOT EXISTS `tb_resep_obat` (
  `id_resep_obat` char(14) NOT NULL,
  `nik` char(16) NOT NULL,
  `waktu` date NOT NULL,
  `status` enum('Menunggu','Proses','Selesai','Batal') NOT NULL,
  PRIMARY KEY (`id_resep_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep_obat`
--

INSERT INTO `tb_resep_obat` (`id_resep_obat`, `nik`, `waktu`, `status`) VALUES
('11102019072110', '150903180796002', '2019-10-11', 'Selesai'),
('11102019072904', '1342342034023940', '2019-10-11', 'Selesai'),
('11102019084959', '8929389283989182', '2019-10-11', 'Selesai'),
('11102019085627', '9812989239892398', '2019-10-11', 'Selesai'),
('11102019175446', '9812989239892398', '2019-10-11', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_berobat`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi_berobat` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` enum('Selesai','Belum') NOT NULL,
  `id_resep_obat` char(14) NOT NULL,
  `id_petugas` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
