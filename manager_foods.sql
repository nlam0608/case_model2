-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210910.83091680cc
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2021 at 09:22 PM
-- Server version: 8.0.26-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager_foods`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addFoods` (`name_f` VARCHAR(200), `price_f` INT, `ingredient_f` VARCHAR(200), `kind_of_f` VARCHAR(200), `image_f` VARCHAR(200))  BEGIN 
 INSERT INTO foods(name,price,ingredient,kind_of,image)VALUES(name_f,price_f,ingredient_f,kind_of_f,image_f);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateBook` (IN `type_b` VARCHAR(200), IN `status_b` VARCHAR(200), IN `customers_b` VARCHAR(200), IN `phone_b` VARCHAR(200), IN `id_b` INT)  BEGIN
    UPDATE
        booking
    SET
        type = type_b,
        status = status_b,
        customers = customers_b,
        phone = phone_b
    WHERE
         id = id_b;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateFoos` (`id_f` INT, `name_f` VARCHAR(200), `price_f` INT, `ingredient_f` VARCHAR(200), `kind_of_f` VARCHAR(200), `image_f` VARCHAR(200))  BEGIN
    UPDATE
        foods
    SET 
    	name = name_f,
        price = price_f,
        ingredient = ingredient_f,
        kind_of = kind_of_f,
        image = image_f
    WHERE
        id = id_f ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `customers` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `type`, `status`, `customers`, `phone`) VALUES
(1, '4 người', 'đã đặt', 'nguyễn văn a', '0984393414'),
(2, '12 người', 'đã đặt', 'Đỗ thị b', '0326160125'),
(3, '4 người', 'đặt bàn ', 'khach a', '0123456789'),
(4, '12 người', 'đặt bàn ', 'khach b', '954242112'),
(5, '4 người', 'đặt bàn ', 'khach a', '954242112'),
(6, '4 người', 'đặt bàn ', 'khach a', '0123456789'),
(7, NULL, 'Trống', NULL, NULL),
(8, NULL, 'Trống', NULL, NULL),
(9, NULL, 'Trống', NULL, NULL),
(10, NULL, 'Trống', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `ingredient` varchar(200) DEFAULT NULL,
  `kind_of` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `price`, `ingredient`, `kind_of`, `image`) VALUES
(1, 'thịt trâu gác bếp', 700000, 'thịt trâu', 'Khai vị', 'thittrau.jpeg'),
(2, 'Sườn xào', 150000, 'Thịt sườn', 'Món Chính', 'suonxao.jpg'),
(3, 'Tồm hùm alaska', 1500000, 'thịt tôm ', 'Món Chính', 'tomhum.png'),
(5, 'kem cốm', 50000, 'Thành phần chính Gồm 100% sữa tươi nguyên chất và bơ', 'Món tráng miệng', 'kem.jpg'),
(6, 'Sét hoa quả ', 200000, 'Nhiều loại hoa quả', 'Khai vị', 'hoaqua.jpg'),
(7, 'Sò huyết tứ xuyên', 230000, 'Sò huyết: 1 ký Tỏi: 1 củ Sả: 3 tép Gừng: 1 củ Ớt sừng: 2 quả Tương ớt: 2 muỗng Bột năng: nửa chén Sốt cà chua: nửa chén Giấm gạo: 1 muỗng ', 'Khai vị', 'sohuyet.jpg'),
(13, 'Gỏi Ngó Sen Tôm Thịt', 120000, 'Ngó sen , Tôm , Thịt ', 'Khai vị', 'goingosentom.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int NOT NULL,
  `quantity` int DEFAULT NULL,
  `foods_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `booking_id` int DEFAULT NULL,
  `blackmail` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `orderdetails_id` int DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `address`, `email`, `password`) VALUES
(1, 'Lam', '20', 'Hà Nội', 'nlam06082001@gmail.com', 'tet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_id` (`foods_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `orderdetails_id` (`orderdetails_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`foods_id`) REFERENCES `foods` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orderdetails_id`) REFERENCES `orderdetails` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
