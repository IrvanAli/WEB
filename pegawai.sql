# MySQL-Front Dump 2.5
#
# Host: localhost   Database: pw2
# --------------------------------------------------------
# Server version 5.0.45-community-nt


#
# Table structure for table 'pegawai'
#

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(10) NOT NULL DEFAULT '' ,
  `nama` varchar(30) NOT NULL DEFAULT '' ,
  `tgllahir` date NOT NULL DEFAULT '0000-00-00' ,
  `jenkel` enum('0','1') NOT NULL DEFAULT '0' ,
  `alamat` text NOT NULL DEFAULT '' ,
  `namafoto` varchar(50) NOT NULL DEFAULT '' ,
  PRIMARY KEY (`nip`),
  UNIQUE KEY nim (`nip`),
   KEY nim_2 (`nip`)
);



#
# Dumping data for table 'pegawai'
#

INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`, `namafoto`) VALUES("0111500382", "Abdul Malik", "1970-01-01", "0", "Jakarta Bagian Selatan", "achmatim-mag.jpg");
INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`, `namafoto`) VALUES("0411534000", "Budiono", "1986-01-01", "0", "Bandung", "");
INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`, `namafoto`) VALUES("5555555555", "sdsf", "1970-01-01", "0", "sfsf", "180px-DSCN0411.JPG");
INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`, `namafoto`) VALUES("5222222222", "sds", "1970-01-01", "0", "dsdsd", "02_lan_router.gif");
