-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 06:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_gallary`
--

CREATE TABLE `add_gallary` (
  `id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL,
  `pname` varchar(111) NOT NULL,
  `Title` text NOT NULL,
  `uid` varchar(111) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_gallary`
--

INSERT INTO `add_gallary` (`id`, `category`, `pname`, `Title`, `uid`, `comment`) VALUES
(25, 'dddddd', 'green-grass-3363622.jpg', 'Green', '21', 'jldjkdsokdsapokpipo'),
(57, 'lifestyle', 'living-room-with-furnitures-3457299.jpg', 'city', '35', 'ndndsvnlsdv'),
(13, 'dddddd', 'Screenshot (1).png', 'Bank Pic', '5', 'nhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(7, 'dddddd', 'Screenshot (13).png', 'girl', '21', 'hckjnksdnkvnmbvn n bvdsjkdkjvsnkjdvsnkjvdnskjndvsknalnavkndvlvkavdnkvdanlkvsnklvanvankjvnasdknvadkvnkjavdnvjndasknvkndskjbjksvdbkjsvdlvajnvdajkvdjvdjnajkvjdknda.vdljkvhsvdjklvslsvdhjlvsndkvsvdjklbvsabvakabsavs.jvlahlsivjiwjfoiwqowqwoidifhjiwuqwiouqopiwqojfehfjmzcjnmcxbvnvbaskdiuwqoqwipqoiqpieouiryurygfsda,,afduywiuwyiwuoqipoqiwepqew'),
(17, '', 'Screenshot (14).png', 'tset', '5', 'kddffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(10, 'dddddd', 'Screenshot (15).png', 'chips', '5', 'jknjk'),
(12, 'dddddd', 'Screenshot (16).png', 'ScreenShot', '21', 'kjnkdk'),
(14, 'dddddd', 'Screenshot (18).png', 'jKSDDS', '5', 'VDSVDDVDV'),
(16, 'dddddd', 'Screenshot (18).png', 'test', '5', 'hkfjkkdsjnkjggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg'),
(48, 'Water', 'Screenshot (18).png', 'mml', '35', 'llm'),
(49, 'Water', 'Screenshot (18).png', 'mml', '35', 'llm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_gallary`
--
ALTER TABLE `add_gallary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_gallary`
--
ALTER TABLE `add_gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
