-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 06:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `appetizer`
--

CREATE TABLE `appetizer` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appetizer`
--

INSERT INTO `appetizer` (`id`, `nama`, `harga`, `gambar`, `tipe`) VALUES
(1, 'Cheese Bites', 25000, '/appetizer/cheese-bites-min.png', 'appetizer'),
(2, 'Skinny Dippers', 40000, '/appetizer/SKINNY_DIPPERS-min.png', 'appetizer'),
(3, 'Fried Calamar', 32000, '/appetizer/fried-calamar-min.png', 'appetizer'),
(4, 'Bread Stick', 36000, '/appetizer/breadsticks-min.png', 'appetizer'),
(5, 'Chicken Strips ', 45000, '/appetizer/chicken-strips-min.png', 'appetizer'),
(6, 'Potato Wedges', 15000, '/appetizer/potato-wedges-min.png', 'appetizer');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `nama`, `harga`, `gambar`, `tipe`) VALUES
(1, 'Fruit Dessert', 35000, '/dessert/Fruit-Dessert-min.png', 'dessert'),
(2, 'Chocolate Ice Cream', 20000, '/dessert/Chocolate-Ice-Cream-min.png', 'dessert'),
(3, 'Strawberry Cheesecake', 35000, '/dessert/Strawberry-Cheesecake-min.png', 'dessert'),
(4, 'Strawberry Ice Cream', 20000, '/dessert/Strawberry-Ice-Cream-min.png', 'dessert'),
(5, 'Macaroons', 30000, '/dessert/Macaroons.jpg', 'dessert'),
(6, 'Berries Pancake', 45000, '/dessert/Berries-Pancake-min.png', 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `nama`, `harga`, `gambar`, `tipe`) VALUES
(1, 'Grape Juice', 25000, '/drink/grape-juice-min.png', 'drink'),
(2, 'Pineapple Juice', 20000, '/drink/pinaple-juice-min.png', 'drink'),
(3, 'Coffee', 15000, '/drink/Coffee-min.png', 'drink'),
(4, 'Lemon Squash', 22000, '/drink/lemon-squash-min.png', 'drink'),
(5, 'Ice Tea', 10000, '/drink/ice-tea-min.png', 'drink'),
(6, 'Orange Juice', 22000, '/drink/orange-juice-min.png', 'drink');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `nama`, `harga`, `gambar`, `tipe`) VALUES
(1, 'Beef &amp; Potato Bread', 45000, '/food/Beef-and-Potato-Bread-min.png', 'food'),
(2, 'Grilled Salmon', 55000, '/food/Grilled-Salmon-with-Lemon-min.png', 'food'),
(3, 'Smokey Salmon', 50000, '/food/Smokey-Salmon-min.png', 'food'),
(4, 'Beef Burger', 40000, '/food/Beef-Burger-min.png', 'food'),
(5, 'Italian Pizza', 30000, '/food/Italian-Pizza-min.png', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `gambar`, `tipe`, `status`) VALUES
(1, 'Cheese Bites', 25000, '/appetizer/cheese-bites-min.png', 'appetizer', 'disable'),
(2, 'Skinny Dippers', 40000, '/appetizer/SKINNY_DIPPERS-min.png', 'appetizer', 'active'),
(3, 'Fried Calamar', 32000, '/appetizer/fried-calamar-min.png', 'appetizer', 'active'),
(4, 'Bread Stick', 36000, '/appetizer/breadsticks-min.png', 'appetizer', 'active'),
(5, 'Chicken Strips ', 45000, '/appetizer/chicken-strips-min.png', 'appetizer', 'active'),
(6, 'Potato Wedges', 15000, '/appetizer/potato-wedges-min.png', 'appetizer', 'active'),
(7, 'Beef &amp; Potato Bread', 45000, '/food/Beef-and-Potato-Bread-min.png', 'food', 'active'),
(8, 'Grilled Salmon', 55000, '/food/Grilled-Salmon-with-Lemon-min.png', 'food', 'active'),
(9, 'Smokey Salmon', 50000, '/food/Smokey-Salmon-min.png', 'food', 'active'),
(10, 'Beef Burger', 40000, '/food/Beef-Burger-min.png', 'food', 'active'),
(11, 'Italian Pizza', 30000, '/food/Italian-Pizza-min.png', 'food', 'active'),
(12, 'Grape Juice', 25000, '/drink/grape-juice-min.png', 'drink', 'active'),
(13, 'Pineapple Juice', 20000, '/drink/pinaple-juice-min.png', 'drink', 'active'),
(14, 'Coffee', 15000, '/drink/Coffee-min.png', 'drink', 'active'),
(15, 'Lemon Squash', 22000, '/drink/lemon-squash-min.png', 'drink', 'active'),
(16, 'Ice Tea', 10000, '/drink/ice-tea-min.png', 'drink', 'active'),
(17, 'Orange Juice', 22000, '/drink/orange-juice-min.png', 'drink', 'active'),
(18, 'Fruit Dessert', 35000, '/dessert/Fruit-Dessert-min.png', 'dessert', 'active'),
(19, 'Chocolate Ice Cream', 20000, '/dessert/Chocolate-Ice-Cream-min.png', 'dessert', 'active'),
(20, 'Strawberry Cheesecake', 35000, '/dessert/Strawberry-Cheesecake-min.png', 'dessert', 'active'),
(21, 'Strawberry Ice Cream', 20000, '/dessert/Strawberry-Ice-Cream-min.png', 'dessert', 'active'),
(22, 'Macaroons', 30000, '/dessert/Macaroons.jpg', 'dessert', 'active'),
(23, 'Berries Pancake', 45000, '/dessert/Berries-Pancake-min.png', 'dessert', 'active'),
(25, 'Roasted Chicken', 400000, '/food/Roasted-Chicken-min.png', 'food', 'disable'),
(26, 'Orange Juice', 12000, '/drink/orange-juice-min.png', 'drink', 'disable'),
(27, 'asd123', 123, '/food/mango-juice-min.png', 'food', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `pesanan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pesanan`, `jumlah`, `waktu`) VALUES
(1, 'Array', 47000, '2018-01-14 14:42:25'),
(2, '[{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"}]', 60000, '2018-01-14 14:49:42'),
(3, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"}]', 92000, '2018-01-14 14:50:43'),
(4, '[{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"2\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"}]', 75000, '2018-01-14 14:51:25'),
(5, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"6\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 288000, '2018-01-14 14:54:12'),
(6, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"3\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"}]', 111000, '2018-01-14 14:54:34'),
(7, '[{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"}]', 92000, '2018-01-14 15:00:21'),
(8, '[{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"}]', 15000, '2018-01-14 15:00:48'),
(9, '[{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"},{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/food\\/Beef-Burger-min.png\",\"jumlah\":\"1\",\"nama\":\"Beef Burger\",\"harga\":\"40000\"},{\"gambar\":\"img\\/food\\/Smokey-Salmon-min.png\",\"jumlah\":\"1\",\"nama\":\"Smokey Salmon\",\"harga\":\"50000\"}]', 173000, '2018-01-14 15:08:11'),
(10, '[{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 83000, '2018-01-14 16:59:05'),
(11, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"}]', 68000, '2018-01-14 17:57:32'),
(12, '[{\"gambar\":\"img\\/appetizer\\/SKINNY_DIPPERS-min.png\",\"jumlah\":\"1\",\"nama\":\"Skinny Dippers\",\"harga\":\"40000\"},{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/food\\/Grilled-Salmon-with-Lemon-min.png\",\"jumlah\":\"1\",\"nama\":\"Grilled Salmon\",\"harga\":\"55000\"},{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"}]', 191000, '2018-01-14 18:02:43'),
(13, '[{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"}]', 51000, '2018-01-14 18:21:41'),
(14, '[{\"gambar\":\"img\\/appetizer\\/SKINNY_DIPPERS-min.png\",\"jumlah\":\"1\",\"nama\":\"Skinny Dippers\",\"harga\":\"40000\"},{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"2\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"},{\"gambar\":\"img\\/appetizer\\/chicken-strips-min.png\",\"jumlah\":\"1\",\"nama\":\"Chicken Strips \",\"harga\":\"45000\"},{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/food\\/Italian-Pizza-min.png\",\"jumlah\":\"1\",\"nama\":\"Italian Pizza\",\"harga\":\"30000\"},{\"gambar\":\"img\\/food\\/Smokey-Salmon-min.png\",\"jumlah\":\"1\",\"nama\":\"Smokey Salmon\",\"harga\":\"50000\"},{\"gambar\":\"img\\/food\\/Beef-Burger-min.png\",\"jumlah\":\"1\",\"nama\":\"Beef Burger\",\"harga\":\"40000\"},{\"gambar\":\"img\\/dessert\\/Strawberry-Ice-Cream-min.png\",\"jumlah\":\"1\",\"nama\":\"Strawberry Ice Cream\",\"harga\":\"20000\"},{\"gambar\":\"img\\/dessert\\/Chocolate-Ice-Cream-min.png\",\"jumlah\":\"1\",\"nama\":\"Chocolate Ice Cream\",\"harga\":\"20000\"},{\"gambar\":\"img\\/dessert\\/Fruit-Dessert-min.png\",\"jumlah\":\"1\",\"nama\":\"Fruit Dessert\",\"harga\":\"35000\"},{\"gambar\":\"img\\/drink\\/Coffee-min.png\",\"jumlah\":\"1\",\"nama\":\"Coffee\",\"harga\":\"15000\"},{\"gambar\":\"img\\/drink\\/orange-juice-min.png\",\"jumlah\":\"1\",\"nama\":\"Orange Juice\",\"harga\":\"22000\"}]', 415000, '2018-01-14 19:09:39'),
(15, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"},{\"gambar\":\"img\\/appetizer\\/breadsticks-min.png\",\"jumlah\":\"1\",\"nama\":\"Bread Stick\",\"harga\":\"36000\"},{\"gambar\":\"img\\/appetizer\\/potato-wedges-min.png\",\"jumlah\":\"1\",\"nama\":\"Potato Wedges\",\"harga\":\"15000\"}]', 83000, '2018-01-14 19:14:49'),
(16, '[{\"gambar\":\"img\\/dessert\\/Berries-Pancake-min.png\",\"jumlah\":\"1\",\"nama\":\"Berries Pancake\",\"harga\":\"45000\"},{\"gambar\":\"img\\/dessert\\/Strawberry-Ice-Cream-min.png\",\"jumlah\":\"3\",\"nama\":\"Strawberry Ice Cream\",\"harga\":\"20000\"}]', 105000, '2018-01-14 19:31:34'),
(17, '[{\"gambar\":\"img\\/appetizer\\/SKINNY_DIPPERS-min.png\",\"jumlah\":\"2\",\"nama\":\"Skinny Dippers\",\"harga\":\"40000\"},{\"gambar\":\"img\\/drink\\/grape-juice-min.png\",\"jumlah\":\"1\",\"nama\":\"Grape Juice\",\"harga\":\"25000\"}]', 105000, '2018-01-15 05:11:00'),
(18, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 32000, '2018-01-15 05:29:51'),
(19, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 32000, '2018-01-15 05:29:54'),
(20, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 32000, '2018-01-15 05:29:56'),
(21, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 32000, '2018-01-15 05:29:58'),
(22, '[{\"gambar\":\"img\\/appetizer\\/fried-calamar-min.png\",\"jumlah\":\"1\",\"nama\":\"Fried Calamar\",\"harga\":\"32000\"}]', 32000, '2018-01-15 05:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`, `login`) VALUES
(1, 'admin', 'admin', '2018-01-03 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
