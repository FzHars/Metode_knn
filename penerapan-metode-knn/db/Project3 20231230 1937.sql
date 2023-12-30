-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema metode_knn
--

CREATE DATABASE IF NOT EXISTS metode_knn;
USE metode_knn;

--
-- Definition of table `tbl_akun`
--

DROP TABLE IF EXISTS `tbl_akun`;
CREATE TABLE `tbl_akun` (
  `kode_akun` char(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

/*!40000 ALTER TABLE `tbl_akun` DISABLE KEYS */;
INSERT INTO `tbl_akun` (`kode_akun`,`nama_lengkap`,`username`,`password`,`level`) VALUES 
 ('AD1','Administrator','Admin','12345','Admin');
/*!40000 ALTER TABLE `tbl_akun` ENABLE KEYS */;


--
-- Definition of table `tbl_alternatif`
--

DROP TABLE IF EXISTS `tbl_alternatif`;
CREATE TABLE `tbl_alternatif` (
  `kode_alternatif` char(20) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alternatif`
--

/*!40000 ALTER TABLE `tbl_alternatif` DISABLE KEYS */;
INSERT INTO `tbl_alternatif` (`kode_alternatif`,`nama_alternatif`) VALUES 
 ('A01','WASTED'),
 ('A02','HELL'),
 ('A03','NERF');
/*!40000 ALTER TABLE `tbl_alternatif` ENABLE KEYS */;


--
-- Definition of table `tbl_kriteria`
--

DROP TABLE IF EXISTS `tbl_kriteria`;
CREATE TABLE `tbl_kriteria` (
  `kode_kriteria` varchar(20) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kode_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kriteria`
--

/*!40000 ALTER TABLE `tbl_kriteria` DISABLE KEYS */;
INSERT INTO `tbl_kriteria` (`kode_kriteria`,`nama_kriteria`,`keterangan`) VALUES 
 ('K01','CEK KRITERIA','KET'),
 ('K02','KRITERIA AJA','KET LAGI');
/*!40000 ALTER TABLE `tbl_kriteria` ENABLE KEYS */;


--
-- Definition of table `tbl_subkriteria`
--

DROP TABLE IF EXISTS `tbl_subkriteria`;
CREATE TABLE `tbl_subkriteria` (
  `kode_subkriteria` varchar(20) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `kode_kriteria` varchar(20) NOT NULL,
  `nilai_subkriteria` double NOT NULL,
  PRIMARY KEY (`kode_subkriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subkriteria`
--

/*!40000 ALTER TABLE `tbl_subkriteria` DISABLE KEYS */;
INSERT INTO `tbl_subkriteria` (`kode_subkriteria`,`nama_subkriteria`,`kode_kriteria`,`nilai_subkriteria`) VALUES 
 ('S01','NAMA SUB KRITERIA','K01',100),
 ('S02','NAMA KRITERIA SUB','K01',200),
 ('S03','AJA','K02',200),
 ('S04','SUB AJA','K02',100);
/*!40000 ALTER TABLE `tbl_subkriteria` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
