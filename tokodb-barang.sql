-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table tokoku.barang: ~4 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `gambar`, `id_kategori`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
	(1, 'Yellow Sweater', 75000, 15, 'product-1.jpg', 2, 1, '2022-06-26 10:58:41', NULL, NULL),
	(2, 'Dusty Pink Crop Sweater', 100000, 15, 'product-2.jpg', 2, 1, '2022-06-26 11:00:22', NULL, NULL),
	(3, 'Green Jacket', 250000, 5, 'product-3.jpg', 1, 1, '2022-06-26 11:01:06', NULL, NULL),
	(4, 'Grey Syal', 50000, 20, 'product-4.jpg', 3, 1, '2022-06-26 11:01:40', NULL, NULL),
	(5, 'Yellow Bag', 150000, 50, 'product-7.jpg', 3, 1, '2022-06-26 11:02:13', NULL, NULL);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
