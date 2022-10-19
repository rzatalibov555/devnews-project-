-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 06:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_devnews_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_registered_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mail`, `a_password`, `a_status`, `a_img`, `a_category`, `a_registered_date`) VALUES
(1, 'Səbuhi', 'sebuhibov@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', 'foto.jpg', 'Admin', ''),
(2, 'Raul', 'raul.akhmerov@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', 'Active', 'raul.jpg', 'Redactor', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` int(11) NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_img`, `n_file_ext`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(13, 'testiksd asd asd', 'Mestikas dsa dasd ', '2022-10-16', 'Sport', 'Active', '', '', 1, '2022-10-16 17:59:44', 2, '2022-10-21 20:37:50'),
(14, 'FESTİK', 'TESTİK', '2022-10-19', 'Education', 'Deactive', '', '', 1, '2022-10-16 18:00:03', 1, '2022-10-21 20:23:17'),
(15, 'SetHub', 'test', '2022-10-16', 'Education', 'Deactive', 'c525bbf0e129aca2e0fd6d5599232d64.jpg', '.jpg', 1, '2022-10-16 18:19:46', 2, '2022-10-21 20:37:40'),
(16, 'test file', 'check file format', '2022-10-17', 'Sport', 'Active', '691365716f4dafc6c99ef2fb91806e04.pdf', '.pdf', 1, '2022-10-16 18:25:30', 1, '2022-10-21 20:16:13'),
(19, 'SetHubsdsdsd', 'Online tedris kursu kanali.sdsdsd', '2022-10-21', 'Education', 'Active', '', '', 1, '2022-10-16 18:42:43', 2, '2022-10-21 20:32:49'),
(22, 'adsfbgf', 'sddsvfbdgvhnbm', '2022-10-21', 'Sport', 'Deactive', 'c6dedf4d68b98df4e09da35687049b08.jpg', '.jpg', 2, '2022-10-21 20:38:49', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
