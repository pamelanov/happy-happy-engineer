-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2016 at 03:02 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhe`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('admin', '123'),
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `foto_gallery` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`foto_gallery`) VALUES
('asssss3.jpg'),
('asssss4.jpg'),
('Jerseyfix.png'),
('asssss5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ID_News` int(11) NOT NULL,
  `judul_berita` varchar(500) NOT NULL,
  `Tanggal` date NOT NULL,
  `isi_berita` varchar(8000) NOT NULL,
  `foto_berita` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID_News`, `judul_berita`, `Tanggal`, `isi_berita`, `foto_berita`) VALUES
(3, 'HAHAHA', '2015-01-01', 'Jerman sukses meredam perlawanan sengit Georgia dengan meraih kemenangan tipis 2-1 dalam laga pamungkas kualifikasi Piala Eropa 2016 di Red Bull Arena Lipzig, Senin (12/10) dini hari WIB. Hasil ini cukup bagi pasukan Die Mannschaft untuk lolos ke babak utama turnamen usai menjadi pemuncak Grup D kualifikasi.\r\n\r\nBabak Pertama:\r\n\r\nMembutuhkan kemenangan guna memastikan tempat di babak utama Piala Eropa sekaligus memuncaki persaingan grup, Jerman langsung tampil menggebrak sejak peluit awal pertandingan dibunyikan oleh wasit.\r\n\r\nKans matang bagi Jerman untuk membuka keunggulan datang di menit ke-11, namun tembakan Marco Reus mampu dimentahkan Nukri Revishvili. Semenit kemudian, Reus kembali mampu menembus pertahanan Georgia, hanya saja tembakannya melesat jauh di atas mistar.\r\n\r\nHingga pertengahan babak pertama, selain barisan depan Die Mannschaft yang kurang optimal, ketangguhan Revishvili di bawah mistar juga membuat frustrasi tuan rumah. Serangan balik Georgia harus diwaspadai, Tornike Okriashvili sempat memaksa Manuel Neuer melakukan penyelamatan krusial di menit ke-28.\r\n\r\nPertahanan rapat Georgia hingga penampilan prima Revishvili menjadi penghalang bagi Jerman untuk dapat membuka keunggulan dan hingga paruh pertama permainan berakhir, kedudukan imbang tanpa gol tetap bertahan.\r\n\r\nBabak Kedua:\r\n\r\nLima menit selepas jeda pertandingan, sebuah kesalahan dilakukan Jaba Kankava kala menjatukan Mesut Ozil di kotak penalti. Thomas Muller pun tak melewatkan kesempatan yang ada untuk membuka keunggulan Jerman usai eksekusinya membobol gawang Revishvili.\r\n\r\nMenit ke-53, Kankava menebus kesalahannya dengan mampu menyamakan kedudukan bagi Georgia setelah tembakan voli kaki kirinya dari jarak cukup jauh tak mampu diantisipasi oleh Neuer yang mati langkah dalam mengamankan gawangnya.\r\n\r\nGeorgia memang tak banyak menguasai permainan, namun serangan mereka begitu efektif dan hampir mampu berbalik unggul di menit ke-60 saat Okriashvili yang tak terkawal menyambar bola liar di depan gawang Jerman, akan tetapi sepakannya bisa diselamatkan Neuer.\r\n\r\nKeputusan Joachim Low yang memasukkan Max Kruse dalam 15 menit akhir permainan berbuah hasil ketika penyerang Wolfsburg itu sukes menyarangkan bola ke gawang Georgia di menit ke-79. Usai kembali memimpin, Jerman kian gencar menekan, hanya saja tidka ada tambahan gol tercipya hingga laga berakhir.\r\n\r\nSusunan Pemain:\r\n\r\nJERMAN (4-2-3-1): Neuer; Ginter, Boateng, Hummels, Hector; Kroos, Gundogan; Reus, Ozil, Muller; Schurrle.\r\n\r\nGEROGIA (5-4-1): Revishvili; Lobzhanidze, Kverkvelia, Amisulashvili, Kashia, Navalovski; Qazaishvili, Kankava, Kvekveskiri, Okriashvili; Gelashvili.', 'The_Coboys.jpg'),
(4, 'DOta', '2015-04-02', '      hahaha hihihi hohoho huhuhu hehehe\r\nhahihuheho huhahiohe hasdbansbdad\r\nasdj;asjdlkjasdlasjd. ajsdkajsd;jasd\r\n\r\n     Ini ada alh contoh paragraf. apakah ketika di post akan menjadi sebuiah paragraf??\r\nha', 'BX6CAaZCUAARyTT.jpg'),
(5, 'SFHUJUOO', '2015-02-01', 'JLSFL F', 'flag.png'),
(6, 'hhhhhh', '2015-01-01', 'sssss\r\nsss\r\n\r\nssss', 'jadwal.PNG'),
(7, 'nnnnnn', '2015-01-01', 'ffff\r\nff\r\n\r\nffffffffff', 'Kelas.PNG'),
(8, 'pppppp', '2016-04-01', 'lllll\r\nll\r\n\r\nlllllllllll', 'ufo.jpg'),
(9, 'sssffff', '2015-03-03', 'llllllll\r\nlppp\r\npp\r\n\r\npppppp', 'drogon.gif'),
(10, 'sssffff', '2015-03-03', 'llllllll\r\nlppp\r\npp\r\n\r\npppppp', 'permen.png'),
(11, 'ppopopopo', '2015-09-02', 'ffff\r\nhhhh\r\n\r\nhhhjjjjjjjj', 'ufo.png'),
(12, 'hhhhhhoooooo', '2016-06-12', 'PLPOPJJZXBCHJXCB\r\n\r\nBFLBZBCXZC', 'flag_green.png'),
(13, 'bbbb', '2016-07-13', 'llllppppooooo\r\n\r\nnjlsblofyshbn', 'permenn.png'),
(14, 'ccccccccccc', '2015-06-18', '0', 'asssss.jpg'),
(15, 'jjjjjjjjjjj', '2015-02-09', 'jjjjjjjjjj\r\n*\r\n\r\n*\r\njj\r\n*\r\n\r\n*\r\n', 'Hatori_Mengejar_Cinta.jpg'),
(16, 'bbbbb', '2015-09-18', 'lllllll\r\n\r\nlllll\r\n\r\nlllll', 'Hatori_Mengejar_Cinta1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `ID_Produk` varchar(6) NOT NULL,
  `Jenis_Produk` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Deskripsi_Produk` varchar(500) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Upload_Path` varchar(300) NOT NULL,
  `Gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Jenis_Produk`, `Harga`, `Deskripsi_Produk`, `Size`, `Upload_Path`, `Gender`) VALUES
('A22E', 'Summer Denim Pants', 300000, 'A comfortable pants designed to fit into your daily lifestyle. Made with the best local fabric, Summer Denim Pants is the pants you''re looking for.', '30, 31, 32, 33, 34, 35, 36', 'H2E_420.jpg', 'M'),
('B78K', 'Wonderland Denim', 450000, 'This tutorial will demonstrate how to make “Pagination in CodeIgniter”. In this post we used CodeIgniter pagination class by initializing pagination library.', '28', 'H2E_790.jpg', 'F'),
('C84J', 'Girly Jeans', 300000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', '29', 'H2E_5458.jpg', 'A'),
('C903', 'Boyish Shirt', 250000, 'This tutorial will demonstrate how to make “Pagination in CodeIgniter”. In this post we used CodeIgniter pagination class by initializing pagination library.', 'L', 'H2E_5668.jpg', 'M'),
('K90C', 'Summer T-Shirt', 200000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', 'S', 'H2E_6146.jpg', 'F'),
('O90D', 'Alice Dress', 350000, 'base_url This is the full URL to the controller class/function containing your pagination. In the example above, it is pointing to a controller called "Test" and a function called "page". Keep in mind that you can re-route your URI if you need a different structure.', 'S', 'H2E_2170.jpg', 'F'),
('W23J', 'Sunnies Dress', 450000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', 'M', 'H2E_3096.jpg', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
