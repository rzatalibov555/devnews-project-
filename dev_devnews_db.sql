-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 06:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` int(11) NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_img`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(1, 'test', 'lorem ipsum dolar sit amet', '2022-10-12', 'Sport', 'Deactive', '', 1, '2022-10-12 19:25:17', 0, ''),
(2, 'test2', 'lorem ipsum dolar sit amet2', '2022-10-12', 'ferrari', 'Active', '', 1, '2022-10-12 19:26:35', 0, ''),
(3, 'SCZdxvfcgvbn', 'aCSzvdxbfcgvhbnm,', '2022-10-21', 'Sport', 'Active', '', 1, '2022-10-12 19:29:38', 0, ''),
(6, 'Huseyn', 'WebDeveloper olaraq fealiyyete basladi.', '2022-10-12', 'Finance', 'Active', '', 1, '2022-10-12 19:36:44', 0, ''),
(7, 'Raul', 'Backend developer olaraq caliwir.', '2022-10-13', 'Sport', 'Active', '', 1, '2022-10-12 19:37:38', 0, ''),
(8, 'qDWAFESGRDTGFNHMJ,KJ', 'ADSZFDXFBCGNVHMBJNMK.,', '2022-10-12', 'Sport', 'Active', '', 1, '2022-10-12 19:39:55', 0, ''),
(9, 'Men Proqramciyam', 'Lorem lorem lore bu menim lorem', '2022-10-12', 'Sport', 'Active', '', 2, '2022-10-12 20:07:34', 0, ''),
(10, 'hahahaha', 'i am hahahaha', '2022-10-12', 'Sport', 'Deactive', '', 2, '2022-10-12 20:08:52', 0, ''),
(11, 'tatatta', 'tatatata i am ayyayayaaytata', '2022-10-12', 'Sport', 'Active', '', 2, '2022-10-12 20:09:13', 0, '');

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
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
