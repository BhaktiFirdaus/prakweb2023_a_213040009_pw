-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for prakweb2023_a_213040009_pw
CREATE DATABASE IF NOT EXISTS `prakweb2023_a_213040009_pw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `prakweb2023_a_213040009_pw`;

-- Dumping structure for table prakweb2023_a_213040009_pw.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Judul_Buku` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Penulis` varchar(50) DEFAULT NULL,
  `Penerbit` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table prakweb2023_a_213040009_pw.buku: ~10 rows (approximately)
INSERT INTO `buku` (`id`, `Judul_Buku`, `Penulis`, `Penerbit`, `Gambar`) VALUES
	(1, 'Lebih Senyap dari Bisikan', 'Andina Dwifatma', 'Gramedia', 'Gambar1.jpg'),
	(2, 'Dikta & Hukum', 'Dhia\'an Farah', 'Gramedia', 'Gambar2.jpg'),
	(3, 'Perempuan yang Menangis Kepada Bulan Hitam', 'Dian Purnomo', 'Gramedia', 'Gambar3.jpg'),
	(4, 'Kekasih Musim Gugur', 'Laksmi Pamuntjak', 'Gramedia', 'Gambar4.jpg'),
	(5, 'Bukan Buku Nikah', 'Ria Ricis', 'Gramedia', 'Gambar5.jpg'),
	(6, 'Sumur', 'Eka Kurniawan', 'Gramedia', 'Gambar6.jpg'),
	(7, 'Rapijali', 'Dee Lestari', 'Gramedia', 'Gambar7.jpeg'),
	(8, 'Wingit', 'Sara Wijayanto', 'Gramedia', 'Gambar8.jpg'),
	(9, 'Off The Record 3', 'Ria SW', 'Gramedia', 'Gambar9.jpg'),
	(10, 'Si Putih', 'Tere Liye', 'Gramedia', 'Gambar10.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
