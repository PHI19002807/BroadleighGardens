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

-- Dumping data for table broadleighgardens.gifttokens: ~0 rows (approximately)

-- Dumping data for table broadleighgardens.loyalty: ~0 rows (approximately)

-- Dumping data for table broadleighgardens.orders: ~0 rows (approximately)

-- Dumping data for table broadleighgardens.products: ~0 rows (approximately)
INSERT INTO `products` (`ProductID`, `Name`, `Description`, `Price`, `Quantity`, `ImageURL`, `Category`) VALUES
	(1, 'Product Name', 'Product Description', 10.99, 100, 'image_url.jpg', 'Autumn'),
	(2, 'Product Name', 'Product Description', 10.99, 100, 'image_url.jpg', 'Autumn'),
	(3, 'Autumn Flowers', 'Beautiful flowers for the autumn season', 29.99, 50, 'images/autumn_flowers.jpg', 'Autumn'),
	(4, 'Autumn Flowers', 'Beautiful flowers for the autumn season', 10.50, 50, 'images/autumn_flowers.png', 'Autumn');

-- Dumping data for table broadleighgardens.reviews: ~0 rows (approximately)

-- Dumping data for table broadleighgardens.users: ~0 rows (approximately)
INSERT INTO `users` (`UserID`, `Fname`, `Lname`, `Email`, `Password`) VALUES
	(7, 'bob', 'bob', 'bob@bob.com', '$2y$10$zZ/Ll3Z9zWYdj.95xYDs9uMelUlSohcu7me1VXL/hRJrhOUGn/gKy'),
	(8, 'bob', 'bob', 'bobby@bob.com', '$2y$10$/QEHaF.8wW9hlwjs.NTFKeCxCMwhT61/J9J9wwzd4xa7nGOp0Om8i');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
